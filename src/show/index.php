<?php
    $title = "Show";
    include '../_includesPHP/header.php';
    include '../_includesPHP/menu.php';
    include '../_includesPHP/connect.php';
?>

<div class="container">
    <table class="table">
        <caption>Table. Show</caption>
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Model</th>
                <th scope="col">Name</th>
                <th scope="col">On box</th>
                <th scope="col">Weight</th>
                <th scope="col">M<sup>3</sup></th>
                <th scope="col">Series</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // = = = = = - - - - - = = = = =delete element by GET
                if (isset($_GET['delete']))
                {
                    $id = $_GET['delete'];

                    $query = "DELETE FROM $table WHERE id=$id";
                    $connect->query($query);
                }

                // = = = = = - - - - - = = = = = get arr from table
                $sql = "SELECT * FROM $table";
                $result = $connect->query($sql);

                for($item = mysqli_fetch_assoc($result); $item != ""; $item = mysqli_fetch_assoc($result))
                {
?>
    <tr>
        <td scope="row"><?= $item['id'] ?></td>
        <td><?= $item['model'] ?></td>
        <td><?= $item['name'] ?></td>
        <td><?= $item['onBox'] ?></td>
        <td><?= $item['weight'] ?></td>
        <td><?= $item['m3'] ?></td>
        <td><?= $item['series'] ?></td>
        <td>
            <a href="?delete=<?= $item['id'] ?>">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg>
            </a>
        </td>
    </tr>
<?php
                }
                //end cycle

                // = = = = = - - - - - = = = = = close connect
                $connect->close();
            ?>
        </tbody>
    </table>
</div>

