@extends('common.common')

@section('title', 'ログイン')
@section('content')
<div class="flex form-container">
  <div class="content-width center">
    <div class="center form">
      <h2 class="form-title">ログイン</h2>
      <form class="form-input" action="{{ route('user.login') }}", method="post">
        {{ csrf_field() }}
        名前:<input type="text" name="name"><br>
        メールアドレス:<input type="text" name="email"><br>
        パスワード:<input type="password" name="password"><br>
        <button type="submit" name="action" value="send">送信</button>
      </form>
    </div>
  </div>
</div>
@endsection
