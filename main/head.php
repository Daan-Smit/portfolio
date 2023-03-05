<!DOCTYPE html>
<html lang="en">
<head>

    <?php
        session_start();
        $_SESSION['path'] = $_SERVER['DOCUMENT_ROOT'];
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $_SESSION['path'] ?>/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $_SESSION['path'] ?>/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $_SESSION['path'] ?>/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?= $_SESSION['path'] ?>/images/favicons/site.webmanifest">

    <title>WebDaan</title>

    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= $_SESSION['path'] . '/css/style.css' ?>">
</head>
<body>