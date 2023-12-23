<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    date_default_timezone_set('Asia/Tokyo');
    echo date('Y年n月j日H時i分s秒') . '<br>';

    echo strtotime('+1 week'). '<br>';
//３年前の日付の取得
    echo date('Y/m/d H:i:s' , strtotime('-3 year'));
    ?>
  </p>
  <p>
    <?php
    //DateTimeはもともとphpにあるクラス newでインスタンス化できる
    $date_time = new DateTime('2015-03-19 12:15:30');
    echo $date_time->format('Y年n月j日H時i分s秒'). '<br>';

    $now = new DateTime();
    $interval = $now->diff($date_time);  //diff()で2日間の差がわかる（nowとdate_timeの差）
    echo $interval->format('%y年%m月%d日の差があります。総日数は%a日です。').'<br>';

    $now = new DateTimeImmutable();  //privateのクラス
    $add = $now->modify('+1 year');
    $sub = $now->modify('-3 day');

    echo $add->format('現在から1年後はY年n月j日H時i分s秒です。').'<br>';
    echo $sub->format('現在から3日前はY年n月j日H時i分s秒です。');

    ?>
  </p>
</body>
</html>