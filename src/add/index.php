<?php
    $title = "Add element page";
    include '../_includesHTML/header.php';
    include '../_includesHTML/menu.php';

    $model  = "920100";
    $name   = "2 Gand Earthed Socket";
    $onBox  = "24";
    $weight = "2.09";
    $m3     = "0.0087";
    $series = "star series";
?>

<div class="container">
    <form
        action="/_includesPHP/addElement/addElement.php"
        method="post"
    >
        <?php
            include '../_includesHTML/formInner.php';
        ?>
    </form>
</div>