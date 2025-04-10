<body class="book-add-page">
    <div class="form-wrapper">
        <h1>Add your book</h1>

        <form action="" method="POST" class="form-Ajout">

            <div class="form-group">
                <label for="title">Title :</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="isbn">ISBN :</label>
                <input type="text" id="isbn" name="isbn" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="summary">Summary :</label>
                <textarea id="summary" name="summary" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="publication_year">Publication year :</label>
                <input type="number" id="publication_year" name="publication_year" class="form-control" required>
            </div>

            <input type="submit" value="Add your book" class="btn">
        </form>

        <div class="return-btn">
            <a href="index.php?page=book_list"><ion-icon name="return-down-back-outline"></ion-icon></a>
        </div>

        <?php if (isset($feedback)) { ?>
            <span class="alert-alert <?= $feedback['type'] ?>"><?= $feedback['message'] ?></span>
        <?php } ?>
    </div>
</body>