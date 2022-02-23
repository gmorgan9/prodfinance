<?php include("path.php"); ?>
<?php include('app/database/db.php'); ?>

<?php
// if (isLoggedIN()) {
// 	header('location: /');
// }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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

<?php include(ROOT_PATH . "/app/includes/header.php") ?>
        
<div class="auth-content">
<form method="post" action="login.php">
<h2 class="form-title">Login</h2>
<?php echo display_error(); ?>

<div>
	<label>Username</label>
	<input class="text-input" type="text" name="username" >
</div>
<div>
	<label>Password</label>
	<input class="text-input" type="password" name="password">
</div>
<div>
	<button type="submit" class="log-btn" name="login_btn">Login</button>
</div>
<p>
	Not yet a member? <a href="register.php">Sign up</a>
</p>
</form>
</div>

</body>
</html>