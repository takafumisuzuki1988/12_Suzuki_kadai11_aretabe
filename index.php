<?php
session_start();
//funcsの関数を読み込む
require_once('funcs.php');
loginCheck();

$pdo = db_conn();
$db_table = "tk_img_table";
$lid = $_SESSION['lid'];

?>




<!DOCTYPE html>
<html lang="ja">
<link href="css/bootstrap.min.css" rel="stylesheet">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>あれたべ</title>
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
            background: black;
        }

        img {
            width: 50%
        }

        #upload_btn {
            display: none;
        }
    </style>

</head>

<body id="main">

    <!-- ヘッダー -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="file_view.php">あれたべリスト</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン画面</a></div>
            </div>
        </nav>
    </header>
    <!-- ヘッダー -->

    <!-- コンテンツ -->
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>あれたべ</h1>
            <form method="POST" action="fileupload.php" enctype="multipart/form-data" accept="image/*;capture=camera">
            <input type="hidden" name="lid" value="<?= $lid?>" readonly>
            <p>また食べたいと思ったら写真で記録しましょう！</p>
            <p id="user_name">ようこそ<?= $lid ?>さん</p>
            <input type="file" name="upfile"> 
            誰の料理？→<input type="text" name="cook"><br>
            メニュー名は？→<input type="text" name="name"><br>
            <input type="submit" class="btn btn-success btn-sm" value="アップロード">
            </form>
        </div>
        <div id="photarea">
            <!-- ここにPHPの変数を記述 -->
        </div>
    </div>
    <!-- コンテンツ -->

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>