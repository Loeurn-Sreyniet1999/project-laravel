
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">

  {{-- // list user --}}

<a href="{{route('user.index')}}" style="font-size:30px;color:orange"><li class="fa fa-users"></li></a>


   {{-- add student link form --}}

  <a class="float-right" data-toggle="modal" data-target="#myModal">
    <li class="fa fa-user-plus" style="font-size:36px;color:#e60991"></li>
  </a>
  
  {{-- Add student form modal pop up --}}

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg bg-primary">
            <h4 class="modal-title" style="margin-left:180px;color:white">Add Form</h4>
        </div>

        <div class="modal-body">
            <form method="POST" action="{{route('student.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputfirstname4">firstname</label>
                    <input type="text" class="form-control" name="firstname" placeholder="firstname">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">lastname</label>
                    <input type="text" class="form-control" name="lastname" placeholder="lastname">
                  </div>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-12">
                
                  <label for="class">class</label>
                  <select class="form-control" name="class">                    
                      <option>WEP A</option>
                      <option>WEP B</option>
                      <option>SNA</option>
                      <option>Class A</option>
                      <option>Class B</option>
                      <option>Class C</option>
                    </select>
                </div>
                
                </div>
                <div class="form-group">
                    <label for="inputDescription">description</label>
                    <textarea class="form-control" rows="3" name="description"></textarea>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-8">
                      <label for="inputfirstname4">picture</label>
                      <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="form-control" name="picture" >
                            <label class="custom-file-lable"></label>
                        </div>
                    </div>
                    </div>
                    
                  </div> 
             
                <br>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success float-right">Submit</button>
              </form>
        </div>
        
      </div>
      
    </div>
  </div> 
    <br>
    <br>
    <br>

    {{-- List all Students --}}

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#home">Followup</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#menu1">Out followup</a>
                    </li>
                    
                  </ul>
                
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div id="home" class="container tab-pane active"><br>
                      <h5 class="text-center" style="color:red">Followup Student</h5><br>
                      <table class="mt-3 table table-stripped">
                        <tr>
                         
                          <th>Picture</th> 
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Class</th>
                         
                        
                         <th>Action</th>
                    
                     </tr>
                   
                     @foreach($student as $item)
                         <tr>
                            
                           <td><img src="{{asset('image/'.$item->picture)}}" width="70px" class="rounded" height="50px" /></td>
                             <td>{{$item->firstName}}</td>
                             <td>{{$item->lastName}}</td>
                             <td>{{$item->class}}</td>
                            
                             
                              <td> 
                                <div class="row">

                                  <a href="{{route('student.show',$item->id)}}" ><li class="fa fa-edit" style="font-size:20px"></li></a>
                                  
                                   <a href="{{route('detailStudent',$item->id)}}"style="margin-right:10px;margin-left:10px;color:green;font-size:20px"><li class="fa fa-eye"></li></a>
                                  
                                   <form action="{{route('student.destroy',$item->id)}}" method="POST">
                                   @csrf
                                   @method('delete')
                                   <button type="submit" style="color:red"><i class="fa fa-trash"></i></button> 
                                 </form> 
                                </div>
                             

                             </td>
                         </tr>
                         @endforeach    
                    </table>
                    </div>
                    <div id="menu1" class="container tab-pane fade"><br>
                      <h5 class="text-center" style="color:red">Out of followup</h5><br>                                        
                 
                    </div>
                    
                  </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection


