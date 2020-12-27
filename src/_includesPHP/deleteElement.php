<?php
    // = = = = = - - - - - = = = = = delete element by GET
    if (isset($_GET['delete']))
    {
        $id = $_GET['delete']; // получили значение GET запроса
        $query = "DELETE FROM $table WHERE id=$id"; //SQL запрос на удаление
        $connect->query($query); // сделали SQL запрос
    }