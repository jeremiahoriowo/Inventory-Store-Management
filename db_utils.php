<?php

function connect() {

    $conn = new mysqli("localhost", "root", "", "inventory");

    if (!$conn) {
        die("Could not connect to MySQL. Try starting the server");
    }

    return $conn;
}

function fetch_response($sql) {
    $conn = connect();

    $result = $conn->query($sql);

    $results = array();

    while ($row = $result->fetch_assoc()) {
        array_push($results, $row);
    }

    return $results;
}

function insert_data($sql) {
    $conn = connect();

    $result = $conn->query($sql);

    return $result;
}
?>