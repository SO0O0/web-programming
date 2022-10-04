<!DOCTYPE html>
<html>
<?php
$price['apple'] = 150;
$price['orange'] = 120;
$price['pinapple'] = 300;
?>

<head>
    <meta charset="UTF-8" />
    <title>ページタイトル</title>
</head>

<body>
    <table>
        <?php
        foreach ($price as $key => $value) {
            echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>

<style>
    table {
        border-collapse: collapse;
    }

    td {
        border: solid 1px;
        padding: 10px;
    }
</style>
