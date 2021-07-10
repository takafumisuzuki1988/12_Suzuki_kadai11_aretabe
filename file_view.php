<?php
session_start();
$lid = $_SESSION['lid'];

// 1. DB接続
require_once('funcs.php');
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM tk_img_table WHERE lid='$lid'");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
  sql_error();
}else{
  while( $r = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .= '<p class="menu">';
    $view .= '<a href="detail2.php?id='.$r["id"].'">';
    $view .= '<img src="upload/'.$r["img"].'">';
    $view .= $r["name"];
    $view .= 'made by';
    $view .= $r["cook"];
    $view .= '</p>';
  }
}




?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>アップロード画面サンプル</title>
    <title>
    </title>
    <style>
        fieldset {
            border: 1px solid #666;
            padding: 3px;
        }

        #photarea {
            padding: 5%;
            width: 90%;
            background: white;
        }

        img {
            width: 20%
        }

        #upload_btn {
            display: none;
        }
        .menu{
            width: 100%;
            font-size: large;
        }
    </style>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body id="main">

    <!-- ヘッダー -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="file_view.php">あれたべリスト</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="index.php">あれたべ追加</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="file_view_delete.php">リスト整理</a></div>
            </div>
        </nav>
    </header>
    <!-- ヘッダー -->

    <!-- コンテンツ -->
    <p id="user_name"><?= $lid ?>さんがまた食べたいと思ったものです</p>
    <div class="container-fluid">
        
        <div id="photarea">
            <!-- ここにPHPの変数を記述 -->
            <?=$view ?>
        </div>
    </div>
    <!-- コンテンツ -->

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>