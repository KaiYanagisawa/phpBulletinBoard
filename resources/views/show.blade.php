@extends('layout')

@section('content')


    <h1>paiza bbs</h1>
    <p>{{ $message }}</p>
    <p>{{ $article->content }}</p>
    <p>{{ $article->user_name }}</p>
    <p>
        <a href={{ route('article.list') }} class="btn btn-outline-primary">一覧に戻る</a>
    </p>
    <div>
        {{ Form::open(['method' => 'delete', 'route' => ['article.delete', $article->id]]) }}
        {{ Form::submit('削除', ['class' => 'btn btn-ontline-secondary']) }}
        {{ Form::close() }}
    </div>

@endsection
