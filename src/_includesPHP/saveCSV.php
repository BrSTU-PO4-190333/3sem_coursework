<?php
    $fp = fopen('file.csv', 'w');

    foreach ($arr as $fields) {
        fputcsv($fp, $fields);
    }

    fclose($fp);