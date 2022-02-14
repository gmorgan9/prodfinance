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
        .btn {
		    	padding: 10px;
		    	font-size: 15px;
		    	color: white;
		    	background-color: var(--secondary-color);
		    	border: none;
		    	border-radius: 5px;
		    	cursor: pointer;
		    	text-decoration: none;
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
          .steps {
            clear: all;
            margin-left: 5px !important;
            margin-right: 5px !important;
            width: 95% !important;
            text-align: center !important;
          }
          .content-header {
            margin-left: 2.5%;
            margin-right: 2.5%;
          }
          .btn {
            margin-left: 42.5%;
            margin-top: -50px;
            position: absolute;
          }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .column {
            width: 100%;
            margin-left: -15px;
          }
        }


        .steps {
            margin-left: 250px;
            margin-right: 250px;
        }
        code{
            color: red;
        }
        pre {
  overflow-x: auto;
  white-space: pre-wrap;
  white-space: -moz-pre-wrap;
  white-space: -pre-wrap;
  white-space: -o-pre-wrap;
  word-wrap: break-word;
}

    </style>
</head>
<body>

	<div class="header">
		<h2>Documentation</h2>
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
        <a href="javascript:history.back()" name="btn" class="btn" >Back</a>
        <div class="main-content">
      <div class="content-header">
        <h2 style="text-align:center;">Creating Domain/Subdomains on Cloudflare</h2>
        <h4 style="text-align:center; color:gray;">Check it out</h4>
      </div>
<br>
<div class="steps">
<h3>
    Introdcution
</h3>
<p>
    This documentation will go over how to create a domain/subdomain on cloudflare. It will also go through how to edit and update all the necessary files needed. These steps are going to show you what to do after you have your cloudflare account set up and you have purchased a domain from cloudflare or your desired domain registrar.
</p>
<br>
<h3>
    Step 1:
</h3>
<p>
    You are going to need to create a directory in you /var/www directory connected with apache2. Do this by using this command, where you will change the domain.com with your desired domain/subdomain name:
</p>
<pre><code>
sudo mkdir -p /var/www/domain.com/public_html
</code></pre>
<br>
<h3>
    Step 2:
</h3>
<p>
You are going to need to change the permission of the folder. Do this by running the following command:
</p>
<pre><code>
sudo chmod -R 755 /var/www
</code></pre>
<br>
<h3>
    Step 3:
</h3>
<p>
It's time to create the Index Page for your website. You are going to need to create an index.html file for each domain.  This step is going to show you how to create one index.html for one domain, but you will do the same thing for each domain if you have multiple. 
<br><br>
Create index.html within your directory you created in step 1(you can use whatever text editor you want, I use nano).
</p>
<pre><code>
sudo nano /var/www/domain.com/public_html/index.html
</code></pre>
<br>
<p>
You can add any text that you want within the document but for a test document while we make sure that we can get the website up and running, you can put just a test line of text like this.
</p>
<pre><code>
testing for domain.com
</code></pre>
<br>
<p>
You will need to create an index.html file for each of the sites you are creating.
</p>
<br>
<h3>
    Step 4:
</h3>
<p>
Now its time to copy the config files for each site. You will do this by running the following command:
</p>
<pre><code>
cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/domain.com.conf
</code></pre>
<br>
<p>
You will need to do this for each of the sites that you are creating, just make sure you change the "domain.com" to your domain/subdomain name.
</p>
<br>





</div>



    </div>
</body>
</html>