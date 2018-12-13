@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="" action="" methode="post">
            <div class="form-group">
                <label for=""> title </label>
                <input type="text" class="form-control" name="title" placeholder="post title">
            </div>

            <div class="form-group">
                <label for=""> content </label>
                <textarea name="content" rows="5" class="form-control" placeholder="post-content"></textarea>
             </div>
             <div class="form-group">
                <input type="submit" value="save">
             </div>
        </form>
    </div>

@endsection
