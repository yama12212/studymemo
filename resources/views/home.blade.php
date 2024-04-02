@extends('common.common')

@section('content')

  @guest
  <div class="noteListGuestView">
    <p class="noteListGuestText">ログインすると登録したノートが表示されます</p>
  </div>
  @endguest

  @auth
  <div class="noteListViewArea">
    <h2 class="noteListViewAreaLabel">ノート一覧</h2>
    <div class="noteListViewAreaContainer content-width center">
      <ul class="noteListViewAreaContents">
        {{-- 未ログイン→ログインするとメモが表示されます 未登録→登録しているメモはありませんを表示 --}}
        <li class="noteListViewAreaContentLabel flex">
          <p class="noteListViewAreaContentTitleLabel">ノートタイトル</p>
          <p class="noteListViewAreaContentUpdateTimeLabel">更新日時</p>
          <p class="noteListViewAreaContentIconLabel">編集/削除</p>
        </li>

        @foreach($notes as $note)
        @if($note == null)
          <p>登録しているメモはありません</p>
        @else
        <li class="noteListViewAreaContent flex">
          <a href="#" class="noteListViewAreaContentTitle">{{ $note->title }}</a>
          <p class="noteListViewAreaContentUpdateTime">{{ date('Y/m/d', strtotime($note->updated_at)) }}</p>
          <div class="noteListViewAreaContentIconLink">
            <a href="/note/{{ $note->id }}/show" class="textDecorationDisable">
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
    <div class="noteCreateButton">
      ノートを新規作成<i class="fa-sharp fa-regular fa-pen-to-square"></i>
    </div>
  </a>
  @endauth

@endsection
