
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
      
    <form method="POST" action="{{route('user.store')}}">
               @csrf
            
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label >firstname</label>
                        <input type="text" class="form-control" name="firstname" placeholder="firstname">
                        </div>
                        <div class="form-group col-md-6">
                          <label >lastname</label>
                          <input type="text" class="form-control"  name="lastname" placeholder="lastname">
                        </div>
                      </div>
                      <div class="form-row">
      
                          <div class="form-group col-md-6">
                            <label>role</label>
                      
                        <select name="role" id="" class="form-control">
                            <option value="0">normal</option>
                            <option value="1">admin</option>
                            
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                      
                        <label >email</label>
                        <input type="text" class="form-control" name="email" placeholder="email">
                      </div>
                      </div>
                      <div class="form-group">
                          <label>password</label>
                          
                          <input type="text" class="form-control" name="password"  >
                        </div>

                        <div class="form-group">
                            <label>position</label>
                            <select name="position" id="" class="form-control">
                                <option value="1">Training Manager</option>
                                <option value="2">SNA Trainer</option>
                                <option value="3">WEB Trainer</option>
                                <option value="4">Educator</option>
                            </select>
                          </div>

                      <button type="submit" class="btn btn-success"style="margin-right:15px">Submit</button>
                    </form>
              </div>

    </div>
    <div class="col-3"></div>
  </div>                              
@endsection
