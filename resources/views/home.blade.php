<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    こんにちは
    @if(Auth::check())
    {{ \Auth::user()->name }}さん
    <form action="{{ route('user.logout') }}" method="post">
      @csrf
      <input type="submit" value="ログアウト">
    </form>
    @else
    ゲストさん <br />
    <a href="{{ route('user.signin') }}">会員登録</a>
    <a href="{{ route('user.login') }}">ログイン</a>
    @endif

  </body>
</html>
