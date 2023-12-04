<?php

$name = $_POST['name'];
$email = $_POST['email'];
$messege = $_POST['messege'];
date_default_timezone_set('Asia/Tokyo');
$time = date('Y-m-d H:i:s');

// 書き込むデータの内容を整形する。
// "\n"は改行。HTMLの<br>と同じようにtext中で利用されるとtextは改行される。
$data = $time . '\n' . $name . '\n' .  $email . '\n' . $messege . '\n';

// 第３引数に、FILE_APPENDしないと上書きされちゃう
file_put_contents('data/data.txt', $data, FILE_APPEND);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>