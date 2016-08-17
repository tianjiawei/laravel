@extends('layouts.header')

@section('content')
<div id="content">
    <ul>
        @foreach ($articles as $article)
            <div class="panel col-xs-offset-9">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a href="{{ url('article/'.$article->id) }}">
                            {{ $article->title }}
                        </a>
                    </h3>
                </div>
                <div class="panel-body">
                    <p>{{ $article->body }}</p>
                </div>
            </div>
        @endforeach
    </ul>
</div>
@endsection