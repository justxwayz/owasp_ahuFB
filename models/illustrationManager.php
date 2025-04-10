<?php

require_once('./models/connection.php');

// READ
// All
function getAllIllustration(): array {
    $sql = "SELECT * FROM illustration ORDER BY id DESC";
    $query = dbConnect() -> prepare($sql);
    $query -> execute();
    return $query -> fetchAll();
}
