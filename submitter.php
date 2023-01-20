<?php

    include("db_utils.php");

    include("utils.php");

    $data_type = $_GET['type'];

    $fields = array(
        "products" => array("name", "unit_price", "vendor", "category"),
        "warehouses" => array("tag", "address"),
        "managers" => array("name", "email","password"),
        "product_locations" => array("product_id", "warehouse_id"),
        "stock_flows" => array( "product_id", "flow_type", "quantity","destination_address","warehouse_id"),
    );

    $cols = $fields[$data_type];

    // echo implode(",", $cols);

    $data = array();

    for ($i = 0; $i < count($cols); $i++) {
        $col = $cols[$i];

        array_push($data, "'$_POST[$col]'");

    }

    // echo implode(",", $data);

    $cols = implode(",", $cols);
    $data = implode(",", $data);
    $sql = "INSERT INTO $data_type ($cols) VALUES ($data)";

    if (insert_data($sql)) {
        if ($datatype == "managers"){
            include ("login_managers.php");
        }
        else{
            redirect("$data_type.php");
        }
        
    }

?>