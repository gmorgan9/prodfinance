<?php include('functions.php'); ?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="log-header">
        <h2>Reset Password</h2>
        
    </div>
    
        <form method="post" action="resetpassword.php">
        <!-- <p>Please fill out this form to reset your password.</p> -->
<?php echo display_error(); ?>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="log-btn" name="reset_btn">Reset Password</button>
        <a href="javascript:history.back()" name="btn" class="log-btn">Back</a>
	</div>
</form>   
</body>
</html>