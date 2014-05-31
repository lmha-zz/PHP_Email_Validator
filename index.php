<?php
session_start();

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Email Validator</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<?php
	if(isset($_SESSION['error']))
	{
		foreach($_SESSION['error'] as $name => $message)
		{
			?>
			<div class="error"><?= $message?></div>
			<?php
		}
	}
	?>
	<form action="process.php" method="post">
		<label>Please enter your email address:</label>
		<input type="text" name="email" placeholder="Enter your Email">
		<input class="button" type="submit" value="Submit">
	</form>
</body>
</html>

<?php
$_SESSION = array();

?>