<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>ページタイトル</title>
</head>

<body>
    <div class="container">
        <p>なんちゃって掲示板システム</p>
        <button onclick="location.href='./post.php'">新規投稿</button>
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
        height: 200px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }

    p {
        font-size: 25px;
        font-weight: bold;
    }

    button {
        font-size: 1.2rem;
        font-weight: 700;
        line-height: 1.5;
        position: relative;
        display: inline-block;
        padding: 1rem 4rem;
        cursor: pointer;
        border: 0.1rem solid #000;
        transition: all 0.3s;
        text-align: center;
        vertical-align: middle;
        text-decoration: none;
        letter-spacing: 0.1em;
        color: #212529;
        border-radius: 0.5rem;
    }

    button:hover {
        background-color: #000;
        color: #FFFFFF;
    }
</style>
