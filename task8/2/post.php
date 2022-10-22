<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>ページタイトル</title>
</head>

<body>
    <?php
    $nominal = $_POST['nominal'];
    $price = $_POST['price'];
    $flow = $_POST['flow'];
    $hostname = '127.0.0.1';
    $username = 'root';
    $password = 'dbpass';
    $dbname = 'money_book_db';
    $tablename = 'money_book';

    $link = mysqli_connect($hostname, $username, $password);
    if (!$link) {
        exit("Connect error!");
    }

    $result = mysqli_query($link, "USE $dbname");
    if (!$result) {
        exit("USE failed!");
    }

    $result = mysqli_query($link, "INSERT INTO $tablename SET nominal='$nominal', price=$price, flow='$flow'");
    if (!$result) {
        exit("INSERT error!");
    }

    echo "Create db and table and update succeeded!\n";

    mysqli_close($link);
    ?>
</body>

</html>

<style>
    .title {
        text-align: center;
        font-size: 30px;
        font-weight: bold;
        margin: 20px;
    }

    .contents {
        text-align: center;
        margin: 20px;
    }

    .input-form {
        margin: 20px;
    }
</style>
