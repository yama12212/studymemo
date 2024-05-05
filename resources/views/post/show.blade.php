@extends('common.common')

@section('content')

<article>
  <h2>{{ $post->title }}_編集</h2>
  @include('common.error_messages')
  <div class="noteForm">
    {{ Form::open(['route' => ['post.edit', 'id' => $post->id],'method' => 'post']) }}
      @method('PUT')
      @csrf
      {{ Form::hidden('user_id', Auth::user()->id) }}

      {{ Form::label('selectNote', '選択しているノート') }}
      {{ Form::select('note_id', $noteTitle, null, ['id' => 'selectNote', 'readonly' => 'true']) }}
      {{ Form::hidden('note_id', $noteId) }}

      {{ Form::label('noteFormTitleLabel', 'メモのタイトル') }}
      {{ Form::text('title', $post->title, ['placeholder' => '例) CRUD処理について', 'class' => 'noteFormTitle', 'id' => 'noteFormTitleLabel']) }}

      {{ Form::label('noteFormTextareaLabel', 'メモ内容') }}
      {{ Form::textarea('post', $post->post, ['placeholder' => '例）CはCreate、RはRead、UはUpdate、DはDeleteを意味する', 'class' => 'noteFormTextarea', 'id' => 'noteFormTextareaLabel']) }}

      {{ Form::submit('編集する', ['class' => 'noteFormSubmit']) }}
    {{ Form::close() }}
  </div>
</article>

@endsection
