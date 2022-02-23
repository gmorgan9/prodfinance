<?php include("path.php"); ?>
<?php include('app/database/functions.php'); ?>
<?php
if (isLoggedIN()) {
	header('location: /');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
    <meta name="viewport" content="width=device-width">
    
	<!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/images/fav.png">

    <!-- Custome Styles -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">

    <!-- Font Awesome -->
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
</head>
<body>

<?php include("app/includes/header.php") ?>
        
<div class="auth-content">
<form method="post" action="register.php">
<h2 class="form-title">Register</h2>
<?php echo display_error(); ?>

	<div>
		<label>Username</label>
		<input class="text-input" type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div>
		<label>Email</label>
		<input class="text-input" type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div>
		<label>Password</label>
		<input class="text-input" type="password" name="password_1">
	</div>
	<div>
		<label>Confirm password</label>
		<input class="text-input" type="password" name="password_2">
	</div>
	<div>
		<button type="submit" class="log-btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</div>
</body>
</html>