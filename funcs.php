<?php
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続
function db_conn(){
  try {
      //localhost用  
        $db_name = "tk_db";
        $db_id = "root";
        $db_pw = "root";
        $db_host = "localhost";
      //   $db_table = "tk_an_table";
    
        //sakura server用（gitにアップするときは削除する！）

    
    
      //Password:MAMP='root',XAMPP=''
      $pdo = new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host,$db_id,$db_pw);
      return $pdo;
  } catch (PDOException $e) {
      exit('DBConnectError:'.$e->getMessage());
    }
}
// function db_conn(){
  
//   // $db="limealpaca16_test"; //DB名変更はここを！
//   $db="tk_db";

//   try {
//     //MAMP
//     return new PDO('mysql:dbname='.$db.';charset=utf8;host=localhost','root','root');
//     // return new PDO('mysql:dbname='.$db.';charset=utf8;host=mysql57.limealpaca16.sakura.ne.jp','limealpaca16','milsakura1229');
//     //XAMP
//     //return new PDO('mysql:dbname='.$db.';charset=utf8;host=localhost','root','');
//   } catch (PDOException $e) {
//     exit('DB Connection Error:'.$e->getMessage());
//   }
// }

//SQLエラー
function sql_error(){
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}

//リダイレクト
function redirect($file_name){
    header("Location: ".$file_name);
    exit();
}
//SessionCheck
function loginCheck(){
  if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()){
    exit("Login Error");
  }else{
    session_regenerate_id(true);
    $_SESSION["chk_ssid"] = session_id();
  }
}