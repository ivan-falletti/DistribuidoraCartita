<?php
    include("conexion.php");

    session_start();
    
    // get the product id
    $productid = isset($_GET['id']) ? $_GET['id'] : "";
    $quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "";
    $quantity = intval($quantity);
    $user_id = 1;
    
    // update query
    $conexion->query("UPDATE cart_items SET quantity=$quantity WHERE product_id=$productid AND user_id=$user_id");
    
    header('Location: carrito.php?action=quantity_updated&id=' . $id);
?>