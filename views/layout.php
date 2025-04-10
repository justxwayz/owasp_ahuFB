<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $SEO['title'] ?> - Mediatek</title>
    <meta name="description" content="<?=  $SEO['description']?>">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <script src="./public/JS/script_burger.js" defer></script>
    <link rel="stylesheet" href="./public/css/app.css">
    <link rel="stylesheet" href="./public/css/home.css">
    <link rel="stylesheet" href="./public/css/book_list.css">
    <link rel="stylesheet" href="./public/css/book_add.css">
    <link rel="stylesheet" href="./public/css/legal_mentions.css">
</head>

<body>
<?php require('./views/partials/_header.html') ?>
<main>
    <?php require($template); ?>
</main>
<?php require('./views/partials/_footer.html') ?>
</body>

</html>