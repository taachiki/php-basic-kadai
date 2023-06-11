<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHPの勉強</title>
</head>
<body>
<h2>入力内容を確認してください。</h2>
<p>お名前 ; <?php echo $_POST['user_name']; ?></p>
<p>Eメールアドレス : <?php echo $_POST['user_email']; ?></p>
<p>性別 : <?php echo $_POST['user_gender']; ?></p>
<p>お問合せ : <?php echo $_POST['category']; ?></p>
<p>お問合せ内容 : <?php echo $_POST['message']; ?></p>
</body>
</html>