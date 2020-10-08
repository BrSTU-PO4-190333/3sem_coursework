<?php
    $title = "Add element page";
    include '../_includesPHP/header.php';
    include '../_includesPHP/menu.php';
?>

<div class="container">
    <form action="/php/form.php" method="post">
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
            <label>Model</label>
            <input
                class="form-control"
                type="text"
                name="model"
            />
            <small class="form-text text-muted">For example: 920100</small>
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
            <label>Cost</label>
            <input
                class="form-control"
                type="text"
                name="cost"
            />
            <small class="form-text text-muted">For example: 00.00</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
        // = = = = = - - - - - = = = = = global vars
        $model = "222";

        include "../_includesPHP/connect.php";

        // add element to table
        $sql = "INSERT $table (model)
                VALUES ('$model')";
        if ($connect->query($sql) == TRUE)
        {
            echo "<br />" . "Element are add to table" . "<br />";
        }
        else
        {
            echo "<br />" . "Element aren't add to table" . "<br />";
        }

        // = = = = = - - - - - = = = = = close connect
        $connect->close();
    ?>
</div>

