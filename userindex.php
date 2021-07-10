<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- <div class="navbar-header"><a class="navbar-brand" href="userselect.php">データ一覧</a></div> -->
                <div class="navbar-header"><a class="navbar-brand" href="login.php">登録済の方はこちら</a></div>
            </div>

        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="userinsert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>あれたべ 新規ユーザー登録</legend>
                <label>id名：<input type="text" name="lid"></label><br>
                <label>パスワード：<input type="text" name="lpw"></label><br>
                <input type="submit" value="新規登録">
            </fieldset>
        </div>
    </form>
</body>

</html>
