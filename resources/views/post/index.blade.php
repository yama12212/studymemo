@extends('common.common')

@section('content')
  {{-- メモ閲覧と編集ページを作る閲覧ページで赤シートを追加 --}}
  <h2>ノートの名前 メモ一覧</h2>
  <div class="postListViewAreaContainer content-width center">
    <ul class="postListViewAreaContents">
      <li class="postListViewAreaContentLabel flex">
        <p class="postListViewAreaContentTitleLabel">メモタイトル</p>
        <p class="postListViewAreaContentUpdateTimeLabel">更新日時</p>
        <p class="postListViewAreaContentIconLabel">閲覧/編集/削除</p>
      </li>

      @foreach($posts as $post)
      @if($post == null)
        <p>登録しているメモはありません</p>
      @else
      <li class="postListViewAreaContent flex">
        <a href="#" class="postListViewAreaContentTitle">{{ $post->title }}</a>
        <p class="postListViewAreaContentUpdateTime">{{ date('Y/m/d', strtotime($post->updated_at)) }}</p>
        <div class="postListViewAreaContentIconLink">
          <a href="#" class="textDecorationDisable">
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

  <a href="/post/new">
    <div class="postCreateButton">
      メモを新規作成<i class="fa-sharp fa-regular fa-pen-to-square"></i>
    </div>
  </a>
@endsection
