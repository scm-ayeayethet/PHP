<?php
session_start();
include './database/connectDB.php';

$emailError = "";
$email = $password = "";


if (isset($_POST['login'])) {

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check that the e-mail address is well-formed  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["password"])) {
    $pwdErr = "Password is required";
  } else {
    $password = $_POST["password"];
    // check that the e-mail address is well-formed  
    if (strlen($password) <= '8') {
      $pwdErr = "Password must be 8 or more than.";
    }
  }

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
