@extends('common.common')

@section('content')

<article>
  <h2>メモの新規作成</h2>
  @include('common.error_messages')
  <div class="noteForm">
    {{ Form::open(['route' => ['post.create', 'method' => 'post']]) }}
      @csrf
      {{ Form::hidden('user_id', Auth::user()->id) }}

      <p class="required">登録するノートを選択してください</p>
      {{ Form::select('note_id', $currentUserNotesCollect, null, ['id' => 'selectNote']) }}

      <p class="required">メモのタイトル</p>
      {{ Form::text('title', old('title'), ['placeholder' => '例) CRUD処理について', 'class' => 'noteFormTitle', 'id' => 'noteFormTitleLabel','required' => 'required']) }}

      <p class="required">メモの内容</p>
      {{ Form::textarea('post', old('post'), ['placeholder' => '例）CはCreate、RはRead、UはUpdate、DはDeleteを意味する', 'class' => 'noteFormTextarea', 'id' => 'noteFormTextareaLabel', 'required' => 'required']) }}
      {{ Form::button('赤線を引く', ['id' => 'drowRedUnderline']) }}
      {{ Form::button('リセット', ['id' => 'reset']) }}

      <p class="required">テスト出題形式</p>
      {{ Form::radio('testQuestionFormatStatus', '1', true, ['id' => 'questionFormat_title']) }}
      {{ Form::label('questionFormat_title', 'タイトルを隠す') }}
      {{ Form::radio('testQuestionFormatStatus', '2', null, ['id' => 'questionFormat_text']) }}
      {{ Form::label('questionFormat_text', '赤文字を隠す') }}

      {{ Form::submit('作成する', ['class' => 'noteFormSubmit']) }}
    {{ Form::close() }}
  </div>
</article>

@endsection
