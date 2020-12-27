<?php
    $sql = "DROP TABLE `$table`;"; //SQL запрос
            
    if ($connect->query($sql) === TRUE)
    {
        echo '<p class="text-success">Таблица ' . $table . ' успешно удалена';
    }
    else
    {
        echo '<p class="text-danger">Ошибка удаления таблицы ' . $table;
        echo '<p>' . $connect->error;
    }
