<?php

require_once("./models/bookManager.php");
require_once("./services/response.php");

if(!isset($_GET['id']) || intval($_GET['id']) === 0){
    redirect('book_list');
}

deleteBook($_GET['id']);

redirect('book_list');

$template = './views/pages/book_delete.php';
