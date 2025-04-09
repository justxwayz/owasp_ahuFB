<?php

    require_once('./models/connection.php');

// All
    function getAllBooks(): array {
        $sql = "SELECT * FROM book";
        $query = dbConnect() -> prepare($sql);
        $query -> execute();
        return $query -> fetchAll();
    }

?>

