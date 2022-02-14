<?php 
	include('functions.php');
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Test - Documentation</title>
  <meta name="viewport" content="width=device-width">
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
            margin-left: 8%;
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
          transition: transform .3s ease;
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
        .content p {
          margin-left: 10px;
          margin-right: 10px;
        }
        hr {
          display: none;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 900px) {
          .header {
            width: 350px;
          }
          .nav-header {
            width: 350px;
            height: 100px;
          }
          #nav-list {
            margin-top: 10px;
            margin-bottom: 5px;
            text-align: center;
          }
          #login, #register {
            text-decoration: none;
            color: white;
          }
          #loginreg {
            margin-top: 5px;
            text-align: center;
          }
          .column {
            width: 50%;
          }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .header {
            width: 350px;
          }
          .nav-header {
            width: 350px;
            height: 100px;
          }
          #nav-list {
            margin-top: 10px;
            margin-bottom: 5px;
            text-align: center;
          }
          #login, #register {
            text-decoration: none;
            color: white;
          }
          #loginreg {
            margin-top: 5px;
            text-align: center;
          }
          hr {
            display: block;
            margin-left: 75px;
          }
          .column {
            width: 100%;
            margin-left: -15px;
          }
        }


    </style>
</head>
<body>

	<div class="header">
		<h2><span style="color:gray;">Test -</span> Documentation</h2>
	</div>

  <div class="nav-header">
    <div id="nav-list">
      <li class="nav-list-item"><a class="nav-list-link" href="index.php">Home</a></li>
      <li class="nav-list-item"><a class="nav-list-link" href="documentation.php">Documentation</a></li>
      <li class="nav-list-item"><a class="nav-list-link" href="about.php">About</a></li>
    </div>
    <hr style="width:50%">
    <div class="nav-list-log">
      <?php if(isLoggedIn()){?>
        <div id="profilelogout">
          <li class="nav-list-item"><a id="profile" href="profileinfo.php">Profile</a></li>
          <li class="nav-list-item"><a id="logout" href="index.php?logout='1'">Logout</a></li>
        </div>
		  <?php }else{ ?>
        <div id="loginreg">
          <li class="nav-list-item"><a id="login" href="login.php">Login</a></li>
          <li class="nav-list-item"><a id="register" href="register.php">Register</a></li>
        </div>
		  <?php } ?>
    </div>
  </div>
        <br><br><br>

   here is the test document

    </div>
</body>
</html>