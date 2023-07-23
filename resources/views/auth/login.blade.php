@extends('common.common')

@section('title', 'ログイン')
@section('content')
<div class="form">
  <p>ログイン</p>
  <form action="{{ route('user.login') }}", method="post">
    {{ csrf_field() }}
    名前:<input type="text" name="name">
    メールアドレス:<input type="text" name="email">
    パスワード:<input type="password" name="password">
    <button type="submit" name="action" value="send">送信</button>
  </form>
</div>
@endsection
