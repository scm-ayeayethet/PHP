<?php
session_start();
include './database/connectDB.php';

if (isset($_POST['register'])) {

	if (empty($_POST["name"])) {
		$_SESSION['nameErr'] = "Name is required";		
	}

	if (empty($_POST["email"])) {
		$_SESSION['emailRegErr'] = "Email is required";
	} else {
		$email = $_POST["email"];
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$_SESSION['emailRegErr'] = "Invalid email format";
		}
	}

	if (empty($_POST["password"])) {
		$_SESSION['pwdErr'] = "password is required";
	} else {
		$password = $_POST["password"];
		if (strlen($password) < 6) {
			$_SESSION['pwdErr'] = "Password must be greater than 6 numbers.";
		}
	}

	if (empty($_POST["confirmPwd"])) {
		$_SESSION['confirmPwdErr'] = "confirmPwd is required";
	} else {
		if ($_POST["confirmPwd"] !== $_POST['password']) {
			$_SESSION['confirmPwdErr'] = "password and confirm password must be match!!";
		}
	}

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPwd = $_POST["confirmPwd"];

	if (!empty($name) && !empty($email) && !empty($password) && !empty($name) && $confirmPwd === $password) {

		$query = "INSERT INTO user (name, email, password) 
						VALUES('$name', '$email', '$password')";
		$conn->query($query);

		$_SESSION['registerSucc'] = "Successfully registered!!!";
		header('location: index.php');
	} else {
		$_SESSION['registerErr'] = "Please Enter Your Information Correctly!!!";
		header('location: ./register_form.php');
	}
}
