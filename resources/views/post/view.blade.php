@extends('common.common')

@section('content')

<article>
  <h2>{{ $post->title }}_閲覧</h2>
  <div class="noteForm">
    {{ Form::open() }}
      {{ Form::label('selectNote', '選択しているノート') }}
      {{ Form::select('note_id', ['リレーションから取得する'], null, ['id' => 'selectNote', 'readonly' => true]) }}

      {{ Form::label('noteFormTitleLabel', 'メモのタイトル') }}
      {{ Form::text('title', $post->title, ['class' => 'noteFormTitle', 'id' => 'noteFormTitleLabel','readonly' => true]) }}

      {{ Form::label('noteFormTextareaLabel', 'メモ内容') }}
      {{ Form::textarea('post', $post->post, ['class' => 'noteFormTextarea', 'id' => 'noteFormTextareaLabel', 'readonly' => true]) }}
    {{ Form::close() }}
  </div>
</article>

<a href="#">
  <div class="createButton">
    編集する<i class="fa-sharp fa-regular fa-pen-to-square"></i>
  </div>
</a>

@endsection
