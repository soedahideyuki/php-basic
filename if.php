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
    echo 45 + 18 ;
    echo '<br>';
    //比較演算子を使った場合の戻り値を出力する 
    //var_dump()　変数に関する情報を出力する　trueとfalseを返す
    var_dump(45 > 18);
    ?>
  </p>
  <p>
    <?php
    var_dump('5' == 5);
    echo '<br>';
    var_dump('5' === 5);
    ?>
  </p>
  <p>
    <?php
    // mt_rand(a,b);　a~bまでの数字をランダムで代入する
    $num = mt_rand(0, 4);
    echo $num;
    echo '<br>';
    // 変数$numが4であれば大当たりと3であれば当たりとそれ以外ははずれと出力する
    if($num === 4){
      echo '大当たりです';
    } else if( $num === 3){
      echo '当たりです';
    } else{
      echo 'はずれです';
    }
    ?>
  </p>
  <p>
    <?php
    $num = 20;
    //&&（かつ）を記述して、すべての条件が成り立つ場合のみ処理する
    if($num > 10 && $num < 30){
      echo '変数$numは10より大きく、30より小さいです';
    } else{
      echo '条件が成り立ちませんでした';
    }
    echo '<br>';

    $num = 30;
    //||（または）を記述して、1つでも条件が成り立てば処理を行う
    if($num === 10 || $num === 30){
      echo '変数$numは10または30です';
    }else{
      echo '条件が成り立ちませんでした';
    }
    ?>
  </p>
</body>
</html>