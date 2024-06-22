<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>お問合せフォーム</h1>
    <form method="post" action="mail_confirm.php">
        <div>
            <label>名前</label>
            <br>
            <input type="text" class="text" size="35" name="name" value="<?php echo $_POST['name'];?>">
        </div>

        <div>
            <label>メールアドレス</label>
            <br>
            <input type="text" class="text" size="35" name="mail" value="<?php echo $_POST['mail'];?>">
        </div>

        <div>
            <label>年齢</label>
            <br>
            <select class="dropdown" name="age">
                <option>選択してください</option>
                <?php
                //var_dump($_POST);
                for($i=18; $i<=65; $i++){
                    if ($i == $_POST['age']) {
                        // 選択された状態の <option selected> タグを echo する
                        echo '<option selected value="'.$i.'">'.$i.'歳</option>';
                    } else {
                        // 選択されていない状態の <option> タグを echo する
                        echo '<option value="'.$i.'">'.$i.'歳</option>';
                    }
                }
                ?>
            </select>
        </div>

        <div>
            <label>コメント</label>
            <br>
            <textarea cols="35" rows="7" name="comments" ><?php echo $_POST['comments'];?></textarea>
        </div>

        <div>
            <input type="submit" class="submit" value="送信する">
        </div>
    </form>
</body>
</html>