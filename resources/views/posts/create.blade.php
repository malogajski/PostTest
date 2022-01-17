@extends('layouts.app')
@section('content')
    <div class="card">
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            <div class="card-header">Create new post</div>
            <div class="card-body">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">

                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control">
            </div>
            <card-footer>
                <button class="btn btn-success m-3">Save</button>
            </card-footer>
        </form>
    </div>
@endsection
