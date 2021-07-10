<?php
session_start();
$id = $_GET["id"]; //?id~**を受け取る
require_once("funcs.php");
// loginCheck();
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM tk_img_table WHERE id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
    sql_error();
}else{
    $row = $stmt->fetch();
    $view = '<img src="upload/'.$row["img"].'">';
}
?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>

  div{padding: 10px;font-size:16px;}
  #photarea {padding: 5%;width: 20%;background: white;}
  img{width: 90%;}
  </style>

</head>
<body id="main">
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand" href="file_view.php">リストへ戻る</a></div>
        </div>
    </nav>
</header>
<!-- Head[Start] -->
<?php include("menu.php"); ?>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="update2.php">
  <div class="jumbotron">
   <fieldset>
    <legend>[編集]</legend>
        <div id="photarea">
            <!-- ここにPHPの変数を記述 -->
            <?=$view ?>
        </div>
     <label>メニュー名<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
     <label>作った人<input type="text" name="cook" value="<?=$row["cook"]?>"></label><br>
     <input type="submit" value="変更">
     <input type="hidden" name="id" value="<?=$id?>">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
