<?php

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

		header('location: index.php?msg');

	} else {
		header('location: ./register_form.php?message');
	}
}
