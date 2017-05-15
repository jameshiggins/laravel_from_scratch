@extends('layout')

@section('content')
<div class="col-sm-8 blog-main">

    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <h4>comments</h4>
    <div class="comments">
        <ul class="list-group">
        @foreach ($post->comments as $comment)

            <div class="list-group-item">
                <strong>{{$comment->created_at->diffForHumans() }}</strong><br>
                {{$comment->body}}
            </div>
        </ul>

        @endforeach
    </div>
</div>
@endsection

