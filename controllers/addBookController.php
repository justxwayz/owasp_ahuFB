<?php

require_once('./models/bookManager.php');

if (
    !empty($_POST['isbn']) &&
    !empty($_POST['title']) &&
    !empty($_POST['summary']) &&
    !empty($_POST['publication_year'])
) {
    $result = saveBook($_POST['isbn'], $_POST['title'], $_POST['summary'], $_POST['publication_year']);
    if ($result) {
        $feedback = [
            'type' => 'success',
            'message' => "Book has been added successfully!",
        ];
    } else {
        $feedback = [
            'type' => 'error',
            'message' => "An error occured while adding the book!.",
        ];
    }
}

$template = "./views/pages/book_add.php";
