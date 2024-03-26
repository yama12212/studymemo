@extends('common.common')

@section('content')

<article class="noteCreatePage">
  <h2>ノートを新規作成する</h2>
  <div class="noteCreateForm">
    {{ Form::open(['route' => ['note.create', 'method' => 'post']]) }}
      @csrf
      <p class="noteCreateFormTitleLabel required">ノートのタイトル</p>
      {{ Form::text('title', old('title'), ['placeholder' => '例) Laravelまとめ', 'class' => 'noteCreateFormTitle', 'required' => 'required']) }}
      {{ Form::submit('作成する', ['class' => 'noteCreateFormSubmit']) }}
    {{ Form::close() }}
  </div>
</article>

@endsection
