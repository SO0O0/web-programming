<?php
$cost_apple = 100;
$cost_banana = 50;
$cost_pine = 200;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>第5回課題3</title>
</head>

<body>
    <div class="container">
        <?php
        echo '<div class="fruits-wrapper">';
        if (isset($_GET['apple'])) {
            $apple = $_GET['apple'];
            echo "<p>リンゴの個数が $apple 個</p>";
        } else {
            $apple = 0;
            echo "<p>リンゴの個数が 0 個</p>";
        }

        if (isset($_GET['banana'])) {
            $banana = $_GET['banana'];
            echo "<p>バナナの個数が $banana 個</p>";
        } else {
            $banana = 0;
            echo "<p>バナナの個数が 0 個</p>";
        }


        if (isset($_GET['pine'])) {
            $pine = $_GET['pine'];
            echo "<p>パイナップルの個数が $pine 個</p>";
        } else {
            $pine = 0;
            echo "<p>パイナップルの個数が 0 個</p>";
        }
        echo '</div>';

        echo '<div class="fruits-wrapper">';
        echo "<a href='http://127.0.0.1:10800/~sspuser?apple=" . ($apple + 1) . "&banana=" . $banana . "&pine=" . $pine . "'>リンゴを1個追加</a>";
        echo "<a href='http://127.0.0.1:10800/~sspuser?apple=" . $apple . "&banana=" . ($banana + 1) . "&pine=" . $pine . "'>バナナを1個追加</a>";
        echo "<a href='http://127.0.0.1:10800/~sspuser?apple=" . $apple . "&banana=" . $banana . "&pine=" . ($pine + 1) . "'>パイナップルを1個追加</a>";
        echo '</div>';

        echo '<div class="fruits-wrapper">';
        if ($apple > 0) {
            echo "<a href='http://127.0.0.1:10800/~sspuser?apple=" . ($apple - 1) . "&banana=" . $banana . "&pine=" . $pine . "'>リンゴを1個減らす</a>";
        } else {
            $apple = 0;
            echo "<a href='http://127.0.0.1:10800/~sspuser?apple=0&banana=" . $banana . "&pine=" . $pine . "'>これ以上減らせません</a>";
        }
        if ($banana > 0) {
            echo "<a href='http://127.0.0.1:10800/~sspuser?apple=" . $apple . "&banana=" . ($banana - 1) . "&pine=" . $pine . "'>バナナを1個減らす</a>";
        } else {
            $banana = 0;
            echo "<a href='http://127.0.0.1:10800/~sspuser?apple=" . $apple . "&banana=0&pine=" . $pine . "'>これ以上減らせません</a>";
        }
        if ($pine > 0) {
            echo "<a href='http://127.0.0.1:10800/~sspuser?apple=" . $apple . "&banana=" . $banana . "&pine=" . ($pine - 1) . "'>パイナップルを1個減らす</a>";
        } else {
            $pine = 0;
            echo "<a href='http://127.0.0.1:10800/~sspuser?apple=" . $apple . "&banana=" . $banana . "&pine=0" . "'>これ以上減らせません</a>";
        }
        echo '</div>';


        ?>
        <br>
        <?php echo "" . ($apple + $banana + $pine) . "個のフルーツがあります";
        echo "合計金額" . ($apple * $cost_apple + $banana * $cost_banana + $pine * $cost_pine) . "円です"  ?>
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

    table {
        border: 1px solid #404040;
    }

    td {
        border: 1px solid #404040;
    }

    p {
        font-size: 1.5rem;
        color: #404040;
    }

    a {
        height: 1rem;
        margin: 1rem;
        text-decoration: none;
    }

    .container {
        width: 80%;
    }

    .fruits-wrapper {
        width: 100%;
        display: flex;
        justify-content: space-between;
        text-align: center;
    }
</style>
