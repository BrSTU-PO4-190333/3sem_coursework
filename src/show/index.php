<?php
    $title = "Show";
    include '../_includesPHP/header.php';
    include '../_includesPHP/menu.php';
    include '../_includesPHP/connect.php';
?>

<table border="1">
    <caption>Table. Show</caption>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Model</th>
        <th>On box</th>
        <th>Cost</th>
    </tr>
    <?php
        // = = = = = - - - - - = = = = = get arr from table
        $sql = "SELECT * FROM $table";
        $result = $connect->query($sql);

        for($item = mysqli_fetch_assoc($result); $item != ""; $item = mysqli_fetch_assoc($result))
        {
            echo "<tr>"
                    . "<td>" . $item['id'] . "</td>"
                    . "<td>" . $item['model'] . "</td>"
                    . "<td>" . "-" . "</td>"
                    . "<td>" . "0" . "</td>"
                    . "<td>" . "00.00" . "</td>"
                . "</tr>";
        }

        // = = = = = - - - - - = = = = = close connect
        $connect->close();
    ?>
</table>
