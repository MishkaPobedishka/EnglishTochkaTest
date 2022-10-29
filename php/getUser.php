<?php
    $mysqli = new mysqli('localhost', 'MishkaPobedishka' ,'fToAnE6X', 'testdb');
    $mysqli->set_charset("utf8");

    $query = "SELECT `id` FROM `users` WHERE `login` = '".($_GET['login'])."'";
    $result = $mysqli->query($query);
    while ($row = $result->fetch_assoc()) {
        $user_id = $row["id"];
    }
    $data[] = array("id" => $user_id);
    $result->free();

    $query = "SELECT `price` FROM `coins` WHERE `user_id` = '".$user_id."'";
    $result = $mysqli->query($query);
    $balance = 0;
    while ($row = $result->fetch_array()) {
        $balance += $row["price"];
    }
    $data[] = array("balance" => $balance);
    $result->free();

    $query = "SELECT id, price FROM products";
    $result = $mysqli->query($query);
    while ($row = $result->fetch_array()) {
        $temp_data[] = array($row["id"] => $row["price"]);
    }
    $data["products"] = $temp_data;
    $temp_data= array();
    $result->free();

    $query = "SELECT `product_id` FROM `orders_users` WHERE `user_id` = '".$user_id."'";
    $result = $mysqli->query($query);
    while ($row = $result->fetch_array()) {
        if ($row["product_id"] != "")
            $temp_data[] = array($row["product_id"] => "true");
    }
    $data["buyed_products"] = $temp_data;
    $result->free();
    header('Content-type: application/json');
    echo json_encode( $data );
    $mysqli->close();
?>