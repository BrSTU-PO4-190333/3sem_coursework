<?php
    $title = "Add element page";
    include '../_includesPHP/header.php';
    include '../_includesPHP/menu.php';
?>

<div class="container">
    <form action="/_PHP/form.php" method="post">
        <div class="form-group">
            <label>Model</label>
            <input
                class="form-control"
                type="text"
                name="model"
            />
            <small class="form-text text-muted">For example: 920100</small>
        </div>
        <div class="form-group">
            <label>Name</label>
            <input
                class="form-control"
                type="text"
                name="name"
            />
            <small class="form-text text-muted">For example: 2 Gand Earthed Socket</small>
        </div>
        <div class="form-group">
            <label>On box</label>
            <input
                class="form-control"
                type="text"
                name="onBox"
            />
            <small class="form-text text-muted">For example: 24</small>
        </div>
        <div class="form-group">
            <label>Weight (kg)</label>
            <input
                class="form-control"
                type="text"
                name="weight"
            />
            <small class="form-text text-muted">For example: 2.09</small>
        </div>
        <div class="form-group">
            <label>M<sup>3</sup></label>
            <input
                class="form-control"
                type="text"
                name="m3"
            />
            <small class="form-text text-muted">For example: 0.0087</small>
        </div>
        <div class="form-group">
            <label>Series</label>
            <input
                class="form-control"
                type="text"
                name="series"
            />
            <small class="form-text text-muted">For example: star series</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

