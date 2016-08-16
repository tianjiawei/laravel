@extends('layouts.header')

@section('content')
<div id="container center-block">
    <ul>
        @foreach ($articles as $article)
            <div class="panel col-md-10 col-md-offset-1">
                <div class="panel-heading">
                    <a href="{{ url('article/'.$article->id) }}">
                        <h3>{{ $article->title }}</h3>
                    </a>
                </div>
                <div class="panel-body">
                    <p>{{ $article->body }}</p>
                </div>
            </div>
        @endforeach
    </ul>
</div>
@endsection