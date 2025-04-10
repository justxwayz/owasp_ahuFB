<?php
require_once("./models/bookManager.php");
require_once("./services/response.php");

$template = './views/pages/edit.php';

if(!isset($_GET['id']) || intval($_GET['id']) === 0){
    redirect('book_list');
}

$book = getBook($_GET['id']);

if(!$book){
    redirect('book_list');
}

if (
    !empty($_POST['isbn']) &&
    !empty($_POST['title']) &&
    !empty($_POST['summary']) &&
    !empty($_POST['publication_year'])
) {
    $result = updateBook($_GET['id'], $_POST['isbn'], $_POST['title'], $_POST['summary'], $_POST['publication_year']);
    if ($result) {
        redirect('book_list');
        $feedback = [
            'type' => 'success',
            'message' => "Book has been updated successfully !",
        ];
    } else {
        $feedback = [
            'type' => 'error',
            'message' => "Oups there was an error updating your book ...",
        ];
    }
}

$template = "./views/pages/book_edit.php";