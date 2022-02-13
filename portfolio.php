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


        /* HEADER-TOP
        .headercontent-top {
          position: sticky;
          color: white;
          background: var(--primary-color);
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
        }      */


        tabs {
  position: relative;   
  min-height: 200px; /* This part sucks */
  clear: both;
  margin: 25px 0;
}
.tab {
  float: left;
}
.tab label {
  background: #eee; 
  padding: 10px; 
  border: 1px solid #ccc; 
  margin-left: -1px; 
  position: relative;
  left: 1px; 
}
.tab [type=radio] {
  display: none;   
}
.tab-content {
  position: absolute;
  top: 28px;
  left: 0;
  background: white;
  right: 0;
  bottom: 0;
  padding: 20px;
  border: 1px solid #ccc; 
}
[type=radio]:checked ~ label {
  background: white;
  border-bottom: 1px solid white;
  z-index: 2;
}
[type=radio]:checked ~ label ~ .content {
  z-index: 1;
}


    </style>
</head>
<body>

<!-- <div class="headercontent-top">
  <div class="header-logo">
LOGO
  </div>
  <div class="header-titles">
    <div class="subheader">
      <h4>
        Welcome
      </h4>
    </div>
    <div class="mainheader">
      <h2>
        Documentation
      </h2>
    </div>
  </div>

</div> -->

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
        <br><br>

    <div class="main-content">
      <div class="content-header">
        <h2 style="text-align:center;">Documentation</h2>
        <h4 style="text-align:center;">Portfolio here</h4>
      </div>



      <!-- <div class="tabs">
        <div class="tabmodule" data-tab-id="test">
          <div class="tablabel">test</div>
        </div>
        <div class="tabcontent" data-tab-content>
        <div class="column">
        <div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>My Work[Box 1]</h3>
              <p>Lorem ipsum..</p>
            </div>
        </div>
      </div>
        </div>
      </div> -->


      <div class="tabs">
    
    <div class="tab">
        <input type="radio" id="tab-1" name="tab-group-1">
        <label for="tab-1">Tab One</label>
        
        <div class="tab-content">
            stuff
        </div> 
    </div>
     
    <div class="tab">
        <input type="radio" id="tab-2" name="tab-group-1">
        <label for="tab-2">Tab Two</label>
        
        <div class="tab-content">
            stuff
        </div> 
    </div>
     
     <div class="tab">
        <input type="radio" id="tab-3" name="tab-group-1">
        <label for="tab-3">Tab Three</label>
      
        <div class="tab-content">
            stuff
        </div> 
    </div>
     
 </div>

 <br><br><br>









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