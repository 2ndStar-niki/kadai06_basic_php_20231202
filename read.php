<?php
// ファイルを開いて内容を読み込む
$data = file_get_contents('./data/data.txt');

// nl2br ... textファイルの改行を<br>に変換する関数
echo nl2br($data);
