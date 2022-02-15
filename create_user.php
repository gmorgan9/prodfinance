<?php include('functions.php'); ?>

<?php 
if (!isAdmin()) {
	header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin - Create user</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
</head>
<body>
	<div class="log-header">
		<h2>Admin - create user</h2>
	</div>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="log-btn" name="btn">Create user</button>
			<a href="javascript:history.back()" name="btn" class="log-btn">Back</a>
		</div>
	</form>
</body>
</html>