<?php 
	include('functions.php');
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Portfolio</title>
	<!-- <link rel="stylesheet" href="styles.css"> -->
    <!-- <link rel="icon" type="image/x-icon" href="logo.png"> -->
    <style>
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
        /* Column KB Cards */
        .grid_1 { width:60px; }
        .grid_2 { width:140px; }
        .grid_3 { width:220px; }
        .grid_4 { width:300px; }
        .grid_5 { width:380px; }
        .grid_6 { width:460px; }
        .grid_7 { width:540px; }
        .grid_8 { width:620px; }
        .grid_9 { width:700px; }
        .grid_10 { width:780px; }
        .grid_11 { width:860px; }
        .grid_12 { width:940px; }

        .column {
          float: left;
          margin: 0 10px;
          overflow: hidden;
          display: inline;
        }
        .row {
          width: 960px;
          margin: 0 auto;
          overflow: hidden;
        }
    </style>
</head>
<body>
	<div class="header">
		<h2>Portfolio Page</h2>
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
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="index.php?logout='1'">Logout</a></li>
        </nav>
		<?php }else{ ?>
			<nav class="nav-list">
                <li class="nav-list-item"><a class="nav-list-link" href="index.php">Home</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="portfolio.php">Portfolio</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="about.php">About</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="login.php">Login</a></li>
                | &nbsp;
                <li class="nav-list-item"><a class="nav-list-link" href="register.php">Register</a></li>
                </nav>
		<?php } ?>
        </div>
        

    <div class="main-content">
        <p>
            Portfolio here
        </p>

        <div class="row">
            <div class="column grid_4"> .4. </div>
            <div class="column grid_4"> .4. </div>
            <div class="column grid_4"> .4. </div>
        </div>

        <div class="row">
            <div class="column grid_8"> .8. </div>
            <div class="column grid_4"> .4. </div>
        </div>
                
        <div class="row">
            <div class="column grid_2"> .2. </div>
            <div class="column grid_4"> .4. </div>
            <div class="column grid_3"> .3. </div>
            <div class="column grid_3"> .3. </div>
        </div>


    </div>
</body>
</html>