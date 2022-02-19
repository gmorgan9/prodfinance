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
	<title>Documenation Dashboard</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
	<link rel="icon" type="image/x-icon" href="fav.png">
</head>
<body>
	<div class="log-header">
		<h2>Documentation Dashboard</h2>
	</div>
	<div class="message-content">
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

                        <?php if(isAdmin()) { ?>
                        <div class="manage-btn-group">
                          <a href="create_post.php" name="btn" class="manage-btn" >Create Post</a>
                          <a href="posts_view.php" name="btn" class="manage-btn" >Manage Posts</a>
                          <a href="create_topic.php" name="btn" class="manage-btn" >Create Topic</a>
                          <a href="topics_view.php" name="btn" class="manage-btn" >Manage Topics</a>
                        </div>
                        <br><br>
                        <?php }else{ ?>
                        <?php } ?>




						<?php if(isAdmin())
						{
						?>
      						<a href="/?logout='1'"><button class="log-btn">Logout</button></a>
							<a href="javascript:history.back()"><button class="log-btn">Back</button></a>
							<a href="create_user.php"><button class="log-btn">Add User</button></a>
							<a href="resetpassword.php"><button class="log-btn">Reset Password</button></a>
						<?php }else{ ?>
							<a href="/?logout='1'"><button class="log-btn">Logout</button></a>
							<a href="javascript:history.back()"><button class="log-btn">Back</button></a>
							<a href="resetpassword.php"><button class="log-btn">Reset Password</button></a>
						<?php } ?>
					</small>
				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>