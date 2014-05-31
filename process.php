<?php
session_start();
$email = $_POST['email'];
if(empty($email)) {
	$_SESSION['error']['email'] = "Email addres (" .$email. ") <br>cannot be blank!";
	header("Location: index.php");
} else {
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$_SESSION['error']['email'] = "The email address you entered (" .$email. ") <br>is NOT a valid email address!";
		header("Location: index.php");
	} else {
		$_SESSION['success_message']['email'] = "The email address you entered (".$email.") <br>is a VALID email address! Thank you!";
		header("Location: success.php");
	}
}
?>