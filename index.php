<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <meta name="viewport" content="width=device-width">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/images/fav.png">

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
<?php include(ROOT_PATH . "/app/includes/main-heading.php") ?>

        <div class="main-content">
            <p>
                This is some random content!
            </p>
        </div>
    </div>
</body>
</html>