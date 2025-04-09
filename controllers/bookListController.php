<?php

    require_once('./models/bookListManager.php');

    $allBooks = getAllBooks();

    $template = "./views/pages/book_list.php";

?>
