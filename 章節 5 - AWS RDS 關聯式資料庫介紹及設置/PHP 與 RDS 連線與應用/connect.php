<?php
// 參數
$account    = "testhahow";
$password   = "testhahow";
$host       = "testhahow.c2rwt0cjtai4.ap-northeast-1.rds.amazonaws.com";
$db         = 'testhahow';

// 建立連線物件
$conn = mysqli_connect($host, $account, $password);
if (empty($conn)) {
    die("無法連結資料庫");
}

// 選取資料庫
if (!mysqli_select_db($conn, $db)) {
    die("無法選擇資料庫");
}

// 設定連線編碼
mysqli_query($conn, "SET NAMES 'utf8'");

// 取得資料
$sql    ="select * from `member`";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<Pre>";
    print_r($row);
    echo "</Pre>";
}
