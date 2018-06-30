<?php

//DB接続関数（PDO）
function db_conn(){
  try {
    return new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
  }
}

//SQL処理エラー
function errorMsg($stmt){
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);      
}

function h($str){
  return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}

?>