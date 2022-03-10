<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/expenses.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora"
            rel="stylesheet">
        
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="/assets/images/fav.png">

        <!-- Custom Styling -->
        <link rel="stylesheet" href="../../assets/css/style.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../../assets/css/admin.css">

        <title>Admin Section - Add Expense</title>
    </head>

    <body>
        
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Expense</a>
                    <a href="index.php" class="btn btn-big">Manage Expenses</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Add Expense</h2>
                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                    <form action="create.php" method="post">
                        <div>
                            <label>Name</label>
                            <input type="text" name="name" value="<?php echo $name ?>" class="text-input">
                        </div>
                        <div>
                            <label>Amount</label>
                            <input type="number" step=".01" name="amount" value="<?php echo $amount ?>" class="text-input">
                        </div>
                        <div>
                            <label>Category</label>
                         <?php
                            // start of dbcon
                            $servername = "localhost";
                            $username = "gmorg";
                            $password = "gmorgpass";
                            $dbname = "finance";
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            //end of dbcon
                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            } 
                            $sql = "SELECT * FROM categories";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                echo "<select name='name' class='text-input'>";
                                // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                            }
                                echo "</select>";
                            } 
                            $conn->close(); ?>
                        </div>
                        <div>
                            <label>Category</label>
                         <?php
                            // start of dbcon
                            $servername = "localhost";
                            $username = "gmorg";
                            $password = "gmorgpass";
                            $dbname = "finance";
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            //end of dbcon
                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            } 
                            $sql = "SELECT * FROM accounts";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                echo "<select name='name' class='text-input'>";
                                // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                            }
                                echo "</select>";
                            } 
                            $conn->close(); ?>
                        </div>
                        <div>
                            <label>Date</label>
                            <input type="date" name="date" value="<?php echo $date ?>" class="text-input">
                        </div>
                        <div>
                            <label>Description</label>
                            <textarea name="description" id="body"><?php echo $description ?></textarea>
                        </div>

                        <div>
                            <button type="submit" name="add-expense" class="btn btn-big">Add Expense</button>
                        </div>
                    </form>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="../../assets/js/scripts.js"></script>

    </body>

</html>