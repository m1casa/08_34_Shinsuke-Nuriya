<?php

//1. GETデータ取得
$id   = $_GET["id"];

//2. DB接続
include("user_functions.php");
$pdo = db_conn();

//３．データ登録SQL作成
$delete = $pdo->prepare("DELETE FROM gs_user_table WHERE id=:id");
$delete->bindValue(':id', $id);
$status = $delete->execute();

//４．データ登録処理後
if($status==false){
  errorMsg($stmt);
}else{
  //５．user_select.phpへリダイレクト
  header("Location: user_select.php");
  exit;
}
?>