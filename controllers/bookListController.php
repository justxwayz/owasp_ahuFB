<?php

    require_once('./models/bookManager.php');

    $allBooks = getAllBooks();

    $template = "./views/pages/book_list.php";

?>
