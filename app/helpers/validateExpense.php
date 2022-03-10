<?php

function validateExpense($expenses)
{
    $errors = array();

    if (empty($expenses['name'])) {
        array_push($errors, 'Name is required');
    }

    $existingExpenses = selectOne('expenses', ['name' => $post['name']]);
    if ($existingExpenses) {
        if (isset($post['update-expense']) && $existingExpenses['id'] != $post['id']) {
            array_push($errors, 'Name already exists');
        }

        if (isset($post['add-expense'])) {
            array_push($errors, 'Name already exists');
        }
    }

    return $errors;
}
