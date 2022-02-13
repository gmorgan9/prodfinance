<?php 
	include('functions.php');
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Documentation</title>
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
        /* Column KB Cards */
        .row {
            margin-left: 12%;
        }
        /* Add padding BETWEEN each column (if you want) */
        .row,
        .row > .column {
          padding: 8px;
        }

        /* Create four equal columns that floats next to each other */
        .column {
            float: left;
            width: 30%;
        }

        /* Clear floats after rows */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }

        /* Content */
        .box {
          background-color: #fff;
          text-align: center;
          height: 200px;
          box-shadow: 4px 2px 2px rgba(170, 170, 170, 0.45);
        }
        .box:hover {
          transition: transform .3s;
          transform: scale(1.025);
        }
        .top-bar {
            height: 20px;
            background-size: cover;
            background-position: 50%;
            background-color: #002e5d;
            /* border-radius: 10px 10px 0px 0px; */
        }
        .content {
            padding: 10px;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 900px) {
          .column {
            width: 70%;
          }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .column {
            width: 100%;
          }
        }


    </style>
</head>
<body>

	<div class="header">
		<h2>Documentation</h2>
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
            <li class="nav-list-item"><a class="nav-list-link" href="index.php?logout='1'">Logout</a></li>
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
        <br><br><br>

    <div class="main-content">
      <div class="content-header">
        <h2 style="text-align:center;">Documentation</h2>
        <h4 style="text-align:center;">Portfolio here</h4>
      </div>

<div class="row">
      <div class="column">
        <div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>My Work[Box 1]</h3>
              <p>Lorem ipsum..</p>
            </div>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>My Work[Box 2]</h3>
              <p>Lorem ipsum..</p>
            </div>
        </div>
      </div>
      <div class="column">
        <div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>My Work[Box 3]</h3>
              <p>Lorem ipsum..</p>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>My Work[Box 4]</h3>
              <p>Lorem ipsum..</p>
            </div>
        </div>
      </div>
    </div>

    </div>
</body>
</html>