<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <!-- vim: set sts sw=4 expandtab : -->
    <title>ページタイトル</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="title">
        <p>課題8-2</p>
    </div>
    <form action="post.php" method="post" class="contents">
        <div class="input-form">
            <p>名目</p>
            <input type="text" name="nominal"></input>
        </div>
        <div class="input-form">
            <p>値段</p>
            <input type="text" name="price"></input>
        </div>
        <div class="input-form">
            <p>支出？収入？</p>
            <select name="flow">
                <option value="0">支出</option>
                <option value="1">収入</option>
            </select>
        </div>
        <button type="submit">レコード追加</button>
    </form>
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
