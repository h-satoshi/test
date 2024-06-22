<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>diworksblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <div class="diblog_logo">
            <img src="/diworks_keijiban/diblog_logo.jpg" alt="">
        </div>

        <div class="nav">
            <ul>
                <li><a href="#">トップ</a></li>
                <li><a href="#">プロフィール</a></li>
                <li><a href="#">D.I.Blog について</a></li>
                <li><a href="#">登録フォーム</a></li>
                <li><a href="#">問い合わせ</a></li>
                <li><a href="#">その他</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="left">
            <h2>プログラミングに役立つ掲示板</h2>

            <div class="input_form">
                <h3>入力フォーム</h3>
                <form method="post" action="insert.php">
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" size="35" name="hondlename">
                    </div>

                    <div>
                        <label for="">タイトル</label>
                        <br>
                        <input type="text" class="text" size="35" name="taitle">
                    </div>

                    <div>
                        <label for="">コメント</label>
                        <br>
                        <textarea cols="50" rows="7" name="comments"></textarea>
                    </div>

                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>
                </form>
            </div>

            <?php

                mb_internal_encoding("utf8");

                $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

                $stmt = $pdo ->query("select * from diworks_keijiban");

                while($row = $stmt ->fetch()){
                    echo "<div class='kii'>";
                    echo "<h3>".$row['taitle']."</h3>";
                    echo "<div class='comments'>";
                    echo $row['comments'];
                    echo "<div class='hondlename'>posted by".$row['hondlename']."</div>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>

        </div>

        <div class="right">
            <nav class="article">
                    <h3>人気の記事</h3>
                    <ul>
                        <li><a href="#">PHPオススメ本</a></li>
                        <li><a href="#">PHP　MyAdminの使い方</a></li>
                        <li><a href="#">いま人気のエディタTops</a></li>
                        <li><a href="#">HTMLの基礎</a></li>
                    </ul> 
                </nav>

                <nav class="link">
                    <h3>オススメリンク</h3>
                    <ul>
                        <li><a href="#">ディーアイワークス株式会社</a></li>
                        <li><a href="#">XAMPPのダウンロード</a></li>
                        <li><a href="#">Eclipseのダウンロード</a></li>
                        <li><a href="#">Braketsのダウンロード</a></li>
                    </ul>
                </nav>
                
                <nav class="category">
                    <h3>カテゴリ</h3>
                    <ul>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">MySQL</a></li>
                        <li><a href="#">JavaScript</a></li>
                    </ul>
            </nav>
        </div>
    </main>

    <footer>
        <p>Coylight D.I.works| D.I.blog is the one which provides A to Z about programming</p>
    </footer>

</body>
</html>