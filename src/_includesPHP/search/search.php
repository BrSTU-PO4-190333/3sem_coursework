<?php
    $Search_model = isset($_GET['Smodel']) ? $_GET['Smodel'] : "";
    $Search_name = isset($_GET['Sname']) ? $_GET['Sname'] : "";
    $Search_onBox = isset($_GET['SonBox']) ? $_GET['SonBox'] : "";
    $Search_weight = isset($_GET['Sweight']) ? $_GET['Sweight'] : "";
    $Search_m3 = isset($_GET['Sm3']) ? $_GET['Sm3'] : "";
    $Search_series = isset($_GET['Sseries']) ? $_GET['Sseries'] : "";

    $newArr = array();
    $j = 0;
    foreach ($arr as $fields)
    {
        if (
            (
                ($Search_model == "")
                ||
                (strpos($fields['model'], $Search_model) !== False)
            )
            &&
            (
                ($Search_name == "")
                ||
                (strpos($fields['name'], $Search_name) !== False)
            )
            &&
            (
                ($Search_onBox == "")
                ||
                (strpos($fields['onBox'], $Search_onBox) !== False)
            )
            &&
            (
                ($Search_weight == "")
                ||
                (strpos($fields['weight'], $Search_weight) !== False)
            )
            &&
            (
                ($Search_m3 == "")
                ||
                (strpos($fields['m3'], $Search_m3) !== False)
            )
            &&
            (
                ($Search_series == "")
                ||
                (strpos($fields['series'], $Search_series) !== False)
            )
        )
        {
            $newArr[$j] = $fields;
            $j += 1;
        }
    }
    $arr = $newArr;
    