<?php
session_start();
require_once("funcs.php");
$name = $_POST["name"];
$cook = $_POST["cook"];
$lid = $_POST["lid"];

//[FileUploadCheck--START--]
if (isset($_FILES["upfile"] ) && $_FILES["upfile"]["error"] ==0 ) {

    //ファイル名を取得
    $file_name = $_FILES["upfile"]["name"];
    //一時保存パス
    $tmp_path = $_FILES["upfile"]["tmp_name"];
    //拡張子取得
    $extensions =pathinfo($file_name, PATHINFO_EXTENSION);
    
    //ユニークなファイル名を生成（名前が重複すると、意図するファイル弐たどり着けない
    $file_name = date("YmdHis").md5(session_id()).".".$extensions;

    // FileUpload [--Start--]
    $img="";//空の変数
    $file_dir_path = "upload/".$file_name;//ファイル移動先とファイル名

    if ( is_uploaded_file( $tmp_path ) ) {
        if ( move_uploaded_file( $tmp_path, $file_dir_path ) ) {

            chmod( $file_dir_path, 0644 );//ファイルの権限を設定（おまじない）
            //DB接続
            $pdo = db_conn();
            $sql = "INSERT INTO tk_img_table(id,lid,name, cook ,img) VALUE(null,:lid,:name,:cook ,:img)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':img',$file_name,PDO::PARAM_STR);
            $stmt->bindValue(':lid',$lid,PDO::PARAM_STR);
            $stmt->bindValue(':name',$name,PDO::PARAM_STR);
            $stmt->bindValue(':cook',$cook,PDO::PARAM_STR);
            $status = $stmt->execute();

            //データ登録処理後
            if($status == false){
                sql_error();
            }else{
                // $img = '<img src="'.$file_dir_path.'">';
                redirect('index.php');
            }

        } else {
            // echo "Error:アップロードできませんでした。";
        }
    }


}else{
    $img = "画像が送信されていません";
}
//[FileUploadCheck--END--] 



?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>アップロード画面サンプル</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <main>
    <!-- ヘッダー -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="file_view.php">写真アップロード</a></div>
            </div>
        </nav>
    </header>
    <!-- ヘッダー -->
    <?php echo $img; ?>
</main>
</body>
</html> -->