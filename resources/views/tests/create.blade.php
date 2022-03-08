@extends('layout', ['title'=> 'Home'])

@section('page-content')
    <legend>Create Book</legend>
    <form method="post" action="{{route('tests.store')}}">
        @csrf
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" id="title" name="title" placeholder="Title">
                <div class="invalid-feedback">{{$errors->first('title')}}</div>
            </div>

        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Author</label>
            <div class="col-sm-10">
                <input type="text" class="form-control @error('author') is-invalid @enderror" value="{{old('author')}}" id="author" name="author" placeholder="Author">
                <div class="invalid-feedback">{{$errors->first('author')}}</div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>


@endsection



