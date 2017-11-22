<?php
    include("conexion.php");

    session_start();

    // product details
    $productid = isset($_GET['id']) ?  $_GET['id'] : die;
    $quantity = isset($_GET['quantity']) ?  $_GET['quantity'] : die;
    $user_id = 1;
    $created = date('Y-m-d H:i:s');

    // insert query
    $conexion->query("INSERT INTO cart_items (product_id, quantity, user_id, created) VALUES ('$productid','$quantity', '$user_id','$created')");

    header('Location: index.php?action=added&id=' . $id);
?>