@extends('common.common')

@section('content')

@push('post_button')
  <script src="{{ mix('js/post_button.js') }}"></script>
@endpush

<article>
  <h2>{{ $post->title }}_編集</h2>
  @include('common.error_messages')
  <div class="noteForm">
    {{ Form::open(['route' => ['post.edit', 'id' => $post->id],'method' => 'post']) }}
      @method('PUT')
      @csrf
      {{ Form::hidden('user_id', Auth::user()->id) }}

      <p class="required">選択しているノート</p>
      {{ Form::select('note_id', $noteTitle, null, ['id' => 'selectNote', 'readonly' => 'true']) }}
      {{ Form::hidden('note_id', $noteId) }}

      <p class="required">メモのタイトル</p>
      {{ Form::text('title', $post->title, ['placeholder' => '例) CRUD処理について', 'class' => 'noteFormTitle', 'id' => 'noteFormTitleLabel']) }}

      <p class="required">メモの内容</p>
      {{ Form::textarea('post', $post->post, ['placeholder' => '例）CはCreate、RはRead、UはUpdate、DはDeleteを意味する', 'class' => 'noteFormTextarea', 'id' => 'postFormText', 'required' => 'required']) }}
      {{ Form::button('文字を赤くする', ['id' => 'makeTextRed']) }}
      {{ Form::button('タグをリセット', ['id' => 'makeTextRedReset']) }}

      <p class="required">テスト出題形式</p>
      {{ Form::radio('testQuestionFormatStatus', '1', true, ['id' => 'questionFormat_title']) }}
      {{ Form::label('questionFormat_title', 'タイトルを隠す') }}
      {{ Form::radio('testQuestionFormatStatus', '2', null, ['id' => 'questionFormat_text']) }}
      {{ Form::label('questionFormat_text', '赤文字を隠す') }}

      {{ Form::submit('更新する', ['class' => 'noteFormSubmit']) }}
    {{ Form::close() }}
  </div>
</article>

@endsection
