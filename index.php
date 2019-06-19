<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Datetime(UTC)からDate(Asia/Tokyo)への変換</title>
</head>
<body>
  <?php
    $endDate = new DateTime('now');
    $endDate->setTimeZone(new DateTimeZone('UTC')); // タイムゾーンはUTC
    $endDateTime = $endDate->format("Y-m-d\TH:i:s+0900"); // 終了日フォーマット
    echo $endDateTime."(UTC + 9:00)<br>";
    $endDate->setTimeZone(new DateTimeZone('Asia/Tokyo'));
    $newEndDateTime = $endDate->format("Y-m-d H:i:s");
    echo $newEndDateTime."(Asia/Tokyo)<br>";
    echo date('Y年m月d日 H時i分s秒', strtotime($newEndDateTime));
?>
<pre>
$endDate = new DateTime('now');
$endDate->setTimeZone(new DateTimeZone('UTC')); // タイムゾーンはUTC
$endDateTime = $endDate->format("Y-m-d\TH:i:s+0900"); // フォーマット
echo $endDateTime."(UTC + 9:00)";

$endDate->setTimeZone(new DateTimeZone('Asia/Tokyo')); // タイムゾーンを変更
$newEndDateTime = $endDate->format("Y-m-d H:i:s");
echo $newEndDateTime."(Asia/Tokyo)";
echo date('Y年m月d日 H時i分s秒', strtotime($newEndDateTime)); // Dateに変換
</pre>
</body>
</html>