<?php
session_start();
include './database/connectDB.php';

if (isset($_POST['register'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPwd = $_POST['confirmPwd'];
	if ($confirmPwd === $password) {
		$query = "INSERT INTO user (name, email, password) 
						VALUES('$name', '$email', '$password')";

		$conn->query($query);

		$_SESSION['registerSucc'] = "Successfully registered!!!";
		header('location: index.php');

	} else {
		$_SESSION['registerErr'] = "Please Enter Your Info correctly!!!";
		header('location: ./register_form.php');
	}
}
