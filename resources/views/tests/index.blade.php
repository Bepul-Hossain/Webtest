@extends('layout', ['title'=> 'Home'])

@section('page-content')
   
    <div class="col-lg-2">
        <p class="text-right"><a href="{{route('tests.create')}}" class="btn btn-primary">New Book</a></p>
    </div>
    <table class="table table-striped table-bordered">
        <th>ID</th>
        <th>title</th>
        <th>author</th>
        
        @foreach($tests as $test)
            <tr>
                <td>{{$test->id}}</td>
                <td>{{$test->title}}</td>
                <td>{{$test->author}}</td>
            </tr>
        @endforeach
        </table>
        {{ $tests->withQueryString()->links() }}
@endsection
