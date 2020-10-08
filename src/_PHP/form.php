<?php
    $model  = $_POST['model'];
    $name   = $_POST['name'];
    $onBox  = $_POST['onBox'];
    $weight = $_POST['weight'];
    $m3     = $_POST['m3'];
    $series = $_POST['series'];

    include "../_includesPHP/connect.php";

    // add element to table
    $sql = "INSERT $table (model, name, onBox, weight, m3, series)
            VALUES ('$model', '$name', '$onBox', '$weight', '$m3', '$series')";
    if ($connect->query($sql) != TRUE)
    {
        echo "<br />" . "Element aren't add to table" . "<br />";
    }

    // = = = = = - - - - - = = = = = close connect
    $connect->close();

    header('location: \ ');
?>
