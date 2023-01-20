<?php

    function get_column_names($tbl) {
        switch ($tbl) {
            case 'products':
                $column_names = array("I.D", "Name", "Unit Price", "Vendor", "Category", "Stocks Available");
                break;

            case 'warehouses':
                $column_names = array("I.D", "Tag", "Address", "Manager");
                break;

            default:
                # code...
                break;
        }

        return $column_names;
    }


    function echo_column_names($tbl) {

        $column_names = get_column_names($tbl);

        $N = count($column_names);

        for ($i = 0; $i < $N; $i++) {
            echo "<th> $column_names[$i]</th>";
        }
    }


    function redirect($url, $status_code = 303)
    {
       header('Location: ' . $url, true, $status_code);
       die();
    }
?>