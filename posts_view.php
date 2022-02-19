<?php include('functions.php'); ?>

<?php 
if (!isAdmin()) {
	header('location: /');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Posts - Documentation</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
  <link rel="icon" type="image/x-icon" href="fav.png">
  
</head>
<body>

  <div class="createpost-header">
        <h2>Manage Posts</h2>
        
    </div>
    <div class="manage-btn-group">
    
  </div>
  <br><br>


   <form class="createpostform" method="post" action="register.php">
   <a href="create_post.php" name="btn" class="manage-btn" >Create Post</a>
<?php echo display_error(); ?>
	<div class="input-group">
		<label>Topic</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Descriptions</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<button type="submit" class="log-btn" name="register_btn">Publish</button>
		<a href="javascript:history.back()" name="btn" class="log-btn">Back</a>
	</div>
</form>

<br><br>
   



    </div>




    <ul class="list-group">
      <?php
        
        $sql = "SELECT task.id, task.text, task.date, task.done FROM user JOIN task ON user.id = task.user_id WHERE user.id = ?";
        if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $_SESSION["id"]);
        $stmt->execute();
        $stmt->bind_result($task_id, $task_text, $task_date, $task_done);
        while ($stmt->fetch()) {
        
        
          if($task_done == 0){
            echo "<li class='list-group-item'>
            <div class='left-info'>
              <form action='./actions/update_action.php' method='POST'>
              <button type='submit' class='invisibleBTN'><img class='ckbx' src='checkbox.svg' /></button><input type='hidden' name='id' value=" . $task_id.">
              <input type='hidden' name='done' value=" . $task_done.">
            " . $task_text .
            "</form>
            </div>
            <div class='right-info'>
            <form action='./actions/delete_action.php' method='POST'>
              <span>". $task_date .
              "</span>
              <button type='submit' class='invisibleBTN'>
              <img class='rmcir' src='removecircle2.svg' />
              </button><input type='hidden' name='id' value=" . $task_id.">
              </form>
            </div>
            </li>";
          } 
          else {
            echo "<li class='list-group-item'>
            <div class='left-info'>
              <form action='./actions/update_action.php' method='POST'>
              <button type='submit'class='invisibleBTN'><img class='ckbx' src='checkmark.svg' /></button><input type='hidden' name='id' value=" . $task_id.">
              <input type='hidden' name='done' value=" . $task_done.">
            <span class='strike-text'>" . $task_text . "</span>
            
            </form>
            </div> 
            <div class='right-info'>
            <form action='./actions/delete_action.php' method='POST'>
              <span>" . $task_date . "<span>
              <button type='submit' name='id' value='id' class='invisibleBTN'>
              <img class='rmcir' src='removecircle2.svg' />
              </button><input type='hidden' name='id' value=" . $task_id.">
              </form>
            </div>
            </li>";
           
          }
        }
        $stmt->close();
        } else {
        echo "so bad, see following: ";
        echo $conn->error;
        }
     
    ?>
    </ul>

    <div class="p-3"></div>

    
</body>
</html>