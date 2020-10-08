<?php
    $title = "Add element page";
    include '../_includesPHP/header.php';
    include '../_includesPHP/menu.php';

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

<form action="/php/form.php" method="post" class="form">
    <input
        type="text"
        placeholder="Наименование"
        name="name"
    />
    <input
        type="text"
        placeholder="Модель"
        name="model"
    />
    <input
        type="text"
        placeholder="Количество в коробке"
        name="onBox"
    />
    <input
        type="text"
        placeholder="Цена без НДС"
        name="cost"
    />
    <button type="submit" name>Отправить</button>
</form>