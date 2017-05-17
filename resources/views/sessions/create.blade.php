@extends('layout')

@section('content')
    <div class="col-sm-8 blog-main">
        <h2>sign in</h2>
        <form action="/login" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">
                email
                </label>
                <input type="text" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="text" name="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            @if(count($errors))
                @include('partials.errors')
            @endif
        </form>

    </div>
@endsection
