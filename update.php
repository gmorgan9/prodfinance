<?php 
	include('functions.php');
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	
    <nav class="nav-list">
        <li class="nav-list-item" style="list-style-type:none;display:inline;margin-right:8px;"><a style="color:black; text-decoration:none;" class="nav-list-link" href="update.php">Home</a></li>
        <li class="nav-list-item" style="list-style-type:none;display:inline;margin-right:8px;"><a style="color:black; text-decoration:none;" class="nav-list-link" href=""></a>COMPLETE</li>
        <li class="nav-list-item" style="list-style-type:none;display:inline;margin-right:8px;"><a style="color:black; text-decoration:none;" class="nav-list-link" href=""></a></li>
        <li class="nav-list-item" style="list-style-type:none;display:inline;"><a style="color:black; text-decoration:none;" class="nav-list-link" href="index.php">Profile Info</a></li>
</nav>

    <div class="main-content">
        <p>
            This is some random content!
        </p>
    </div>
</body>
</html>