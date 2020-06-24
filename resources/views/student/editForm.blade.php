
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
      
    <form method="POST" action="{{route('student.update',$student->id)}}" >
               @csrf
              @method('PUT')
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputfirstname4">firstname</label>
                        <input type="text" class="form-control" value="{{$student->firstName}}" name="firstname" placeholder="firstname">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">lastname</label>
                          <input type="text" class="form-control" value="{{$student->lastName}}"  name="lastname" placeholder="lastname">
                        </div>
                      </div>
                      <div class="form-row">
      
                          <div class="form-group col-md-12">
                      
                        <label for="class">class</label>
                        <input type="text" class="form-control" name="class" placeholder="class" value="{{$student->class}}" >
                      </div>
                     
                      </div>
                      <div class="form-group">
                          <label for="inputDescription">description</label>
                          
                          <input type="text" class="form-control" name="description" value="{{$student->description}}" >
                        </div>

                      <div class="form-row">
                        <div class="form-group col-md-6">                      
                        </div>                        
                      </div>
                      <a href="../home" type="button" style="margin-right:15px" class="btn btn-danger">Go back</a>
                     
                      <button type="submit" class="btn btn-success float-right"style="margin-right:15px">Submit</button>

                    </form>
              </div>
    </div>
    <div class="col-3"></div>
  </div>                              
@endsection
