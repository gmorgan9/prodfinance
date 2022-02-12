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
        * { 
	        margin: 0px; 
	        padding: 0px; 
        }
        body {
	        font-size: 120%;
	        background: #F8F8FF;
        } 
        .main-content p {
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
        /* Navigation */
        .nav-header{
            width: 40%;
	        margin: 10px auto 0px;
            color: white;
	        background: #8fbcbc;
	        text-align: center;
	        border: 1px solid #B0C4DE;
	        border-bottom: none;
	        border-radius: 10px 10px 10px 10px;
	        padding: 15px 5px 20px 5px;
        }
        .nav-list {
            margin-top:10px;
            text-align:center;
        }
        .nav-list-item {
            list-style-type:none;
            display:inline;
            margin-right:8px;
            text-align:center;
        }
        .nav-list-link {
            cursor:pointer;
            color:white;
            text-decoration:none;
        }
        .log-set {
            float: right;
        }
    </style>
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	
        
        </div>

        <div class="nav-header">
        <?php if(isLoggedIn())
		{
		?>
      	    <nav class="nav-list">
                <li class="nav-list-item"><a class="nav-list-link" href="index.php">Home</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="portfolio.php">Portfolio</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="about.php">About</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="profileinfo.php">Profile</a></li>
                <div class="log-set">
                <li class="nav-list-item"><a class="nav-list-link" href="index.php?logout='1'">Logout</a></li>
                </div>
            </nav>
		<?php }else{ ?>
			<nav class="nav-list">
                <li class="nav-list-item"><a class="nav-list-link" href="index.php">Home</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="portfolio.php">Portfolio</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="about.php">About</a></li>
                <div class="log-set">
                <li class="nav-list-item"><a class="nav-list-link" href="login.php">Login</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="register.php">Register</a></li>
                </div>
            </nav>
		<?php } ?>
        </div>
    <div class="main-content">
        <p>
            This is some random content!
        </p>
    </div>
</body>
</html>