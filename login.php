<?php
session_start();
include './database/connectDB.php';


if (isset($_POST['login'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
  $result = $conn->query($query);

  if ($result->num_rows) {

    $_SESSION['loggedin'] = true;
    header('location: ./home.php');

  } else {
    $_SESSION['loginErr'] = "Login Failed";
    header('location: ./index.php');
  }
}

?>