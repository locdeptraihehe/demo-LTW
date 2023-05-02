<?php
    require_once __DIR__. '/autoload/autoload.php';
    $category = $db->fetchAll("category");
    ?>
<?php require_once __DIR__. '/layouts/header.php'; ?>
<div id="layoutSidenav_content">
<main>
<div class="container-fluid">
<h1 class="mt-4">Chào mừng đến với trang quản trị</h1>


<?php require_once __DIR__. '/layouts/footer.php'; ?>