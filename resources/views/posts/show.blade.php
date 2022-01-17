@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            Show Post
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('posts.index') }}">
                        Back
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th>#</th>
                        <td>{{ $post->id }}</td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td>{{ $post->title }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $post->description }}</td>
                    </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-secondary" href="{{ route('posts.index') }}">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
