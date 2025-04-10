<div class="book-add-page">
    <div class="form-wrapper">
        <h1>Formulaire de modification du livre : </br> <?= $book['title'] ?></h1>
        <form action="" method="POST" class="form-Ajout">

            <div class="form-group">
                <label for="title">Title :</label>
                <input type="text" id="title" name="title" value="<?= $book['title'] ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="isbn">ISBN :</label>
                <input type="text" id="isbn" name="isbn" value="<?= $book['isbn'] ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="summary">Summary :</label>
                <textarea id="summary" name="summary" class="form-control" required><?= $book['summary'] ?></textarea>
            </div>

            <div class="form-group">
                <label for="publication_year">Publication year :</label>
                <input type="number" id="publication_year" name="publication_year" value="<?= $book['publication_year'] ?>" class="form-control" required>
            </div>

            <input type="submit" value="Confirm your changes to the book" class="btn">
        </form>

        <?php if (isset($feedback)) { ?>
            <span class="alert-alert <?= $feedback['type'] ?>"><?= $feedback['message'] ?></span>
        <?php } ?>
    </div>

    <div class="return-btn">
        <a href="index.php?page=book_list">Cancel</a>
    </div>
</div>
