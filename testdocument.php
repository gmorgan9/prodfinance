<?php 
	include('functions.php');
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Test - Documentation</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <!-- <link rel="icon" type="image/x-icon" href="logo.png"> -->
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


   <div class="container">
  <div class="row">
    <div class="col-md-12">
      <form method="post" role="form">
        <div class="form-group">
          <input type="text" class="form-control" name="title" placeholder="Title"/>
        </div>
        <div class="form-group">
          <label> Image </label>
          <div class="input-group">
            
            <span class="input-group-btn">
              <span class="btn btn-primary btn-file">
                Browse <input type="file" name="bimgs" multiple>
              </span>
             </span>
            <input type="text" class="form-control" readonly>
           </div>
        </div>
        <div class="form-group">
          <textarea class="form-control bcontent" name="content"></textarea>
        </div>
        <div class="form-group">
           <input type="submit" name="Submit" value="Publish" class="btn btn-primary form-control" />
        </div>
      </form>
    </div>
  </div>
</div>
   



    </div>

    <script>
      $(function() {
  $(".bcontent").wysihtml5({
    toolbar: {
      "image": false
    }
  });
  
  $(document).on('change', '.btn-file :file', function() {
    var input = $(this);
    var numFiles = input.get(0).files ? input.get(0).files.length : 1;
    console.log(input.get(0).files);
    var label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });
  
  $('.btn-file :file').on('fileselect', function(event, numFiles, label){
    var input = $(this).parents('.input-group').find(':text');
    var log = numFiles > 1 ? numFiles + ' files selected' : label;
    
    if( input.length ) {
      input.val(log);
    } else {
      if( log ){ alert(log); }
    }
    
  });
});
    </script>
</body>
</html>