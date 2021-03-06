@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="" action="{{ route ('post.store') }}" methode="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for=""> title </label>
                <input type="text" class="form-control" name="title" placeholder="post title">
            </div>

            <div class="form-group">
                <label for=""> Category </label>
                <select name="category_id" id="" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category -> id}}"> {{ $category->name}} </option>

                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for=""> Content </label>
                <textarea name="content" rows="5" class="form-control" placeholder="post-content"></textarea>
             </div>
             <div class="form-group">
                <input type="submit" class="btn btn-primary" value="save">
             </div>
        </form>
    </div>

@endsection
