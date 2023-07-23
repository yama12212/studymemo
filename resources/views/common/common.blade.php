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
      <div>

      </div>
    </header>

    <main>
      <div class="container">
        @yield('content')
      </div>
    </main>

    <footer>

    </footer>
  </body>
</html>
