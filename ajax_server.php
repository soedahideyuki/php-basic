<?php
//Ajaxリクエストの取得
$ajax_request = file_get_contents('php://input');

//AjaxリクエストをPHPで扱える連想配列に変換
$date = json_decode($ajax_request , true);

//受け取ったデータに応じて処理を行う
if( $date['name'] == 'SAMURAI'){
  $date['name'] = 'TERAKOYA';
} else {
  $date['name'] = 'SAMURAI';
}

// Ajaxレスポンスを生成
$response = [
  'message' => $date['name']
];

//JSON形式を指定してブラウザ側へ返信
header('Content-Type: applocation/json');
echo json_encode($response);
?>