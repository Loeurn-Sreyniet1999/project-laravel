<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name='viewport' content='width=device-width, initial-scale=1'>

</head>
<body>
   
    <div class="container mt-5">
    <a href="{{route('user.create')}}" style="font-size:36px;color:palevioletred" class="float-right"><li class="fa fa-user-plus"></li></a>

    <br>
    <br>
        <table class="table table-stripped">
    </div>
        <tr>
            <th>id</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>role</th>
            <th>email</th>
            {{-- <th>password</th> --}}
            <th>position</th>
            <th>Action</th>
           
        </tr>
        @foreach ($user as $item)
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->firstName}}</td>
            <td>{{$item->lastName}}</td>
            <td>
                @if ($item->role==0)
                    normal
                @else
                admin
                @endif
            
               </td>
            <td>{{$item->email}}</td>
            {{-- <td>{{$item->password}}</td> --}}
            <td>
                @if ($item->position_id==1)
                    Training Manager
                    
                @endif
                @if ($item->position_id==2)
                    SNA Trainer                   
                @endif
                @if ($item->position_id==3)
                    WEB Trainer
                    
                @endif
                @if ($item->position_id==4)
                 Educator
                    
                @endif
            </td>
            <td>
                <div class="row">

                    <a href="{{route('user.show',$item->id)}}" style="margin-right:20px;color:blue;font-size:25px"><li class="fa fa-edit" ></li></a>
                    <form action="{{route('user.destroy',$item->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" style="color:red"><li class="fa fa-trash"></li></button>
                    </form>
                </div>
            </td> 
            </tr>
        @endforeach
    </table>
</body>
</html>