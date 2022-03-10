<?php

include(ROOT_PATH . "/app/database/functions.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$table = 'categories';

$errors = array();
$id = '';
$name = '';
$description = '';

$categories = selectAll($table);


if (isset($_POST['add-category'])) {
    adminOnly();
    $errors;

    if (count($errors) === 0) {
        unset($_POST['add-category']);
        $category_id = create($table, $_POST);
        $_SESSION['message'] = 'Category created successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/category/index.php');
        exit(); 
    } else {
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}


// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     $topic = selectOne($table, ['id' => $id]);
//     $id = $topic['id'];
//     $name = $topic['name'];
//     $description = $topic['description'];
// }

// if (isset($_GET['del_id'])) {
//     adminOnly();
//     $id = $_GET['del_id'];
//     $count = delete($table, $id);
//     $_SESSION['message'] = 'Topic deleted successfully';
//     $_SESSION['type'] = 'success';
//     header('location: ' . BASE_URL . '/admin/topics/index.php');
//     exit();
// }


// if (isset($_POST['update-topic'])) {
//     adminOnly();
//     $errors = validateTopic($_POST);

//     if (count($errors) === 0) { 
//         $id = $_POST['id'];
//         unset($_POST['update-topic'], $_POST['id']);
//         $topic_id = update($table, $id, $_POST);
//         $_SESSION['message'] = 'Topic updated successfully';
//         $_SESSION['type'] = 'success';
//         header('location: ' . BASE_URL . '/admin/topics/index.php');
//         exit();
//     } else {
//         $id = $_POST['id'];
//         $name = $_POST['name'];
//         $description = $_POST['description'];
//     }

// }
