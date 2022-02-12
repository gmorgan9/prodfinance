<?php 
include('functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Info</title>
	<!-- <link rel="stylesheet" href="styles.css"> -->
	<style>
		* { 
	        margin: 0px; 
	        padding: 0px; 
        }
        body {
	        font-size: 120%;
	        background: #F8F8FF;
        }
		.header {
			background: #003366;
			width: 40%;
			margin: 50px auto 0px;
			color: white;
			text-align: center;
			border: 1px solid #B0C4DE;
			border-bottom: none;
			border-radius: 10px 10px 0px 0px;
			padding: 20px;
		}
		button[name=register_btn] {
			background: #003366;
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
	</style>
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
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<?php if(isAdmin())
						{
						?>
      						<a href="index.php?logout='1'"><button style="cursor:pointer;color: #ff3860;border: 1px solid #ff3860;padding:2px;border-radius: 5px;">Logout</button></a>
							<a href="index.php"><button style="cursor:pointer;margin-left:5px;color: #498afb;border: 1px solid #498afb;padding:2px;border-radius: 5px;">Home</button></a>
							<a href="create_user.php"><button style="cursor:pointer;margin-left:5px;color: #498afb;border: 1px solid #498afb;padding:2px;border-radius: 5px;">+ add user</button></a>
							<a href="resetpassword.php"><button style="cursor:pointer;margin-left:5px;color: #498afb;border: 1px solid #498afb;padding:2px;border-radius: 5px;">Reset Password</button></a>
						<?php }else{ ?>
							<a href="index.php?logout='1'"><button style="cursor:pointer;color: #ff3860;border: 1px solid #ff3860;padding:2px;border-radius: 5px;">Logout</button></a>
							<a href="index.php"><button style="cursor:pointer;margin-left:5px;color: #498afb;border: 1px solid #498afb;padding:2px;border-radius: 5px;">Home</button></a>
						<?php } ?>
					</small>
				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>