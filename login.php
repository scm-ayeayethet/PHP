<?php
session_start();
include './database/connectDB.php';


if (isset($_POST['login'])) {

  if (empty($_POST["email"])) {
    $_SESSION['emailErr'] = "Email is required";
  } else {
    $email = $_POST["email"];
    // check that the e-mail address is well-formed  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['emailErr'] = "Invalid email format";
    }
  }

  if (empty($_POST["password"])) {
    $_SESSION['passwordErr'] = "password is required";
  }

  $query = "SELECT * FROM user WHERE email='$_POST[email]' AND password='$_POST[password]'";
  $result = $conn->query($query);
  $rowCount = mysqli_num_rows($result);
  if ($rowCount > 0 ) {
    $_SESSION['loggedin'] = true;
    header('location: ./home.php');
  } else {
    $_SESSION['loginErr'] = "Login Failed";
    header('location: ./index.php');
  }
}

?>
