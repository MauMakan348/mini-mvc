<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= $title ?? 'Mini MVC' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Poppins:wght@400&display=swap" rel="stylesheet">
</head>
<body>

    <?php require BASE_PATH . '/app/Views/partials/navbar.php'; ?>

    <div>
        <?= $content ?>
    </div>

    <?php require BASE_PATH . '/app/Views/partials/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>