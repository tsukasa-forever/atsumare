<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>MokMok もくもくしよう</title>
    <link rel="shortcut icon" href="favicon.ico" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- jQuery読み込み -->
</head>
<body>
<nav class="navbar" style=";border-radius: 0;margin: 0;background: #F57C00">
    <div class="container-fluid container">
        <div class="navbar-header">
            <a class="navbar-brand" style="color: white;font-weight:800;font-size: 24px" href="/">MokMok</a>
        </div>
        <div class="collapse navbar-collapse" id="navigation">
            <?php if (isset($current_user)): ?>
            <p class="navbar-text navbar-right"><a href="https://slack.com/oauth/authorize?scope=identity.basic identity.team identity.avatar&client_id=<%= @client_id %>&redirect_uri=https://mokmok-aldytsukasa.c9users.io/signin_with_slack" style="color: white!important;">違うアカウントでログインする</a></a></p>
            <p class="navbar-text navbar-right" style="color: white"><?= $current_user_name ?> さんこんにちは</p>
            <a href="/users/mypage" class="navbar-text navbar-right dropdown" style="color: white"><img class="nav_icon" src="<?= $current_user_image ?>"></i></a>
            <?php else: ?>
            <p class="navbar-text navbar-right"><a href="https://slack.com/oauth/authorize?scope=identity.basic identity.team identity.avatar&client_id=<%= @client_id %>&redirect_uri=https://mokmok-aldytsukasa.c9users.io/signin_with_slack" style="color: white!important;">ログインする</a></p>
            <a href="/users/mypage" class="navbar-text navbar-right dropdown" style="color: white"> <i class="fas fa-user-alt"></i></a>
            <?php endif; ?>
        </div>
    </div>
</nav>
<div style="padding-bottom: 200px">
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
</body>
<style>
    body {
        font-family: "YakuHanJPsLight", "proxima-nova", "a-otf-midashi-go-mb31-pr6n", -apple-system, BlinkMacSystemFont, "Avenir Next", "Avenir", "Yu Gothic Medium", "游ゴシック Medium", YuGothic, "游ゴシック体", "ヒラギノ角ゴ ProN W3", "Hiragino Kaku Gothic ProN", "メイリオ", "Meiryo", sans-serif;
    }
    .nav_icon {
        height: 120%;
        width: auto;
    }
</style>
</html>
