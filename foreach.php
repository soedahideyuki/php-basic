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
    $user_names=['侍太郎','侍次郎','侍一郎','侍三郎','侍四郎'];

    foreach($user_names as $user_name){
      echo $user_name . "<br>";
    }
    foreach($user_names as $index => $value){
      echo "{$index}:{$value}<br>";
    }
    ?>
  </p>
  <P>
    <?php
    $personal_data=['name'=>'侍太郎','age'=>36 ,'gender' => '男性'];

    foreach($personal_data as $key=>$value){
      echo "{$key}は{$value}です<br>";
    }

    foreach($personal_data as $value){
      echo $value.'<br>';
    }
    ?>
  </p>
  <p>出身地を選択してください。</p>
  <form>
    <select>
    <?php
    $birthplaces = ['北海道地方','東北地方','関東地方','中部地方','近畿地方','中国地方','四国地方','九州地方'];

    foreach($birthplaces as $birthplace){
      echo "<option>{$birthplace}</option>";
    }
    ?>
    </select>
  </form>
  <p>
    <?php
    $user_names=['侍太郎','侍一郎','侍二郎','侍三郎','侍四郎'];
    $target = '侍二郎';
    foreach($user_names as $user_name){
      echo $user_name.'<br>';
    
      if($target == $user_name){
        echo "{$target}さんが見つかったので、繰り返し処理を強制終了します。";
        break;
      }
    }
    ?>
  </p>
  <p>
    <?php
    $score=['国語'=>70,'数学'=>50,'理科'=>55,'社会'=>70,'英語'=>80,];
    echo '合格した科目は以下の通りです'.'<br>';
    foreach($score as $key => $value){
      if($value < 70){
        continue;
      }
      echo "{$key}:{$value}点<br>";
    }
    ?>
  </p>
</body>
</html>