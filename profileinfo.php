<?php 
	include('functions.php');
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile Info</title>
	<link rel="stylesheet" href="styles.css">
	<!-- <style>
		* { 
	        margin: 0px; 
	        padding: 0px; 
        }
        body {
	        font-size: 120%;
	        background: #F8F8FF;
        }
		.header {
			width: 40%;
			margin: 50px auto 0px;
			color: white;
			background: #5F9EA0;
			text-align: center;
			border: 1px solid #B0C4DE;
			border-bottom: none;
			border-radius: 10px 10px 0px 0px;
			padding: 20px;
		}
		form, .content {
			width: 40%;
			margin: 0px auto;
			padding: 20px;
			border: 1px solid #B0C4DE;
			background: white;
			border-radius: 0px 0px 10px 10px;
		}
		.input-group {
			margin: 10px 0px 10px 0px;
		}
		.input-group label {
			display: block;
			text-align: left;
			margin: 3px;
		}
		.input-group input {
			height: 30px;
			width: 93%;
			padding: 5px 10px;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid gray;
		}
		#user_type {
			height: 40px;
			width: 98%;
			padding: 5px 10px;
			background: white;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid gray;
		}
		.error {
			width: 92%; 
			margin: 0px auto; 
			padding: 10px; 
			border: 1px solid #a94442; 
			color: #a94442; 
			background: #f2dede; 
			border-radius: 5px; 
			text-align: left;
		}
		.success {
			color: #3c763d; 
			background: #dff0d8; 
			border: 1px solid #3c763d;
			margin-bottom: 20px;
		}
		.profile_info img {
			display: inline-block; 
			width: 50px; 
			height: 50px; 
			margin: 5px;
			/* float: left; */
		}
		.profile_info div {
			display: inline-block; 
			margin: 5px;
		}
		.profile_info:after {
			content: "";
			display: block;
			clear: both;
		}
	</style> -->
</head>
<body>
	<div class="header">
		<h2>Profile Information</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
		<?php if(isAdmin())
		{
		?>
			<img src="admin.png">
		<?php }else{ ?>
			<img src="profile.png">
		<?php } ?>
			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  class="profile-user">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<?php if(isAdmin())
						{
						?>
      						<a href="index.php?logout='1'"><button class="logout-btn">Logout</button></a>
							<a href="index.php"><button class="main-btn">Home</button></a>
							<a href="create_user.php"><button class="main-btn">Add User</button></a>
							<a href="resetpassword.php"><button class="main-btn">Reset Password</button></a>
						<?php }else{ ?>
							<a href="index.php?logout='1'"><button class="logout-btn">Logout</button></a>
							<a href="index.php"><button class="main-btn">Home</button></a>
							<a href="resetpassword.php"><button class="main-btn">Reset Password</button></a>
						<?php } ?>
					</small>
				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>