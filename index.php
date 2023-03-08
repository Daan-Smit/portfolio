<?php 
    require dirname(__FILE__) . '/main/head.php'; 
    require dirname(__FILE__) . '/main/header.php';
?>
    <h1>Dit is h1</h1>
    <?= $_SESSION['path'] ?>
    <img src="<?= $_SESSION['path'] . '/images/logos/color-no-bg.png' ?>" alt="">
<?php
    require dirname(__FILE__) . '/main/footer.php';
?>