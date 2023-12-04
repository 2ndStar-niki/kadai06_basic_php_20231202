<?php
// ファイルに書き込む内容を用意。
date_default_timezone_set('Asia/Tokyo');
$time = date('Y-m-d H:i:s');
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// 書き込むデータの内容を整形する。
// "\n"は改行。HTMLの<br>と同じようにtext中で利用されるとtextは改行される。
$data = $time . '/' . $name . '/' .  $email . '/' . $message . "\n";

// 第３引数に、FILE_APPENDしないと上書きされちゃう
file_put_contents('data/data.txt', $data, FILE_APPEND);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>ダッシュボード</title>
</head>

<body>

    <h1>書き込みしました。</h1>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>

</html>