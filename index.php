<?php include("path.php"); ?>
<?php include('functions.php'); 
session_start();
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
        

    <div class="main">
        <div class="main-heading">
            <h1>Knowledge Base</h1>
            <h5>One place. Lots of Knowledge.</h5>
            <div class="search-bar">
                <input type="text" class="search-bar-text" value="Search the Knowledge Base ...">
                <button><i class="fa fa-search"></i></button>
            </div>
        </div>

        <div class="main-content">
            <p>
                This is some random content!
            </p>
        </div>
    </div>
</body>
</html>