<?php include("path.php"); ?>
<?php include('functions.php'); 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/x-icon" href="fav.png">

    <!-- Custome Styles -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">

    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
</head>
<body>

<?php include(ROOT_PATH . "/app/includes/header.php") ?>
        

    <div class="main-content">
        <div class="main-heading">
            <h1>Knowledge Base</h1>
            <h5>One place. Lots of Knowledge.</h5>
            <div class="main-heading-btn">
                <button><a href="documentation.php">View KB</a></button>
            </div>
        </div>

    
        <p>
            This is some random content!
        </p>
    </div>
</body>
</html>