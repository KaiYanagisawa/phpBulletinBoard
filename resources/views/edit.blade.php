@extends('layout')

@section('content')
    <h1>bbs</h1>
    <p>{{ $message }}</p>
    {{ Form::model($article, ['route' => ['article.update', $article->id]]) }}
    <div class="form-group">
        {{ Form::label('content', 'Content:') }}
        {{ Form::text('content', null) }}
    </div>
    <div class="form-group">
        {{ Form::label('user_name', 'Name:') }}
        {{ Form::text('user_name', null) }}
    </div>
    <div class="form-group">
        {{ Form::submit('保存する', ['class' => 'btn-primary']) }}
        <a href={{ route('article.show', ['id' => $article->id]) }}>一覧に戻る</a>
    </div>
    {{ Form::close() }}
@endsection
