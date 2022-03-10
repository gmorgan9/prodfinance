<?php include("../path.php"); ?>
<?php 
include(ROOT_PATH . "/app/controllers/posts.php"); 
session_start();
adminOnly();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Section - Dashboard</title>
    <meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="fav.png">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../assets/css/style.css?v=<?php echo time(); ?>">  

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../assets/css/admin.css?v=<?php echo time(); ?>">

    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
</head>
<body>

<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

<!-- Admin Page Wrapper -->
<div class="admin-wrapper">

<?php include(ROOT_PATH . "/app/includes/adminSidebar.php") ?>
        
<!-- Admin Content -->
<div class="admin-content">

<div class="content">

    <h2 class="page-title">Dashboard</h2>

    <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

</div>

</div>
<!-- // Admin Content -->


<div class="row">
  <div class="column">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h3>11+</h3>
      <p>Partners</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-check"></i></p>
      <h3>55+</h3>
      <p>Projects</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-smile-o"></i></p>
      <h3>100+</h3>
      <p>Happy Clients</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-coffee"></i></p>
      <h3>100+</h3>
      <p>Meetings</p>
    </div>
  </div>
</div>

<style>
  .column {
  float: left;
  width: 25%;
  padding: 0 5px;
}

.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #444;
  color: white;
}

.fa {font-size:50px;}
</style>





</div>
<!-- // Page Wrapper -->

<!-- Custom Script -->
<script src="../assets/js/scripts.js"></script>

</body>
</html>