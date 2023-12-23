<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
  <h2>
    <?php
    $str = 'Appleが5個あります。Orangeは1個しかありません。';
    echo '検索対象:' . $str;
    ?>
  </h2>
  <p>
    <?php
    echo '「Orange」が含まれているかどうかを正規表現で検索します。<br>';

    if(preg_match('/Orange/',$str)){
      echo '>正規表現に一致しました';
    }else{
      echo '>正規表現に一致しませんでした。';
    }
    ?>
  </p>
  <p>
    <?php
    echo '「A」で始まっているかどうかを正規表現で検索します<br>';

    if(preg_match('/A/',$str)){
      echo '>正規表現に一致しました';
    }else{
      echo '>正規表現に一致しませんでした。';
    }
    ?>
  </p>
  <p>
  <?php
    echo '「。」で終わっているかどうかを正規表現で検索します<br>';

    if(preg_match('/。$/',$str)){
      echo '>正規表現に一致しました';
    }else{
      echo '>正規表現に一致しませんでした。';
    }
    ?>
  </p>
  <p>
  <?php
    echo '「Appleが5個あります。Orangeは1個しかありません。」と完全に一致しているかを正規表現で検索します<br>';

    if(preg_match('/\AAppleが5個あります。Orangeは1個しかありません。\z/',$str)){
      echo '>正規表現に一致しました';
    }else{
      echo '>正規表現に一致しませんでした。';
    }
    ?>
  </p>
  <p>
    <?php
    echo '「Apple」または「Orange」が含まれているかどうかを正規表現で検索します。<br>';

    if(preg_match('/Apple|Orange/',$str)){
      echo '>正規表現に一致しました';
    }else{
      echo '>正規表現に一致しませんでした。';
    }
    ?>
  </p>
  <p>
    <?php
    echo '小文字のアルファベットが含まれているかどうかを正規表現で検索します。<br>';

    if(preg_match('/[a-z]/',$str)){
      echo '>正規表現に一致しました';
    }else{
      echo '>正規表現に一致しませんでした。';
    }
    ?>
  </p>
  <p>
    <?php
    echo '大文字のアルファベットが含まれているかどうかを正規表現で検索します。<br>';

    if(preg_match('/[A-Z]/',$str)){
      echo '>正規表現に一致しました';
    }else{
      echo '>正規表現に一致しませんでした。';
    }
    ?>
  </p>
  <p>
    <?php
    echo '数字が含まれているかどうかを正規表現で検索します。<br>';

    if(preg_match('/[0-9]/',$str)){
      echo '>正規表現に一致しました';
    }else{
      echo '>正規表現に一致しませんでした。';
    }
    ?>
  </p>
  <p>
    <?php
    echo '英数字が含まれているかどうかを正規表現で検索します。<br>';

    if(preg_match('/[A-Za-z0-9]/',$str ,$results)){
      echo '>検索結果:';
      print_r($results);
    }else{
      echo '>正規表現に一致しませんでした。';
    }
    ?>
  </p>


</body>
</html>