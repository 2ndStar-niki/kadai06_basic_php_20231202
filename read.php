<html>

<head>
    <meta charset="utf-8">
    <title>問い合わせリスト</title>
</head>

<body>

    <?php
    // .txtファイルからデータを読み込む
    $data = file_get_contents('./data/data.txt');

    // 改行を区切りとしてデータを分割
    $entries = explode("\n", $data);

    // テーブルの開始
    echo '<table border="1">';
    echo '<tr><th>日付</th><th>名前</th><th>メール</th><th>その他</th></tr>';

    // 各エントリごとにデータを表示
    foreach ($entries as $entry) {
        // '/'を区切りとしてデータを分割
        $parts = explode("/", $entry);

        // データがある場合にテーブルに追加
        if (count($parts) === 4) {
            echo '<tr>';
            foreach ($parts as $part) {
                echo '<td>' . htmlspecialchars(trim($part)) . '</td>';
            }
            echo '</tr>';
        }
    }

    // テーブルの終了
    echo '</table>';
    ?>

</body>

</html>