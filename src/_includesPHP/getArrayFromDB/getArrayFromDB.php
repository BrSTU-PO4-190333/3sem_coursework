<?php
    // = = = = = - - - - - = = = = = get arr from table
    $sql = "SELECT * FROM $table"; //SQL запрос

    $result = $connect->query($sql); // получили ответ SQL

    $arr = array(); //создание массива

    //цикл, который проходится по SQL запросам и инкрементирует $i
    for($item = mysqli_fetch_assoc($result), $i = 0; $item != ""; $item = mysqli_fetch_assoc($result), $i += 1)
    {
        $arr[$i] = $item; //записали в массив значение полученого массива с запроса SQL
    }