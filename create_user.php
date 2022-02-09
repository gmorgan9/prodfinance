<?php include('functions.php') 
?>

<?php 
if (!isAdmin()) {
	header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin - Create user</title>
	<link rel="stylesheet" href="styles.css">
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
		.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background-color: #5F9EA0;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	text-decoration: none;
}
	</style>
</head>
<body>
	<div class="header">
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
			<button type="submit" class="btn" name="register_btn"> + Create user</button>
			<a href="admin.php" class="btn">Back</a>
		</div>
	</form>
</body>
</html>