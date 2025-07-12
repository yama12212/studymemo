@extends('common.common')

@section('content')

<article>
  <h2>メモの新規作成</h2>
  <h4>選択中のノート：{{ $currentSelectNote->title }}</h4>
  @include('common.error_messages')
  <div class="noteForm">
    <form method="post" action="{{ route('post.create') }}">
      @csrf
      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
      <input type="hidden" name="note_id" value="{{ $currentSelectNote->id }}">

      <p class="required">メモのタイトル</p>
      <input type="text" name="title" value="{{ old('title') }}" placeholder="例) CRUD処理について" class="noteFormTitle" id="noteFormTitleLabel" required>

      <p class="required">メモの内容</p>
      <textarea name="post" value="{{ old('post') }}" placeholder="例）CはCreate、RはRead、UはUpdate、DはDeleteを意味する" class="noteFormTextarea" id="postFormText" required cols="80" rows="12"></textarea>
      <button value="赤線を引く" id="drowRedUnderline"></button>
      <button value="リセット" id="reset"></button>

      <p class="required">テスト出題形式</p>
      <input type="radio" name="testQuestionFormatStatus" value="1" id="questionFormat_title" true>
      <label for="questionFormat_title">タイトルを隠す</label>
      <input type="radio" name="testQuestionFormatStatus" value="2" id="questionFormat_text" null>
      <label for="questionFormat_text">赤文字を隠す</label>

      <input type="submit" value="作成する" class="noteFormSubmit">
    </form>
  </div>
</article>

@endsection

@push('post_script')
  <script src="{{ mix('js/post_button.js') }}"></script>
@endpush
