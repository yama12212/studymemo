@extends('common.common')

@section('content')

<article class="noteCreatePage">
  <h2>ノートを新規作成する</h2>
  @include('common.error_messages')
  <div class="noteForm">
    <form method="post", action="{{ route('note.create') }}">
      @csrf
      <p class="noteFormTitleLabel required">ノートのタイトル</p>
      <input type="hidden", name="user_id", value="{{ Auth::user()->id }}">
      <input type="text", name="title", value="{{ old('title') }}", placeholder="例) Laravelまとめ", class="noteFormTitle", required>
      <input type="submit", value="作成する", class="noteFormSubmit">
    </form>
  </div>
</article>

@endsection
