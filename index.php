<?php 
	include('functions.php');
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<!-- <link rel="stylesheet" href="styles.css"> -->
    <!-- <link rel="icon" type="image/x-icon" href="logo.png"> -->
    <style>
        body {
	        font-size: 120%;
	        background: #F8F8FF;
        } 
        #main-content {
            margin-left: 35px;
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
    </style>
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>

        <?php if(isLoggedIn())
		{
		?>
      	    <nav class="nav-list" style="margin-top:10px;text-align:center;">
                <li class="nav-list-item" style="list-style-type:none;display:inline;margin-right:8px;text-align:center;"><a style="cursor:pointer;color:black; text-decoration:none;" class="nav-list-link" href="index.php">Home</a></li>
                | &nbsp;
                <li class="nav-list-item" style="list-style-type:none;display:inline;margin-right:8px;text-align:center;"><a style="cursor:pointer;color:black; text-decoration:none;" class="nav-list-link" href="#">Portfolio</a></li>
                | &nbsp;
                <li class="nav-list-item" style="list-style-type:none;display:inline;margin-right:8px;text-align:center;"><a style="cursor:pointer;color:black; text-decoration:none;" class="nav-list-link" href="#">About</a></li>
                | &nbsp;
                <li class="nav-list-item" style="list-style-type:none;display:inline;text-align:center;margin-right:8px;"><a style="cursor:pointer;color:black; text-decoration:none;" class="nav-list-link" href="standard.php">Profile</a></li>
                | &nbsp;
                <li class="nav-list-item" style="list-style-type:none;display:inline;text-align:center;"><a style="cursor:pointer;color:black; text-decoration:none;" class="nav-list-link" href="index.php?logout='1'">Logout</a></li>
            </nav
		<?php }else{ ?>
			<nav class="nav-list" style="margin-top:10px;text-align:center;">
                <li class="nav-list-item" style="list-style-type:none;display:inline;margin-right:8px;text-align:center;"><a style="cursor:pointer;color:black; text-decoration:none;" class="nav-list-link" href="index.php">Home</a></li>
                | &nbsp;
                <li class="nav-list-item" style="list-style-type:none;display:inline;margin-right:8px;text-align:center;"><a style="cursor:pointer;color:black; text-decoration:none;" class="nav-list-link" href="">Portfolio</a></li>
                | &nbsp;
                <li class="nav-list-item" style="list-style-type:none;display:inline;margin-right:8px;text-align:center;"><a style="cursor:pointer;color:black; text-decoration:none;" class="nav-list-link" href="">About</a></li>
                | &nbsp;
                <li class="nav-list-item" style="list-style-type:none;display:inline;text-align:center;margin-right:8px;"><a style="cursor:pointer;color:black; text-decoration:none;" class="nav-list-link" href="login.php">Login</a></li>
                | &nbsp;
                <li class="nav-list-item" style="list-style-type:none;display:inline;text-align:center;margin-right:8px;"><a style="cursor:pointer;color:black; text-decoration:none;" class="nav-list-link" href="register.php">Register</a></li>
            </nav>
		<?php } ?>

    <div id="main-content">
        <p>
            This is some random content!
        </p>
    </div>
</body>
</html>