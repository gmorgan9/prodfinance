<?php 
	include('functions.php');
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Test - Documentation</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
  <link rel="icon" type="image/x-icon" href="fav.png">

  
</head>
<body>

<script src="http://tinymce.cachefly.net/4.0/tinymce.min.js"></script>

	<div class="header">
		<h2><span style="color:gray;">Test -</span> Documentation</h2>
	</div>

  <div class="nav-header">
    <div id="nav-list">
      <li class="nav-list-item"><a class="nav-list-link" href="/">Home</a></li>
      <li class="nav-list-item"><a class="nav-list-link" href="documentation.php">Documentation</a></li>
      <li class="nav-list-item"><a class="nav-list-link" href="about.php">About</a></li>
    </div>
    <hr style="width:50%">
    <div class="nav-list-log">
      <?php if(isLoggedIn()){?>
        <div id="profilelogout">
          <li class="nav-list-item"><a id="profile" href="profileinfo.php">Profile</a></li>
          <li class="nav-list-item"><a id="logout" href="/?logout='1'">Logout</a></li>
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


   <form method="post" action="register.php">
<?php echo display_error(); ?>
	<div class="input-group">
		<label>KB Title</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>KB Content</label>
		<input type="text" name="kb_post">
    <textarea name="content" id="" cols="30" rows="10"></textarea>
	</div>
	<div class="input-group">
		<button type="submit" class="log-btn" name="register_btn">Publish</button>
		<a href="javascript:history.back()" name="btn" class="log-btn">Back</a>
	</div>
</form>
   



    </div>


    <script type="application/x-javascript">

tinymce.init({selector:'#TypeHere'});

</script>

    
</body>
</html>