<?php
    $Search_onBox = isset($_GET['SonBox']) ? $_GET['SonBox'] : "";

    $newArr = array();
    $j = 0;
    foreach ($arr as $fields)
    {
        if (
            ($Search_onBox == "")
            ||
            (strpos($fields['onBox'], $Search_onBox) !== False)
        )
        {
            $newArr[$j] = $fields;
            $j += 1;
        }
    }
    $arr = $newArr;
    