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
    //配列に値を代入する
    $user_names = ['侍太郎','侍一郎','侍次郎','侍三郎','侍四郎'] ;

    //値を出力する  print_r()　指定した変数に関する情報をわかりやすく出力する関数
    print_r($user_names);

    echo '<br>';

    //2番目の要素を更新する
    $user_names[1] = '侍花子';
    //末尾に要素を追加する
    $user_names[] = '侍五郎';
    
    print_r($user_names);
    echo '<br>';
    echo $user_names[2];
    ?>
  </p>
</body>
</html>