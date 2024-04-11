@extends('common.common')

@section('content')

  @guest
  <div class="listGuestView">
    <p class="listGuestText">ログインすると登録したノートが表示されます</p>
  </div>
  @endguest

  @auth
  <div class="listViewArea">
    <h2 class="listViewAreaLabel">ノート一覧</h2>
    <div class="listViewAreaContainer content-width center">
      <ul class="listViewAreaContents">
        {{-- 未ログイン→ログインするとメモが表示されます 未登録→登録しているメモはありませんを表示 --}}
        <li class="listViewAreaContentLabel flex">
          <p class="listViewAreaContentTitleLabel">ノートタイトル</p>
          <p class="listViewAreaContentUpdateTimeLabel">更新日時</p>
          <p class="listViewAreaContentIconLabel">編集/削除</p>
        </li>

        @foreach($notes as $note)
        @if($note == null)
          <p>登録しているノートはありません</p>
        @else
        <li class="listViewAreaContent flex listHover">
          <a href="/post/index/{{ $note->id }}" class="listViewAreaContentTitle">{{ $note->title }}</a>
          <p class="listViewAreaContentUpdateTime">{{ date('Y/m/d', strtotime($note->updated_at)) }}</p>
          <div class="listViewAreaContentIconLink">
            <a href="/note/show/{{ $note->id }}" class="textDecorationDisable">
              <i class="fa-sharp fa-regular fa-pen-to-square"></i>
            </a>
            <a href="#" class="textDecorationDisable">
              <i class="fa-regular fa-trash-can"></i>
            </a>
          </div>
        </li>
        @endif
        @endforeach
      </ul>
    </div>
  </div>

  <a href="/note/new">
    <div class="createButton">
      ノートを新規作成<i class="fa-sharp fa-regular fa-pen-to-square"></i>
    </div>
  </a>
  @endauth

@endsection
