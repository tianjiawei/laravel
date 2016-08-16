@extends("layouts.header")

@section('content')
<div class="panel col-md-10 col-md-offset-1">
    <div class="panel-heading">
        <h1>{{$article->title}} <small>Subtext for header</small></h1>
    </div>
    <div class="panel-body">
        <p class="lead">{{$article->body}}</p>
    </div>
</div>
@endsection