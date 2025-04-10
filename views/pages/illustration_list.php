<body id="book-body">
    <div class="book-section">
        <div class="book-first-zone">
            <div class="book-slogan">
                <h1>Illustrations list</h1>
            </div>
            <div class="book-slogan-image">
                <img src="img/bookshelf.png" alt="Notre Équipe" style="width: 250px; height: 250px;">
            </div>
        </div>

        <div class="add-book-btn">
            <a href="#">Add an illustration</a>
        </div>

        <div class="container-books">

            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Description</th>
                    <th>File</th>
                    <th>Visual</th>
                    <th>Cover</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allIllustration as $illustration) { ?>
                    <tr class="book-row">
                        <td><?= $illustration["id"] ?></td>
                        <td><?= $illustration["description"] ?></td>
                        <td class="illustration-filename"><?= $illustration["filename"] ?></td>
                        <td><img src="<?= $illustration["filename"] ?>" alt="Illustration Visual" class="illustration-visual"></td>
                        <td><?= $illustration["is_cover"] ? "Yes" : "No" ?></td>
                        <td class="book-actions">
                            <a href="#" class="btn-details"><ion-icon name="list-outline"></ion-icon></a>
                            <a href="#" class="btn-modify"><ion-icon name="create-outline"></ion-icon></a>
                            <a href="#" onclick="return confirm('Are you shure to delete this illustration ?');" class="btn-delete"><ion-icon name="trash-outline"></ion-icon></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
