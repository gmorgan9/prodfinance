<?php

include(ROOT_PATH . "/app/database/functions.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateExpense.php");

$table = "expenses";

$errors = array();
$id = "";
$name = "";
$amount = "";
$category = "";
$account = "";
$date = "";
$description = "";

$expenses = selectAll($table);


$servername = "localhost";
$username = "gmorg";
$password = "gmorgpass";
$dbname = "finance";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO expenses (name, amount, category, account, date, description)
VALUES ($name, $amount, $category, $account, $date, $description)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();









if (isset($_POST['add-expense'])) {
    adminOnly();
    $errors = validateExpense($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-expense']);
        $expense_id = create($table, $_POST);
        $_SESSION['message'] = "Expense created successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/expenses/index.php");
        exit(); 
    } else {
        $name = $_POST['name'];
        $amount = $_POST['amount'];
        $category = $_POST['category'];
        $account = $_POST['account'];
        $date = $_POST['date'];
        $description = $_POST['description'];
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

if (isset($_GET['del_id'])) {
    adminOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Topic deleted successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit();
}


if (isset($_POST['update-topic'])) {
    adminOnly();
    $errors = validateTopic($_POST);

    if (count($errors) === 0) { 
        $id = $_POST['id'];
        unset($_POST['update-topic'], $_POST['id']);
        $topic_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Topic updated successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/topics/index.php');
        exit();
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }

}
