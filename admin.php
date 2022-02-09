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
	<link rel="stylesheet" href="styles.css">
	<style>
	button[name=register_btn] {
		background: #003366;
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
        <img src="admin.png">

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>


						<?php if(isAdmin() )
							{
							?>
      							<a href="index.php?logout='1'"><button style="cursor:pointer;color: #ff3860;border: 1px solid #ff3860;padding:2px;border-radius: 5px;">Logout</button></a>
						<a href="index.php"><button style="cursor:pointer;margin-left:5px;color: #498afb;border: 1px solid #498afb;padding:2px;border-radius: 5px;">Home</button></a>
						<a href="create_user.php"><button style="cursor:pointer;margin-left:5px;color: #498afb;border: 1px solid #498afb;padding:2px;border-radius: 5px;">+ add user</button></a>
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