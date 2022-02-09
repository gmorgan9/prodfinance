<?php 
	include('functions.php');
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="logo.png">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	
    <!-- <nav class="nav-list" style="margin-top:10px;text-align:center;">
        <li class="nav-list-item" style="list-style-type:none;display:inline;margin-right:8px;text-align:center;"><a style="color:black; text-decoration:none;" class="nav-list-link" href="update.php">Home</a></li>
        <li class="nav-list-item" style="list-style-type:none;display:inline;margin-right:8px;text-align:center;"><a style="color:black; text-decoration:none;" class="nav-list-link" href=""></a>COMPLETE</li>
        <li class="nav-list-item" style="list-style-type:none;display:inline;margin-right:8px;text-align:center;"><a style="color:black; text-decoration:none;" class="nav-list-link" href=""></a></li>


        <li class="nav-list-item" style="list-style-type:none;display:inline;text-align:center;"><a style="color:black; text-decoration:none;" class="nav-list-link" href="index.php">Profile Info</a></li>

        <li class="nav-list-item" style="list-style-type:none;display:inline;text-align:center;"><a style="color:black; text-decoration:none;" class="nav-list-link" href="login.php">login</a></li> -->

        <?php if(isLoggedIn() )
							{
							?>
      							<nav class="nav-list" style="margin-top:10px;text-align:center;">
        <li class="nav-list-item" style="list-style-type:none;display:inline;margin-right:8px;text-align:center;"><a style="color:black; text-decoration:none;" class="nav-list-link" href="index.php">Home</a></li>
        <li class="nav-list-item" style="list-style-type:none;display:inline;margin-right:8px;text-align:center;"><a style="color:black; text-decoration:none;" class="nav-list-link" href=""></a>COMPLETE</li>
        <li class="nav-list-item" style="list-style-type:none;display:inline;margin-right:8px;text-align:center;"><a style="color:black; text-decoration:none;" class="nav-list-link" href=""></a></li>
        <li class="nav-list-item" style="list-style-type:none;display:inline;text-align:center;"><a style="color:black; text-decoration:none;" class="nav-list-link" href="standard.php">Profile Info</a></li>
							<?php }else{ ?>
								<nav class="nav-list" style="margin-top:10px;text-align:center;">
        <li class="nav-list-item" style="list-style-type:none;display:inline;margin-right:8px;text-align:center;"><a style="color:black; text-decoration:none;" class="nav-list-link" href="index.php">Home</a></li>
        <li class="nav-list-item" style="list-style-type:none;display:inline;margin-right:8px;text-align:center;"><a style="color:black; text-decoration:none;" class="nav-list-link" href=""></a>COMPLETE</li>
        <li class="nav-list-item" style="list-style-type:none;display:inline;margin-right:8px;text-align:center;"><a style="color:black; text-decoration:none;" class="nav-list-link" href=""></a></li>
        <li class="nav-list-item" style="list-style-type:none;display:inline;text-align:center;"><a style="color:black; text-decoration:none;" class="nav-list-link" href="login.php">Login</a></li>
        <li class="nav-list-item" style="list-style-type:none;display:inline;text-align:center;"><a style="color:black; text-decoration:none;" class="nav-list-link" href="register.php">Register</a></li>
							<?php } ?>


</nav>

    <div class="main-content">
        <p>
            This is some random content!
        </p>
    </div>
</body>
</html>