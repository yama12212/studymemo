@extends('common.common')

@section('content')

<article class="noteShowPage">
  <h2>ノートを編集する</h2>
  <div class="noteForm">
    {{ Form::open(['route' => ['note.edit', 'id' => $note->id],'method' => 'post']) }}
      @method('PUT')
      @csrf
      <p class="noteFormTitleLabel required">ノートのタイトル</p>
      {{ Form::hidden('user_id', Auth::user()->id) }}
      {{ Form::text('title', old('title', $note->title), ['placeholder' => '例) Laravelまとめ', 'class' => 'noteFormTitle', 'required' => 'required']) }}
      {{ Form::submit('編集する', ['class' => 'noteFormSubmit']) }}
    {{ Form::close() }}
  </div>
</article>

@endsection
