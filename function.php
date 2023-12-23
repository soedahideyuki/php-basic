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
    function say_good_morning(){
      echo 'おはようございます<br>';
      echo '昨日はよく眠れましたか？<br>';
      echo '今日も一日頑張りましょう<br>';
    }

    function say_good_evening(){
      echo 'こんばんは<br>';
      echo '今日も一日お疲れ様でした';
    }

    say_good_morning();
    say_good_evening();
    ?>
  </p>
</body>
</html>