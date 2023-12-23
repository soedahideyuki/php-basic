<?php
//型宣言と異なるデータ型の場合にエラーが発生する。
declare(strict_types=1); 
?>
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
  <p>
    <?php
    function calculate_total($price){
      $total = $price + 500;
      echo "{$total}円<br>";
    }

    calculate_total(1200);
    

    function add_two_arguments($price , $shipping_fee){
      $total = $price + $shipping_fee;
      echo "{$total}円<br>";
    }

    add_two_arguments(1200,500);
    ?>
  </p>
  <p>
    <?php
    function double($num){
      return $num * 2;
    }

    echo double(30);
    ?>
  </p>
  <p>
    <?php
    function type_hinting_argument(int $num){  //int整数型（小数点を切り捨てる）
      return $num * 2;
    }

    // echo type_hinting_argument(1.618);
    echo type_hinting_argument(1);
    ?>
  </p>
  <p>
    <?php
    function type_hinting_return_value($num): int{
      return $num * 2;
    }

    echo type_hinting_return_value(1);
    ?>
  </p>
</body>
</html>