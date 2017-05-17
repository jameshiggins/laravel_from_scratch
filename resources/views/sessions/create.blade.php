@extends('layout')

@section('content')

    <div class="col-sm-8">
        <form method="POST" action="/register">

            {{csrf_field()}}
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="email"><email></email></label>
                <input type="text" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="text" name="password" class="form-control" id="password">
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
            @if(count($errors))
                @include('partials.errors')
            @endif
        </form>
    </div>

@endsection
