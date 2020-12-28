<?php
    $title = "Add element page";
    include '../_includesHTML/header.php';
    include '../_includesHTML/menu.php';

    $id  = isset($_GET['id'])        ? $_GET['id']       : "-1";
    $model  = isset($_GET['model'])     ? $_GET['model']    : "920100";
    $name   = isset($_GET['name'])      ? $_GET['name']     : "2 Gand Earthed Socket";
    $onBox  = isset($_GET['onBox'])     ? $_GET['onBox']    : "24";
    $weight = isset($_GET['weight'])    ? $_GET['weight']   : "2.09";
    $m3     = isset($_GET['m3'])        ? $_GET['m3']       : "0.0087";
    $series = isset($_GET['series'])    ? $_GET['series']   : "star series";

?>

<div class="container">
    <form
        action="../_includesPHP/editElement/editElement.php"
        method="post"
    >
        <input
            type="hidden"
            name="id"
            value="<?= $id ?>"
        />
        <?php
            include '../_includesHTML/formInner.php';
        ?>
    </form>
</div>
