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
    error_reporting(0);
    echo '全エラー無効'. '<br>';

    echo $dummy1;

    error_reporting(E_ALL);
    echo '全エラー有効';

    echo $dummy2;
    // $test = 1/0;
    ?>
  </p>
</body>
</html>