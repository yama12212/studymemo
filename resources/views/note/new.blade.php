@extends('common.common')

@section('content')

<article class="noteCreatePage">
  <h2>ノートを新規作成する</h2>
  @include('common.error_messages')
  <div class="noteForm">
    {{ Form::open(['route' => ['note.create', 'method' => 'post']]) }}
      @csrf
      <p class="noteFormTitleLabel required">ノートのタイトル</p>
      {{ Form::hidden('user_id', Auth::user()->id) }}
      {{ Form::text('title', old('title'), ['placeholder' => '例) Laravelまとめ', 'class' => 'noteFormTitle', 'required' => 'required']) }}
      {{ Form::submit('作成する', ['class' => 'noteFormSubmit']) }}
    {{ Form::close() }}
  </div>
</article>

@endsection
