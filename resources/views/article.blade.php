@extends('layouts.header')

@section('content')
    <div class="container">
        <h1>
            {{ $article->title }}
        </h1>
        <br/>
        <p class="lead">
            {!! EndaEditor::MarkDecode($article->body) !!}
        </p>
    </div>
@endsection