<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>ページタイトル</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $dbname = 'money_book_db';
    $tablename = 'money_book';

    $link = mysqli_connect('127.0.0.1', 'root', 'dbpass', $dbname);
    if (!$link) {
        exit("Connect error!");
    }

    $result = mysqli_query($link, "SELECT * FROM $tablename");
    if (!$result) {
        exit("Select error on table ($tablename)!");
    }
    echo "<table>";
    echo "<tr>";
    echo "<td>";
    echo "time";
    echo "</td>";
    echo "<td>";
    echo "nominal";
    echo "</td>";
    echo "<td>";
    echo "price";
    echo "</td>";
    echo "<td>";
    echo "flow";
    echo "</td>";
    echo "</tr>";
    while ($row = mysqli_fetch_row($result)) {

        echo "<tr>";
        foreach ($row as $key => $value) {
            echo "<td>";
            if ($value == 0) {
                echo "支出";
            } else if ($value == 1) {
                echo "収入";
            } else {
                echo htmlspecialchars($value);
            }
            echo "</td>";
        }
    }
    echo "</tr>";
    echo "</table>";

    mysqli_free_result($result);

    mysqli_close($link);
    ?>
</body>

</html>

<style>
    table {
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }
</style>
