<?php
    $id     = $_POST['id'];  
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

    include "../_includesPHP/connect.php";

    $sql = "UPDATE $table SET "
        ."model = '$model',"
        ."name = '$name',"
        ."onBox = $onBox,"
        ."weight = $weight,"
        ."m3 = $m3,"
        ."series = '$series' WHERE id = $id";

    if ($connect->query($sql) != TRUE)
        echo "<br />" . "SQL script aren't makes" . "<br />";

    $connect->close(); // закрываем соединение

    //echo $sql;
    header('location: \show');
?>
