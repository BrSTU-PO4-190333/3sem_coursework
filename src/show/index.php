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
            </tr>
        </thead>
        <tbody>
            <?php
                // = = = = = - - - - - = = = = = get arr from table
                $sql = "SELECT * FROM $table";
                $result = $connect->query($sql);

                for($item = mysqli_fetch_assoc($result); $item != ""; $item = mysqli_fetch_assoc($result))
                {
                    echo "<tr>"
                            . "<td scope=\"row\">" . $item['id'] . "</td>"
                            . "<td>" . $item['model'] . "</td>"
                            . "<td>" . $item['name'] . "</td>"
                            . "<td>" . $item['onBox'] . "</td>"
                            . "<td>" . $item['weight'] . "</td>"
                            . "<td>" . $item['m3'] . "</td>"
                            . "<td>" . $item['series'] . "</td>"
                        . "</tr>";
                }

                // = = = = = - - - - - = = = = = close connect
                $connect->close();
            ?>
        </tbody>
    </table>
</div>

