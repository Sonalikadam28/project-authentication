<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

   <title>All user</title>
</head>
<body>
   <div class="container">
       <div class="row">
           <div class="col-6">
               <h3>All user list</h3>
               <a href="/newuser" class="btn btn-success btn-sm">Add User</a>
               <table class="table table-bordered table-striped">
                    <tr>
                       <th>Id</th>
                       <th>Name</th>
                       <th>Email</th>
                       <th>Age</th>
                       <th>City</th>
                       <th>View</th>
                       <th>Delete</th>
                       <th>Update</th>


                    </tr>
                   @foreach ($data as $id=>$user)
                     <tr>
                       <td>{{ $user->id }}</td>
                       <td>{{ $user->name }}</td>
                       <td>{{ $user->email }}</td>
                       <td>{{ $user->age }}</td>
                       <td>{{ $user->city }}</td>
                       <td><a href="{{ route('view.user', $user->id) }}" class="btn btn-primary btn-sm">View</a></td>
                       <td><a href="{{ route('delete.user', $user->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
                       <td><a href="{{ route('update.page', $user->id) }} " class="btn btn-warning btn-sm">Update</a></td>
                         
                     </tr>
                   @endforeach
               </table>

               <div class="mt-5">
                 {{ $data->links() }}
                  
               </div>
               {{-- <div class="mt-5">
               Total count :  {{ $data->total() }}<br>
               Current Page :  {{ $data->currentPage() }} 
               </div> --}}
           </div>
       </div>
   </div>
</body>
</html>






