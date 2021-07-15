@extends('template')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD simple with PHP 7</h2>
            </div>
        </div>
    </div>

    <div class="row" align="left">
        <div class="pull-right">
            <a href="{{route('student.create')}}" class="btn btn-success">New student</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p> {{ $message }} </p>   
        </div>
    @endif

    <table class="table table-light table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th width="200px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td> {{$student->id}} </td>
                    <td> {{$student->name}} </td>
                    <td> {{$student->phone}} </td>
                    <td> {{$student->address}} </td>
                    <td>
                        <form action="{{ route('student.destroy',$student->id)}}" method="post">
                            <a href="{{route('student.edit',$student->id)}}" class="btn btn-primary">Edit</a>
                            {{@csrf_field()}}
                            {{@method_field('DELETE')}}
                            <input type="submit" value="Delete" class="btn btn-danger delete-user">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection