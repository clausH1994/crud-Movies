@extends('movies.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Movie</h2>
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('movies.index') }}">back</a>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops</strong> there were some problem with your input <br> <br>
        <ul>
            @foreach ($errors as $error)
            {
                <li>{{ $error }}</li>
            }
                
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('movies.update', $movie->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Image link:</strong>
            <input type="text" name="image" value="{{ $movie->image }}" class="form-control" placeholder="image link">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Name:</strong>
            <input type="text" name="name" value="{{ $movie->name }}" class="form-control" placeholder="name">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Description:</strong>
            <textarea style="height:150px" name="description" class="form-control" placeholder="description">{{ $movie->description }}</textarea>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Release Year:</strong>
            <input type="text" name="releaseYear" value="{{ $movie->releaseYear }}" class="form-control" placeholder="Release Year">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Director:</strong>
            <input type="text" name="director" value="{{ $movie->director }}" class="form-control" placeholder="director">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
           <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection