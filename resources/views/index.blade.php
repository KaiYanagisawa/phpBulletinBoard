@extends('layout')

@section('content')

    <h1>paiza bbs</h1>
    <p>{{ $message }}</p>
    <table class="table table-striped table-hover">
        @foreach ($articles as $article)
            <tr>
                <td>
                    <a href="{{ route('article.show', ['id' => $article->id]) }}">
                        {{ $article->content }},
                    </a>
                </td>
                <td>
                    {{ $article->user_name }}
                </td>
            </tr>
        @endforeach
    </table>

    <div>
        <a href={{ route('article.new') }}>新規投稿</a>
    </div>

@endsection
