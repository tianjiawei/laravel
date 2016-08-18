@extends('layouts.header')

@section('content')
    <div class="container">
        <ul>
            @foreach ($articles as $article)
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a href="{{ url('article/'.$article->id) }}">
                                {{ $article->title }}
                            </a>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <p>{{ mb_substr(strip_tags($article->body),0,100) }}......</p>
                        <p><a href="{{url('article/'.$article->id)}}">阅读全文>></a></p>
                    </div>
                </div>
            @endforeach
        </ul>
    </div>
@endsection