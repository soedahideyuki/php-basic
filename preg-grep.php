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