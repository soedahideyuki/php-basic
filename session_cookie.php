<?php
session_start();

//クッキーがあれば氏名を取得
if(isset($_COOKIE['namr'])){
  $user_name = $_COOKIE['name'];
} else {
  //ユーザー名はまだ不明のため「名無し」とする
  $user_name = '名無し';

  //クッキーなければ登録
  setcookie('name', '侍太郎', time() + 3600);
  echo 'クッキーを追加します。有効期限は１時間です';
}

//ユーザー名の設定(SESSUINのみの際に使用)
// $user_name = '侍太郎';

//セッションにデータを保存
if(isset($_SESSION[$user_name])){
  //セッション変数があれば、訪問回数を１加算
  $_SESSION[$user_name]++;

  //訪問回数が３回を超えたらクッキーを削除
  if($_SESSION[$user_name] > 3){
    setcookie('name', '', time() - 100);  //質問　このコードの意味　　名無しでクッキーを再設定？
  }
} else {
  //セッション変数がなければ、初回訪問（１回目）
  $_SESSION[$user_name] = 1;
}
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
    echo 'ようこそ'.$user_name.'さん'.$_SESSION[$user_name].'回目の訪問です。';

    //訪問回数が３回を超えたらセッションを終了
    if($_SESSION[$user_name] > 3){
      echo 'セッションを終了します。';
      $_SESSION = array();
      session_destroy();  //セッションをただちに終了
    }
    ?>
  </p>
</body>
</html>