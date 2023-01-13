<?php
session_start();
include './database/connectDB.php';


if (isset($_POST['login'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {

    $_SESSION['loggedin'] = true;
    header('location: ./home.php');
    
  } else {
    header('location: ./index.php?message');
  }
}

?>
