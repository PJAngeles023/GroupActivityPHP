<?php

session_start();
require 'dbconnect.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE contacts SET name = '$name', email = '$email', phone = '$phone' WHERE id ='$id'";
    if($conn->query($sql)){
        $_SESSION['success'] = "Contact successfully edited!";
        header('location: ../contacts.php');
    }else{
        $_SESSION['error'] = "Oops! Something went wrong :(";
        header('location: ../contacts.php');
  }
    $sql = "SELECT * FROM contacts WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>