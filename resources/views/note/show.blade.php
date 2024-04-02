@extends('common.common')

@section('content')

<article class="noteShowPage">
  <h2>ノートを編集する</h2>
  <div class="noteShowForm">
    {{-- {{ Form::open(['route' => ['note.create', 'method' => 'post']]) }}
      @csrf
      <p class="noteShowFormTitleLabel required">ノートのタイトル</p>
      {{ Form::hidden('user_id', Auth::user()->id) }}
      {{ Form::text('title', old('title'), ['placeholder' => '例) Laravelまとめ', 'class' => 'noteCreateFormTitle', 'required' => 'required']) }}
      {{ Form::submit('編集する', ['class' => 'noteShowFormSubmit']) }}
    {{ Form::close() }} --}}
  </div>
</article>

@endsection
