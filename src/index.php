<?php
    $title = "Home page";
    include '_includesHTML/header.php';
    include '_includesHTML/menu.php';
?>

<div class="container">

    <table class="table">
        <thead>
            <tr>
                <th scope="col" style="width: 220px;">Tab</th>
                <th scope="col">Info</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>
                    <a
                        href="delete-table"
                        class="btn btn-outline-danger"
                        style="width: 100%;"
                    >Delete table</a></th>
                <th>После перехода по кнопке сайт удалит таблицу в базе данных MySQL phpmyadmin</th>
            </tr>
            <tr>
                <th>
                    <a
                        href="create-table"
                        class="btn btn-outline-success"
                        style="width: 100%;"
                    >Create table</a> </th>
                <th>После перехода по кнопке сайт создаст таблицу в базе данных MySQL phpmyadmin</th>
            </tr>
            <tr>
                <th>
                    <a
                        href="add"
                        class="btn btn-outline-dark"
                        style="width: 100%;"
                    >Add</a></th>
                <th>После перехода по кнопке сайт предложит удобную форму для заполнения полей</th>
            </tr>
            <tr>
                <th>
                    <a
                        href="show"
                        class="btn btn-outline-dark"
                        style="width: 100%;"
                    >Show</a></th>
                <th>
                    <p>После перехода по кнопке сайт выведет на экран таблицу, в которой можно</p>
                    <ul>
                        <li>производить поиск</li>
                        <li>сортировать по колонкам</li>
                        <li>удалять выбранный элемент</li>
                        <li>редактировать выбранный элемент</li>
                        <li>сохранить, таблицу на экране в файловую таблицу CSV</li>
                    </ul>
                </th>
            </tr>
        </tbody>
    </table>
</div>