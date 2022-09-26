<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>task_3_2</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>×</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
        </tr>
        <?php
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            echo "<th>$i</th>";
            for ($j = 1; $j <= 9; $j++) {
                echo "<td>";
                echo $i * $j;
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
