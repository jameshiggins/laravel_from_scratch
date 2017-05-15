@extends('layout')

@section('content')
<hr>
<div class="row col-sm-8">
    <form method="POST" action="/posts">

        {{csrf_field()}}
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>
        <div class="form-group">
            <label for="body">body</label>
            <textarea class="form-control" id="body" name="body"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">publish</button>
        @if(count($errors))
            @include('partials.errors')
        @endif
    </form>

</div>
@endsection