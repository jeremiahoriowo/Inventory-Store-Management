<?php

    include("db_utils.php");


    $data_type = $_GET['dataType'];

    header('Content-Type: application/json; charset=utf-8');

    switch ($data_type) {
        case 'products':

            $stock_flow_sub_query = "SELECT product_id, sum(CASE
                WHEN flow_type='inward' THEN quantity
                WHEN flow_type='outward' THEN quantity * -1
                ELSE 0
            END) as volume
            FROM stock_flows GROUP BY product_id
            ";


            $sql = "SELECT products.id,products.name,products.vendor, products.unit_price, 
                    products.category, stocks.volume as stock_count FROM products 
                    LEFT JOIN ($stock_flow_sub_query) as stocks ON stocks.product_id=products.id;";

            break;

        case 'warehouses':
            $sql = "SELECT * FROM warehouses;";
            break;

        case 'stock_flows':
            $sql = "SELECT * FROM stock_flows;";
            break;

        case 'product_locations':
            $sql = "SELECT warehouses.tag as warehouse, products.name as product FROM product_locations 
                    JOIN warehouses ON warehouses.id=product_locations.warehouse_id 
                    JOIN products ON products.id=product_locations.product_id;";
            break;

        default:
            # code...
            break;
    }

    $data = fetch_response($sql);

    $data = array("data" => $data);

    echo json_encode($data);

?>