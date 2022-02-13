<?php 
	include('functions.php');
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Portfolio</title>
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
	        border-radius: 10px 10px 0px 0px;
	        padding: 20px;
        }
        /* Navigation */
        .nav-header{
            width: 40%;
	        margin: 10px auto 0px;
            color: white;
	        background: var(--secondary-color);
	        text-align: center;
	        border: 1px solid var(--secondary-color);
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
          /* border: 1px solid #002e5d; */
          background-color: #fff;
          text-align: center;
          height: 200px;
          /* border-radius: 10px 10px 10px 10px; */
        }
        .top-bar {
            height: 30px;
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


        /* HEADER-TOP */
        .headercontent-top {
          background: var(--headerBgColor);
          padding: 0;
          display: grid;
          grid-gap: 0;
          grid-template-columns: 72px auto;
        }
        .header-logo {
          display: -ms-flexbox;
          display: flex;
          -ms-flex-align: center;
          align-items: center;
          -ms-flex-pack: center;
          justify-content: center;
          min-height: 56px;
        }
        .header-titles {
          position: relative;
          padding: 9px 36px 9px 13px;
        }     
    </style>
</head>
<body>

<div class="headercontent-top">
  <div class="header-logo">
LOGO
  </div>
  <div class="header-titles">
DOCUMENTIATION
  </div>

</div>

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
      <h1 style="text-align:center;">
        Documentation
      </h1>
        <p style="text-align:center;">
            Portfolio here
        </p>

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