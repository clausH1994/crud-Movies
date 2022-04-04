@extends('movies.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Movies</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('movies.create') }}">Create New Movie</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Release Year</th>
        <th>Director</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($movies as $movie)
    <tr>
        <td>{{ $movie->id }}</td>
        <td><img style="width: 100px" src="{{ $movie->image }}"></td>
        <td>{{ $movie->name }}</td>
        <td>{{ $movie->description }}</td>
        <td>{{ $movie->releaseYear }}</td>
        <td>{{ $movie->director }}</td>
        <td>
        <form action="{{ route('movies.destroy' ,$movie->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('movies.show',$movie->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('movies.edit',$movie->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn danger">Delete</button>
        </form>
    </td>
    </tr>    
    @endforeach
    
</table>
{{ $movies->links() }}
    
@endsection