<?php
    $sql = "CREATE TABLE `$table` (
        `id` int NOT NULL,
        `model` varchar(30) NOT NULL,
        `name` varchar(200) NOT NULL,
        `onBox` int NOT NULL,
        `weight` float NOT NULL,
        `m3` float NOT NULL,
        `series` varchar(200) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;"; //SQL запрос

    $text = "Скрипт, который создает таблицу `$table`";

    if ($connect->query($sql) === TRUE)
    {
        echo '<p class="text-success">' . $text . ', выполнен успешно!';
    }
    else
    {
        echo '<p class="text-danger">' . $text . ', не выполнен успешно:';
        echo '<p>' . $connect->error;
    }

    $sql = "ALTER TABLE `$table`
    ADD UNIQUE KEY `id` (`id`);"; //SQL запрос

    $text = "Скрипт, который делает поле id уникальным";

    if ($connect->query($sql) === TRUE)
    {
        echo '<p class="text-success">' . $text . ', выполнен успешно!';
    }
    else
    {
        echo '<p class="text-danger">' . $text . ', не выполнен успешно:';
        echo '<p>' . $connect->error;
    }

    $sql = "ALTER TABLE `$table`
    MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;"; //SQL запрос

    $text = "Скрипт, который делает икремент поля id";
    
    if ($connect->query($sql) === TRUE)
    {
        echo '<p class="text-success">' . $text . ', выполнен успешно!';
    }
    else
    {
        echo '<p class="text-danger">' . $text . ', не выполнен успешно:';
        echo '<p>' . $connect->error;
    }