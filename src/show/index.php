<?php
    $title = "Show";
    include '../_includesHTML/header.php';
    include '../_includesHTML/menu.php';
    include '../_includesPHP/connect.php';
?>

<div class="container">

    <?php
        include '../_includesPHP/deleteElement/deleteElement.php'; //удаление элемента по индексу
        include '../_includesPHP/getArrayFromDB/getArrayFromDB.php'; //получение массива из базы данных
        $connect->close(); // разорвали соединение
        include '../_includesPHP/sortArray.php'; //сортировка по Get запросу
        include '../_includesPHP/saveCSV.php'; //сохранение массива в CSV файл
    ?>

    <p
        style="text-align: right;"
    >
        <a
            class="btn btn-outline-success"
            href="file.csv"
            target="_blank"
        >
            Save as CSV
        </a>
    </p>

    <table class="table">
        <caption>Table. Show</caption>
        <thead class="thead-dark">
            <tr>
                <th scope="col">Edit</th>
                <th scope="col"><a style="color: white;" href="?sort_by=id">id</a></th>
                <th scope="col"><a style="color: white;" href="?sort_by=model">Model</a></th>
                <th scope="col"><a style="color: white;" href="?sort_by=name">Name</a></th>
                <th scope="col"><a style="color: white;" href="?sort_by=onBox">On box</a></th>
                <th scope="col"><a style="color: white;" href="?sort_by=weight">Weight</a></th>
                <th scope="col"><a style="color: white;" href="?sort_by=m3">M<sup>3</sup></a></th>
                <th scope="col"><a style="color: white;" href="?sort_by=series">Series</a></th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>

            <?php for ($i = 0; $i < count($arr); $i += 1){ // цикличный повтор HTML кода ниже?>
            <tr>
                <td>
                    <?php
                        $get_link = "/edit?"
                            ."id="      .$arr[$i]['id']
                            ."&model="  .$arr[$i]['model']
                            ."&name="   .$arr[$i]['name']
                            ."&onBox="  .$arr[$i]['onBox']
                            ."&weight=" .$arr[$i]['weight']
                            ."&m3="     .$arr[$i]['m3']
                            ."&series=" .$arr[$i]['series'];
                    ?>
                    <a href="<?= $get_link ?>">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/></svg>
                    </a>
                </td>
                <td scope="row"><?= $arr[$i]['id'] ?></td>
                <td><?= $arr[$i]['model'] ?></td>
                <td><?= $arr[$i]['name'] ?></td>
                <td><?= $arr[$i]['onBox'] ?></td>
                <td><?= $arr[$i]['weight'] ?></td>
                <td><?= $arr[$i]['m3'] ?></td>
                <td><?= $arr[$i]['series'] ?></td>
                <td>
                    <a href="?delete=<?= $arr[$i]['id'] ?>">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg>
                    </a>
                </td>
            </tr>
            <?php } //end cycle?>

        </tbody>
    </table>
</div>
