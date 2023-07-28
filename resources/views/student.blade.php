@extends('app')
@section('content')
@if(Session::has('msg'))
        <div class="alert alert-success">
            {{ Session::get('msg') }}
            @php
                Session::forget('msg');
            @endphp
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addnew">
    Add student information..
  </button>

  <table class="table-primary align-middle">
    <thead>

      <tr calss="table-primary" >
        <th scope="col-1">id</th>
        <th scope="col-1">Firstname</th>
        <th scope="col-1">Lastname</th>
        <th scope="col-1">Email</th>
        <th scope="col-1">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr calss="table-primary">

        @if (!isset($student))
        @foreach ($students as $student )
        <th scope="col">{{$student->id}}</th>
        <th scope="col">{{$student->firstname}}</th>
        <th scope="col">{{$student->lastname}}</th>
        <th scope="col">{{$student->email}}</th>
        <th scope="col">
            <a href="#edit{{$student->id}}" data-bs-toggle="modal" class="btn btn-success"><i class='fa fa-edit'></i> Edit</a>
            <a href="#delete{{$student->id}}" data-bs-toggle="modal" class="btn btn-success"><i class='fa fa-edit'></i> Delete</a>
        </th>
        @include('modal')
      </tr>
      @endforeach

      @endif


    </tbody>
  </table>
  @endsection
