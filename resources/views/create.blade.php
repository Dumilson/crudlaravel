@extends('template')

@section('content')
  <div class="row">
      <div class="col-lg 12 margin-tb">
        <div class="pull-left">
            <h2>CRUD simple with PHP 7</h2>
        </div>
      </div>
  </div>


  @if ($errors->any())
    <div class="alert alert-success">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>   
    </div>
  @endif

  <div class="row">
      <form method="post" action="{{route('student.store')}}">
          @csrf
          <div class="col-sm-4">
              <div class="left">
                <strong>Name</strong>
                  <input type="text" name="name" id="" class="form-control" placeholder="Name">
              </div>

              <div class="left">
                <strong>Phone</strong>
                  <input type="text" name="phone" id="" class="form-control" placeholder="Phone">
              </div>

              <div class="left">
                <strong>Address</strong>
                  <input type="text" name="address" id="" class="form-control" placeholder="Address">
              </div>
              <div class="left">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>
          </div>
      </form>
  </div>
@endsection