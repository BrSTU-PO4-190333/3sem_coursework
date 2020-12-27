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
        action="/_includesPHP/addElement.php"
        method="post"
    >
        <div class="form-group">
            <label>Model</label>
            <input
                class="form-control"
                type="text"
                name="model"
                value="<?= $model ?>"
            />
            <small class="form-text text-muted">For example: 920100</small>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input
                class="form-control"
                type="text"
                name="name"
                value="<?= $name ?>"
            />
            <small class="form-text text-muted">For example: 2 Gand Earthed Socket</small>
        </div>
        <div class="form-group">
            <label>On box</label>
            <input
                class="form-control"
                type="text"
                name="onBox"
                value="<?= $onBox ?>"
            />
            <small class="form-text text-muted">For example: 24</small>
        </div>
        <div class="form-group">
            <label>Weight (kg)</label>
            <input
                class="form-control"
                type="text"
                name="weight"
                value="<?= $weight ?>"
            />
            <small class="form-text text-muted">For example: 2.09</small>
        </div>
        <div class="form-group">
            <label>M<sup>3</sup></label>
            <input
                class="form-control"
                type="text"
                name="m3"
                value="<?= $m3 ?>"
            />
            <small class="form-text text-muted">For example: 0.0087</small>
        </div>
        <div class="form-group">
            <label>Series</label>
            <input
                class="form-control"
                type="text"
                name="series"
                value="<?= $series ?>"
            />
            <small class="form-text text-muted">For example: star series</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>