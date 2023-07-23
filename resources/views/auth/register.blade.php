@extends('common.common')

@section('title', '新規登録')
@section('content')
<div class="form">
  <h1>ユーザー登録フォーム</h1>
  <form class="" action="{{ route('user.signin') }}" method="post">
    {{ csrf_field() }}
    名前:<input type="text" name="name" size="30"><span>{{ $errors->first('name') }}</span><br />
    メールアドレス:<input type="text" name="email" size="30"><span>{{ $errors->first('email') }}</span><br />
    パスワード:<input type="password" name="password" size="30"><span>{{ $errors->first('password') }}</span><br />
    パスワード(確認):<input type="password" name="password_confirmation" size="30"><span>{{ $errors->first('password_confirmation') }}</span><br />
    <button type="submit" name="action" value="send">送信</button>
  </form>
</div>
@endsection
