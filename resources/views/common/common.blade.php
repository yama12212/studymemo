<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="勉強用のメモアプリです。テスト機能付きなのでアウトプットもできて勉強効率UP!!" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/common.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>

  <body>
    <header class="header">
      <div class="center content-width flex header-container">
        <a href="/" class="linkUnderline">
          <h2 class="header-app-name">
            Study Memo ~ <span>スタめも</span> ~
          </h2>
        </a>
        <div class="header-display-info">
          @if(Auth::check())
          <div class="flex header-user-login-state">
            <div class="header-display-menu">
              <ul class="header-display-menu-list">
                <a href="/note/new" class="linkUnderline">
                  <li>ノート作成</li>
                </a>
                <a href="/post/new" class="linkUnderline">
                  <li>メモ作成</li>
                </a>
              </ul>
            </div>
            <div class="flex header-display-user">
              <p class="headerDisplayUserName">{{ \Auth::user()->name }}</p>
              {{ Form::open([ 'route' => [ 'user.logout' ], 'method' => 'post', 'class' => 'header-logout-btn']) }}
                @csrf
                <span class="tooltip">
                  <span class="tooltip-text">ログアウト</span>
                  {{ Form::button('<i class="fa-solid fa-right-from-bracket"></i>', ['type' => 'submit']) }}
                </span>
              {{ Form::close() }}
            </div>
          </div>
          @else
          <div class="header-user-logout-state">
            <a href="{{ route('user.signin') }}" class="header-user-signin linkUnderline">新規登録</a>
            <a href="{{ route('user.login') }}" class="header-user-login linkUnderline">ログイン</a>
          </div>
          @endif
        </div>
      </div>
    </header>

    <main>
      <nav class="firstViewGlobalNav">
        <ul class="firstViewGlobalNavMenu flex">
          <li class="firstViewGlovalNavLink">
            <a href="/" class="linkUnderline">ノート一覧</a>
          </li class="firstViewGlovalNavLink">
          <li>
            <a href="/post/new" class="linkUnderline">メモの新規作成</a>
          </li>
          <li class="firstViewGlovalNavLink">
            <a href="#" class="linkUnderline">テスト出題</a>
          </li>
          <li class="firstViewGlovalNavLink">
            <a href="#" class="linkUnderline">記録</a>
          </li>
          <li class="firstViewGlovalNavLink">
            <a href="#" class="linkUnderline">マニュアル</a>
          </li>
        </ul>
      </nav>

      <section class="container content-width center">
        @yield('content')
      </section>
    </main>

    <footer class="footer">
      <div class="content-width center footer-container">
        <p class="footer-text">Study Memo ~ スタめも ~ ©︎2023</p>
      </div>
    </footer>

    <script src="//cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="{{ asset('js/ckeditor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
