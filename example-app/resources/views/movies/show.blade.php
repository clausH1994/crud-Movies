@extends('movies.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Movie</h2>
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('movies.index') }}">back</a>
    </div>
</div>

<div class="row">
    <div class="pull-left">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <img style="height:400px"  src="{{ $movie->image }}">
        </div>
    </div>
</div>
<div class="pull-right">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $movie->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description</strong>
            {{ $movie->description }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Release Year</strong>
            {{ $movie->releaseYear }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Director</strong>
            {{ $movie->director}}
        </div>
    </div>
</div>
</div>



@endsection