<?php 
	include('functions.php');
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Documentation</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
  <link rel="icon" type="image/x-icon" href="fav.png">

      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
</head>
<body>

<?php include(ROOT_PATH . "/app/includes/header.php") ?>


    <div class="main-content">
      <div class="content-header">
        <h2 style="text-align:center;">Knowledge Based Documentation</h2>
        <h4 style="text-align:center;color:gray;">Check out these documents</h4>
      </div>

<div class="row">
      <div class="column">
      <a href="document-1.php" style="text-decoration:none;color:black;"><div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>Creating Domain/Subdomains on Cloudflare</h3>
              <p>Lorem ipsum..</p>
            </div>
        </div>
    </a>
      </div>
      <div class="column">
        <a href="testdocument.php" style="text-decoration:none;color:black;"><div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>Test Document</h3>
              <p>Here are the first few words of the document and hope that it fits and wraps the text..</p>
            </div>
        </div>
        </a>
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
    </div>
    <div class="row">
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