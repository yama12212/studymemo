@extends('common.common')

@section('content')

<article class="postView">
  <h2 class="postViewTitle">{{ $post->title }}_閲覧</h2>
  <div class="postViewContent">
    <h3>メモ内容</h3>
    <p id="postViewText">{{ $post->post }}</p>
    {{-- jsで特定の値を<div class="termsToStudy"></div>に置き換える --}}
  </div>
</article>

<a href="{{ route('post.show', ['id' => $post->id]) }}">
  <div class="createButton">
    編集する<i class="fa-sharp fa-regular fa-pen-to-square"></i>
  </div>
</a>

@endsection
