<?php
    $title = "Create table";
    include '../_includesHTML/header.php';
    include '../_includesHTML/menu.php';
?>

<div class="container">

    <?php
        include '../_includesPHP/connect/connect.php';
        include '../_includesPHP/deleteTable/deleteTable.php';
        $connect->close(); // разорвали соединение
    ?>

</div>