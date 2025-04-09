<body id="book-body">
    <div class="book-section">
    <div class="book-first-zone">
        <div class="book-slogan">
            <h1>Books list</h1>
        </div>
        <div class="book-slogan-image">
            <img src="img/bookshelf.png" alt="Notre Équipe" style="width: 250px; height: 250px;">
        </div>
    </div>

    <div class="container-books">
        <table>
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Summary</th>
                <th>Publicated at</th>
                <th>Cover</th>
                <th>Borrowed at</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($allBooks as $book) { ?>
                <tr class="book-row">
                    <td><?= $book["id"] ?></td>
                    <td><?= $book["title"] ?></td>
                    <td class="summary"><?= $book["summary"] ?></td>
                    <td><?= $book["publication_year"] ?></td>
                    <td>NULL</td>
                    <td>Available</td>
                    <td class="book-actions">
                        <a href="#" class="btn-details"><ion-icon name="list-outline"></ion-icon></a>
                        <a href="#" class="btn-modify"><ion-icon name="create-outline"></ion-icon></a>
                        <a href="#" class="btn-delete"><ion-icon name="trash-outline"></ion-icon></a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

</div>
</body>
