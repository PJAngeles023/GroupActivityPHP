<?php

session_start();
require 'dbconnect.php';


  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $sql = "INSERT INTO contacts (name, email, phone) VALUES ('$name', '$email', '$phone')";

  if ($conn->query($sql)) {
    $_SESSION['success'] = "Contact successfully added!";
    header('location: ../contacts.php');
  } else {
    $_SESSION['error'] = "Oops! Something went wrong :(";
    header('location: ../contacts.php');
  }

?>