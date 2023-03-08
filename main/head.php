<!DOCTYPE html>
<html lang="en">
<head>

    <?php
        session_start();
        $pathInPieces = explode('/', $_SERVER['DOCUMENT_ROOT']);
        $_SESSION['path'] = $pathInPieces[0];
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/portfolio/images/logos/color-no-bg.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/portfolio/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/portfolio/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/portfolio/images/favicons/site.webmanifest">

    <title>WebDaan</title>

    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- CSS Files -->
    <link rel="stylesheet" href="/public_html/css/style.css">
</head>
<body>