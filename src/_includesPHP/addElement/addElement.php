<?php
    $model  = $_POST['model'];
    $name   = $_POST['name'];
    $onBox  = $_POST['onBox'];
    $weight = $_POST['weight'];
    $m3     = $_POST['m3'];
    $series = $_POST['series'];

    if (!is_numeric($onBox))
    {
        echo "<p>Тип \$onBox неверный (нужно целое число)</p>";
        echo "<p>".is_numeric($onBox)."</p>";
        exit;
    }
        
    if (!is_numeric($weight))
    {
        echo "<p>Тип \$weight неверный (нужно число с плавающей точкой)</p>";
        exit;
    }
        
    if (!is_numeric($m3))
    {
        echo "<p>Тип \$m3 неверный (нужно число с плавающей точкой)</p>";
        exit;
    }

    include "../../_includesPHP/connect.php";

    // add element to table
    $sql = "INSERT $table (`model`, `name`, `onBox`, `weight`, `m3`, `series`)
            VALUES ('$model', '$name', '$onBox', '$weight', '$m3', '$series')";
    if ($connect->query($sql) != TRUE)
    {
        echo "<br />" . "Element aren't add to table" . "<br />";
    }

    // = = = = = - - - - - = = = = = close connect
    $connect->close();

    header('location: \show');
?>
