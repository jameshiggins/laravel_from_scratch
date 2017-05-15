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

    <!--add a comment-->
    <hr>
    <div class="card">

        <div class="card-block"></div>
        <form method="POST" action="/posts/{{$post->id}}/comments">

            {{csrf_field()}}
            <!--<div class="form-group">-->
            <!--<label for="title">title</label>-->
            <!--<input type="text" name="title" class="form-control" id="title">-->
            <!--</div>-->
            <!--$if(count($errors))-->
            <div class="form-group">
                <label for="body">body</label>
                <textarea required class="form-control" placeholder="comment here" id="body" name="body"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add comment</button>
            <!--@endif-->
        </form>
    </div>
</div>
@endsection

