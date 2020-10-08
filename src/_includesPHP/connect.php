<?php
    // = = = = = - - - - - = = = = = global vars
    $site = "localhost";
    $userDB = "root";
    $passwordDB = "root";

    $database = "productsdb";
    $table = "productstable";

    // = = = = = - - - - - = = = = = conntect to table
    $connect = new mysqli($site, $userDB, $passwordDB, $database);
    if ($connect->connect_errno)
    {
        printf(
            "Не удалось подключиться: %s\n",
            $connect->connect_error
        );
        exit();
    }
