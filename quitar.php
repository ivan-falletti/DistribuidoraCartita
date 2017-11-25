<?php
    include("conexion.php");

    session_start();

    if (!isset($_SESSION["useremail"])){
        header('Location: login.php');
        return;
    }

    // product details
    $productid = isset($_GET['id']) ?  $_GET['id'] : die;
    $user_id = $_SESSION["userid"];

    // update query
    $conexion->query("DELETE FROM cart_items WHERE product_id=$productid AND user_id=$user_id");
    
    header('Location: carrito.php?action=removed&id=' . $productid);
?>