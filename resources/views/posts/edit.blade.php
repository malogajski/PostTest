@extends('layouts.app')
@section('content')
    <div class="card">
        <form action="{{route('posts.update', $post->id)}}" method="post">
            @csrf
            @method('PATCH')
            <div class="card-header">Create new post</div>
            <div class="card-body">

                <label for="title">Title [{{$post->id}}]</label>
                <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">

                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" value="{{$post->description}}">
            </div>
            <div class="card-footer">
                <button class="btn btn-success m-3">Save</button>
            </div>
        </form>
    </div>
@endsection
