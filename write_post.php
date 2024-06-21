<?php

$date= $_POST["date"];
$fish = $_POST["fish"];
$place = $_POST["place"];
$price = $_POST["price"];
$remarks =$_POST["remarks"];
$imgFile = $_POST["imgFile"];



// ファイルに書き込み
$time = date("Y-m-d H:i:s");
//文字作成
// $data = $time . 'test' . "\n";
$data = $time . $date . $fish . $place . $price . $imgFile . "\n";


file_put_contents("data_post.txt", $data, FILE_APPEND);
?>



<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./kadai07/data_post.txt を確認しましょう！</h2>

    
    <ul>
        <li><a href="read_post.php">確認する</a></li>
        <li><a href="index.php">戻る</a></li>
    </ul>
</body>

</html>
