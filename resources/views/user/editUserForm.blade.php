


@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
      
    <form method="POST" action="{{route('user.update',$user->id)}}">
        @method('put')
               @csrf
            
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label >firstname</label>
                        <input type="text" class="form-control" name="firstname" value="{{$user->firstName}}">
                        </div>
                        <div class="form-group col-md-6">
                          <label >lastname</label>
                        <input type="text" class="form-control"  name="lastname" value="{{$user->lastName}}">
                        </div>
                      </div>
                      <div class="form-row">
      
                          <div class="form-group col-md-6">
                            <label>role</label>
                            <select name="role" class="form-control">
                              <option value="0" {{($user->role == 0) ? 'selected' : ''}}>normal</option>
                              <option value="1" {{($user->role == 1) ? 'selected' : ''}}>admin</option>
                            </select>
                      </div>
                      <div class="form-group col-md-6">
                      
                        <label >email</label>
                      <input type="text" class="form-control" name="email" value="{{$user->email}}">
                      </div>
                      </div>
                      <div class="form-group">
                          <label>password</label>
                          
                      <input type="text" class="form-control" name="password" value="{{$user->password}}">
                        </div>

                        <div class="form-group">
                            <label>position</label>
                            <select name="position" class="form-control">
                              <option value="1" {{($user->position_id == 1) ? 'selected' : ''}}>Manger</option>
                              <option value="2" {{($user->position_id == 2) ? 'selected' : ''}}>SNA Trainer</option>
                              <option value="3" {{($user->position_id == 3) ? 'selected' : ''}}>WEP Trainer</option>
                              <option value="4" {{($user->position_id == 4) ? 'selected' : ''}}>Educator</option>
                              </select>
                          </div>

                      <button type="submit" class="btn btn-success"style="margin-right:15px">Submit</button>
                    </form>
              </div>

    </div>
    <div class="col-3"></div>
  </div>                              
@endsection 
