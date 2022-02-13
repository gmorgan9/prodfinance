<?php include('functions.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>About</title>
    <!-- <link rel="icon" type="image/x-icon" href="logo.png"> -->
    <style>
        :root {
			--primary-color: #002E5D;
			--secondary-color: #002f5dc7;
		}
        * { 
	        margin: 0px; 
	        padding: 0px; 
            box-sizing: border-box;
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
	        background: var(--primary-color);
	        text-align: center;
	        border: 1px solid var(--primary-color);
	        border-bottom: none;
	        border-radius: 10px 10px 10px 10px;
	        padding: 20px;
        }
        /* Navigation */
        .nav-header{
          width: 60%;
	        margin: 10px auto 0px;
          color: white;
	        background: var(--secondary-color);
	        border: 1px solid var(--secondary-color);
	        border-bottom: none;
	        border-radius: 10px 10px 10px 10px;
	        padding: 15px 5px 20px 5px;
        }
        .nav-list {
            margin-top:10px;
            margin-left: 35px;
        }
        .nav-list-item {
            list-style-type:none;
            display:inline;
            margin-right:8px;
        }
        .nav-list-link {
            cursor:pointer;
            color:white;
            text-decoration:none;
        }
    </style>
</head>
<body>
	<div class="header">
		<h2>About Page</h2>
	</div>

    <div class="nav-header">
    <?php if(isLoggedIn())
		{
		?>
        <nav class="nav-list">
            <li class="nav-list-item"><a class="nav-list-link" href="index.php">Home</a></li>
            | &nbsp;
            <li class="nav-list-item"><a class="nav-list-link" href="documentation.php">Documentation</a></li>
            | &nbsp;
            <li class="nav-list-item"><a class="nav-list-link" href="about.php">About</a></li>
          <div class="log-step" style="float:right;margin-right:35px;">
            <li class="nav-list-item"><a class="nav-list-link" href="profileinfo.php">Profile</a></li>
            | &nbsp;
            <li class="nav-list-item"><a class="nav-list-link" href="javascript:history.back()?logout='1'">Logout</a></li>
          </div>
        </nav>
		<?php }else{ ?>
			<nav class="nav-list">
          <li class="nav-list-item"><a class="nav-list-link" href="index.php">Home</a></li>
          | &nbsp;
          <li class="nav-list-item"><a class="nav-list-link" href="documentation.php">Documentation</a></li>
          | &nbsp;
          <li class="nav-list-item"><a class="nav-list-link" href="about.php">About</a></li>
        <div class="log-step" style="float:right;margin-right:35px;">
          <li class="nav-list-item"><a class="nav-list-link" href="login.php">Login</a></li>
          | &nbsp;
          <li class="nav-list-item"><a class="nav-list-link" href="register.php">Register</a></li>
        </div>
      </nav>
		<?php } ?>
  </div>
        

    <div class="main-content">
        <p>
            About page
        </p>
    </div>
</body>
</html>