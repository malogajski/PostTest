@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{route('posts.create')}}" class="btn btn-primary">Add</a>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id ?? '' }}</td>
                        <td>{{ $post->title ?? '' }}</td>
                        <td>{{ $post->description ?? '' }}</td>
                        <td>{{ $post->created_at->diffForHumans() }}</td>
                        <td>{{ $post->updated_at->diffForHumans() }}</td>
                        <td>
                            <a href="{{route('posts.edit', $post->id)}}" class="btn btn-sm btn-outline-secondary">Edit</a>
                            <a href="{{route('posts.show', $post->id)}}" class="btn btn-sm btn-outline-info">Show</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
