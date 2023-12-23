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
    $personal_data = [
      'name' => '侍太郎',
      'address' => '侍町7-77',
      'mobile' => '090-0000-0000'
    ];

    echo '検索対象:';
    print_r($personal_data);
    ?>
  </h2>
  <p>
    <?php
    echo '携帯電話の番号を検索し、一致すれば-（ハイフン）を削除したものに置換します。<br>';

    $no_hyphen = preg_replace('/\A(0[7-9]0)-([0-9]{4})-([0-9]{4})\z/', '$1$2$3', $personal_data);

    echo '>置換結果:';
    print_r($no_hyphen);
    ?>
  </p>
  <h2>
    <?php
    $emails = [
      'taro.samurai55@example.com',
      'taro.samurai55@@example.com',
      '875-samurai.example.com',
      '875.Samurai@example.com'
    ];

    echo '検索対象:';
    print_r($emails);
    ?>
  </h2>
  <p>
    <?php
    echo 'メールアドレスのフォーマットと完全に一致している要素のみを配列で返します。<br>';
    ?>
  </p>
</body>
</html>