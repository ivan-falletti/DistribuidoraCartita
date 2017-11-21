<?php
    include("conexion.php");

    session_start();

    // product details
    $id = isset($_GET['id']) ?  $_GET['id'] : die;
    $name = isset($_GET['name']) ?  $_GET['name'] : die;
    $quantity  = isset($_GET['quantity']) ?  $_GET['quantity'] : die;
    $user_id=1;
    $created=date('Y-m-d H:i:s');

    // insert query
    $query = "INSERT INTO cart_items SET product_id=?, quantity=?, user_id=?, created=?";

    // prepare query
    $stmt = $con->prepare($query);

    // bind values
    $stmt->bindParam(1, $id);
    $stmt->bindParam(2, $quantity);
    $stmt->bindParam(3, $user_id);
    $stmt->bindParam(4, $created);
    
    if($stmt->execute()) {
        // if database insert succeeded
        header('Location: productos.php?action=added&id=' . $id . '&name=' . $name);
    }
    else {
        // if database insert failed
        header('Location: productos.php?action=failed&id=' . $id . '&name=' . $name);
    }
?>