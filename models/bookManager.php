<?php

require_once('./models/connection.php');

// CREATE
function saveBook(string $isbn, string $title, string $summary, int $publication_year): bool {
    $sql = "INSERT INTO book (isbn, title, summary, publication_year, created_at) VALUES (:isbn, :title, :summary, :publication_year, :created_at)";
    $now = (new DateTime())->format('Y-m-d H:i:s');
    $query = dbConnect()->prepare($sql);
    $query->bindValue(':isbn', $isbn, PDO::PARAM_STR);
    $query->bindValue(':title', $title, PDO::PARAM_STR);
    $query->bindValue(':summary', $summary, PDO::PARAM_STR);
    $query->bindValue(':publication_year', $publication_year, PDO::PARAM_INT);
    $query->bindValue(':created_at', $now, PDO::PARAM_STR);
    return $query->execute();
}

// READ
// All
function getAllBooks(): array {
    $sql = "SELECT id, isbn, title, summary, publication_year, created_at, updated_at FROM book ORDER BY created_at DESC";
    $query = dbConnect() -> prepare($sql);
    $query -> execute();
    return $query -> fetchAll();
}
// One
function getBook(int $id): mixed {
    $sql = "SELECT id, isbn, title, summary, publication_year, created_at, updated_at FROM book WHERE id = :id";
    $query = dbConnect() -> prepare($sql);
    $query -> bindParam(':id', $id, PDO::PARAM_INT);
    $query -> execute();
    return $query -> fetch();
}

// UPDATE
function updateBook(int $id, string $isbn, string $title, string $summary, int $publication_year): bool {
    $sql = "UPDATE book SET isbn = :isbn, title = :title, summary = :summary, publication_year = :publication_year, updated_at = :updated_at WHERE id = :id";
    $now = (new DateTime()) -> format('Y-m-d H:i:s');
    $query = dbConnect() -> prepare($sql);
    $query -> bindValue(':id', $id, PDO::PARAM_INT);
    $query -> bindValue(':isbn', $isbn, PDO::PARAM_STR);
    $query -> bindValue(':title', $title, PDO::PARAM_STR);
    $query -> bindValue(':summary', $summary, PDO::PARAM_STR);
    $query -> bindValue(':publication_year', $publication_year, PDO::PARAM_INT);
    $query -> bindValue(':updated_at', $now, PDO::PARAM_STR);
    return $query -> execute();
}

// DELETE
function deleteBook(int $id): bool {
    $sql = "DELETE FROM book WHERE id = :id";
    $query = dbConnect() -> prepare($sql);
    $query -> bindParam(":id", $id, PDO::PARAM_INT);
    return $query -> execute();
}

?>

