<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>ページタイトル</title>
</head>

<body>
    <?php
    // データベースの情報
    $hostname = '127.0.0.1';
    $username = 'root';
    $password = 'dbpass';
    $dbname = 'money_book_db';
    $tablename = 'money_book';

    // データベースに接続
    $link = mysqli_connect($hostname, $username, $password);
    // 接続できなかった場合
    if (!$link) {
        exit("Connect error!");
    }

    // データベースが無ければ作成
    $result = mysqli_query($link, "CREATE DATABASE IF NOT EXISTS $dbname CHARACTER SET utf8");
    // 作成できなかった場合
    if (!$result) {
        exit("Create database error!");
    }

    // データベースを選択
    $result = mysqli_query($link, "USE $dbname");
    // 選択できなかった場合
    if (!$result) {
        exit("Select database error!");
    }

    // テーブルを無ければ作成
    $result = mysqli_query($link, "CREATE TABLE IF NOT EXISTS $tablename (
        time TIMESTAMP NOT NULL,
        nominal VARCHAR(20) BINARY,
        price INT NOT NULL,
        flow INT NOT NULL,
        PRIMARY KEY(time))
    ");
    // 作成できなかった場合
    if (!$result) {
        exit("Create table error!");
    }

    // データを5件挿入
    for ($i = 1; $i <= 5; $i++) {
        // priceを乱数で生成
        $price = rand(1000, 10000);
        // flowを乱数で生成
        $flow = rand(0, 1);
        $result = mysqli_query($link, "INSERT INTO $tablename SET nominal = 'something', price=$price, flow = $flow");
        // 挿入できなかった場合
        if (!$result) {
            exit("Insert data error!");
        }
        // 主キーが原因で高速で挿入するとerrorになるのでsleep
        sleep(1);
    }

    // 成功したらデータベースを閉じる
    echo "Create db and table and update succeeded!\n";
    mysqli_close($link);
    ?>
</body>

</html>
