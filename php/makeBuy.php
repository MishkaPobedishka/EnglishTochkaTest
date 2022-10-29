<?php
    $mysqli = new mysqli('localhost', 'MishkaPobedishka' ,'fToAnE6X', 'testdb');
    $mysqli->set_charset("utf8");

    $query = "INSERT INTO `orders_users` (`product_id`, `user_id`) VALUES ('".($_POST['product'])."','".($_POST['user'])."');";
    if ($mysqli->query($query)) {
        $data = "Покупка совершена";
        echo $data;
    }
    else {
        $data = "Совершить покупку не удалось";
        echo $data;
    }
?>