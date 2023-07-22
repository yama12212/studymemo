<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <p>ログイン</p>
  <form action="{{ route('user.login') }}", method="post">
    {{ csrf_field() }}
    名前:<input type="text" name="name">
    メールアドレス:<input type="text" name="email">
    パスワード:<input type="password" name="password">
    <button type="submit" name="action" value="send">送信</button>
  </form>
</body>
</html>
