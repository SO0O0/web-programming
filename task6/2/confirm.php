<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>なんちゃって掲示板システム</title>
</head>

<body>
    <div class="container">
        <p>以下の内容でよろしいですか？</p>
        <div class="confirm-contents" name="article">
            <?php
            $article = $_POST['article'];
            echo  $article;
            ?>
        </div>
        <form method="post" class="contents">
            <input type="hidden" name="article" value="<?php echo $article; ?>">
            <button formaction="index.php">投稿</button>
            <input type="hidden" name="article" value="<?php echo $article; ?>">
            <button formaction="post.php">修正</button>
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
        justify-content: space-around;
        align-items: center;
        margin-top: 75px;
    }

    .confirm-contents {
        max-width: 100%;
        width: 600px;
        height: 500px;
        border: 3px solid #404040;
        padding: 10px;
        overflow: scroll;
    }

    p {
        font-size: 25px;
        font-weight: bold;
    }

    button {
        font-size: 1.0rem;
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
