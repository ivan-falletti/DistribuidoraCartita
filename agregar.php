<?php
    include("conexion.php");

    session_start();

    if (!isset($_SESSION["useremail"])){
        header('Location: login.php');
        return;
    }

    // product details
    $productid = isset($_GET['id']) ?  $_GET['id'] : die;
    $quantity = isset($_GET['quantity']) ?  $_GET['quantity'] : die;
    $user_id = $_SESSION["userid"];
    $created = date('Y-m-d H:i:s');

    $sqldos = "SELECT product_id, quantity FROM cart_items WHERE user_id='$user_id' AND product_id='$productid'";
    $recdos = mysqli_query($conexion,$sqldos);
    $existingProduct = mysqli_fetch_array($recdos);

    if(isset($productid, $existingProduct['product_id'])) {
        //if product already is on cart then update quantity
        $quantity = $quantity + $existingProduct['quantity'];
        header('Location: actualizar.php?id=' . $productid . '&quantity=' . $quantity);
    }
    else{
        // insert query
        $conexion->query("INSERT INTO cart_items (product_id, quantity, user_id, created) VALUES ('$productid','$quantity', '$user_id','$created')");
        header('Location: carrito.php?action=added&id=' . $productid);
    }
?>