@extends('layouts.app')

@section('content')

<div class="container">
  <a href="../home" type="button" style="margin-right:15px" class="btn btn-danger">Go back</a>
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
        <div class="text-center"> <img src="{{asset('image/'.$student->picture)}}" width="160px" class="rounded" height="130px" /></div>
  <br>
  <br>
  <br>
        <table class="table table-stripped">
          <tr>
            <td>ID</td>
            <td>firstname</td>
            <td>lastname</td>
            <td>class</td>
            <td>Creater</td>
            <td>description</td>
          </tr>
          <tr>
          <td>{{$student->id}}</td>
          <td>{{$student->firstName}}</td>
          <td>{{$student->lastName}}</td>
          <td>{{$student->class}}</td>
          <td>{{$student->user->firstName}}</td>
          <td>{{$student->description}}</td>
          </tr>
        </table>

        <br>
        <br>
      <div class="col-3"></div>
    </div>
  </div>
   
  @endsection 

  
