@extends('common.common')

@section('content')

<article class="noteShowPage">
  <h2>ノートを編集する</h2>
  @include('common.error_messages')
  <div class="noteForm">
    <form method="post" action="{{ route('note.edit', ['id' => $note->id]) }}">
      @method('PUT')
      @csrf
      <p class="noteFormTitleLabel required">ノートのタイトル</p>
      <input type="hidden", name="user_id", value="{{ Auth::user()->id }}">
      <input type="text", name="title", value="{{ old('title', $note->title) }}", placeholder="例) Laravelまとめ", class="noteFormTitle", required>
      <input type="submit", class="noteFormSubmit">
    </form>
  </div>
</article>

@endsection
