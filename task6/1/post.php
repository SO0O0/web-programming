<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>なんちゃって掲示板システム</title>
</head>

<body>
    <div class="container">
        <p>記事入力画面</p>
        <form action="confirm.php" method="post" class="contents">
            <textarea name="article"></textarea>
            <button type="submit" onclick="location.href='./confirm.php'">新規投稿</button>
        </form>
    </div>
</body>

</html>

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 80vh;
    }

    .container {
        width: 80%;
        max-width: 1000px;
        height: 80vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 75px;
    }

    p {
        font-size: 25px;
        font-weight: bold;
    }

    form {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }

    textarea {
        width: 600px;
        height: 500px;
        border: 3px solid #404040;
    }

    button {
        font-size: 0.7rem;
        font-weight: bold;
        line-height: 1.0;
        position: relative;
        display: inline-block;
        padding: 0.5rem 2.0rem;
        cursor: pointer;
        border: 0.1rem solid #000;
        transition: all 0.3s;
        text-align: center;
        vertical-align: middle;
        text-decoration: none;
        letter-spacing: 0.1em;
        color: #212529;
        border-radius: 0.5rem;
        margin-top: 1rem;
    }

    button:hover {
        background-color: #000;
        color: #FFFFFF;
    }
</style>
