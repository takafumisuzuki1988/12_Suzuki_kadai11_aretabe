<?php
//1. POSTデータ取得
$lid  = $_POST["lid"];
$lpw    = $_POST["lpw"];
$hlpw  = password_hash($lpw, PASSWORD_DEFAULT);
// $kanri_flg = $_POST["kanri_flg"];
// $life_flg = $_POST["life_flg"];

//2. DB接続します
//以下を関数化！
require_once('funcs.php');
$pdo = db_conn();


//３．SQL文を用意(データ登録：INSERT)
$stmt = $pdo->prepare(
  "INSERT INTO tk_are_user_table( id, lid, lpw)
  VALUES( NULL,:lid,:lpw)"
);

// 4. バインド変数を用意
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', $hlpw, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// 5. 実行
$status = $stmt->execute();

//6．データ登録処理後
if($status==false){
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    //以下を関数化
    sql_error($stmt);
  }else{
    //５．index.phpへリダイレクト
    //以下を関数化
    redirect('login.php');
  }