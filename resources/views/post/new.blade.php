@extends('common.common')

@section('content')

<article>
  <h2>メモの新規作成</h2>
  @include('common.error_messages')
  <div class="noteForm">
    {{ Form::open(['route' => ['post.create', 'method' => 'post']]) }}
      @csrf
      {{ Form::hidden('user_id', Auth::user()->id) }}

      {{ Form::label('selectNote', '登録するノートを選択してください', ['class' => 'required']) }}
      {{ Form::select('note_id', $currentUserNotesCollect, null, ['id' => 'selectNote']) }}

      {{ Form::label('noteFormTitleLabel', 'メモのタイトル', ['class' => 'required']) }}
      {{ Form::text('title', old('title'), ['placeholder' => '例) CRUD処理について', 'class' => 'noteFormTitle', 'id' => 'noteFormTitleLabel','required' => 'required']) }}

      {{ Form::label('noteFormTextareaLabel', 'メモ内容', ['class' => 'required']) }}
      {{ Form::button('赤線を引く', ['id' => 'drowRedUnderline']) }}
      {{ Form::button('リセット', ['id' => 'reset']) }}
      {{ Form::textarea('post', old('post'), ['placeholder' => '例）CはCreate、RはRead、UはUpdate、DはDeleteを意味する', 'class' => 'noteFormTextarea ckeditor', 'id' => 'noteFormTextareaLabel', 'required' => 'required']) }}
      {{ Form::submit('作成する', ['class' => 'noteFormSubmit']) }}
    {{ Form::close() }}
  </div>
</article>

@endsection
