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
    $num = mt_rand(0, 4);
    $i = 1;
    echo "最初の値は{$num}です。<br>";
    while($num !== 0){  //0以外の時出力,５回目で強制終了
      $num = mt_rand(0,4);
      echo "現在の値は" . $num . "です。<br>";

      if($i == 5){ 
        echo "５回目なので処理を強制終了します。";
        break;
      }
      $i++;
    }
    ?>
  </p>
  <p>
    <?php
    $sum = 0;

    while($sum < 20){
      $num = mt_rand(1,10);
      echo "{$num}がでました<br>";
      if($num % 2 === 0){
        echo "偶数なので加算しません<br>";
        continue;
      }
      $sum += $num;
      echo "現在の合計は{$sum}です。<br>";
    }
    if($sum > 20){
      echo "{$sum}が20より大きくなったため終了します";
    }
    ?>
  </p>
</body>
</html>