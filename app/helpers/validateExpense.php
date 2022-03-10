<?php

function validateExpense($expense)
{
    $errors = array();

    if (empty($expense['name'])) {
        array_push($errors, 'Name is required');
    }

    $existingExpense = selectOne('expense', ['name' => $post['name']]);
    if ($existingExpense) {
        if (isset($post['update-expense']) && $existingExpense['id'] != $post['id']) {
            array_push($errors, 'Name already exists');
        }

        // if (isset($post['add-topic'])) {
        //     array_push($errors, 'Name already exists');
        // }
    }

    return $errors;
}
