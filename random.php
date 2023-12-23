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
    $dice = mt_rand(1,6);
    echo "{$dice}の目がでました。";
    ?>
  </p>
  <p>
    <?php
    $omikuji = ['大吉','吉','中吉','小吉','末吉','凶','大凶'];
    
    $key = array_rand($omikuji);  //配列のindexを取得
    $result = $omikuji[$key];  //indexから配列を取得
    echo "おみくじの結果は{$result}です。";
    ?>
  </p>
</body>
</html>