@extends('common.common')

@section('content')

<article>
  <h2>{{ $post->title }}_閲覧</h2>
  <div class="postViewContainer">
    <div class="postViewTitle">
      <h3>メモのタイトル</h3>
      <p>{{ $post->title }}</p>
    </div>
    <div class="postViewText">
      <h3>メモ内容</h3>
      <p>{!! $post->post !!}</p>
    </div>
  </div>
</article>

<a href="{{ route('post.show', ['id' => $post->id]) }}">
  <div class="createButton">
    編集する<i class="fa-sharp fa-regular fa-pen-to-square"></i>
  </div>
</a>

@endsection
