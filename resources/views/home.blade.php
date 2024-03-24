@extends('common.common')

@section('content')

  <div class="noteListViewArea">
    <h2 class="noteListViewAreaLabel">ノート一覧</h2>
    <div class="noteListViewAreaContainer content-width center">
      <ul class="noteListViewAreaContents">
        {{-- 未ログイン→ログインするとメモが表示されます 未登録→登録しているメモはありませんを表示 --}}
        <li class="noteListViewAreaContentLabel flex">
          <p class="noteListViewAreaContentTitleLabel">メモタイトル</p>
          <p class="noteListViewAreaContentUpdateTimeLabel">更新日時</p>
          <p class="noteListViewAreaContentIconLabel">編集/削除</p>
        </li>

        <li class="noteListViewAreaContent flex">
          <p class="noteListViewAreaContentTitle">メモタイトル</p>
          <p class="noteListViewAreaContentUpdateTime">2024-03-24</p>
          <div class="noteListViewAreaContentIconLink">
            <a href="#" class="textDecorationDisable">
              <i class="fa-sharp fa-regular fa-pen-to-square"></i>
            </a>
            <a href="#" class="textDecorationDisable">
              <i class="fa-regular fa-trash-can"></i>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>

@endsection
