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
    //連想配列に値を代入する
    $personal_data = ['name'=>'侍太郎' , 'age'=>'36' , 'gender'=>'男性'];

    print_r($personal_data);

    echo '<br>';

    $personal_data['age'] = 37;
    // 新しく要素を追加する
    $personal_data['address'] = '東京都';

    print_r($personal_data);
    echo '<br>';
    echo $personal_data['gender'];
    ?>
  </p>
</body>
</html>