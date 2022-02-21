<?php include('functions.php'); ?>

<?php
if (isLoggedIN()) {
	header('location: /');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
	<link rel="icon" type="image/x-icon" href="fav.png">
</head>
<body>
	<div class="log-header">
		<h2>Login</h2>
	</div>
	


<!-- test account -->
<script src="assets/js/tabs.js"></script>
<div class="all_tabs">
<!-- Tab links -->
<div class="tab">
  <button class="tablinks" onclick="accountTabs(event, 'Login')">Login</button>
  <button class="tablinks" onclick="accountTabs(event, 'Register')">Register</button>
</div>

<!-- Tab content -->
<div id="Login" class="tabcontent">
<form method="post" action="login.php">

<?php echo display_error(); ?>

<div class="input-group">
	<label>Username</label>
	<input type="text" name="username" >
</div>
<div class="input-group">
	<label>Password</label>
	<input type="password" name="password">
</div>
<div class="input-group">
	<button type="submit" class="log-btn" name="login_btn">Login</button>
	<a href="javascript:history.back()" name="btn" class="log-btn" >Back</a>
</div>
<p>
	Not yet a member? <a href="register.php">Sign up</a>
</p>
</form>
</div>

<div id="Register" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p>
</div>

</div>

</body>
</html>