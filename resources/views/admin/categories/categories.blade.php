
@extends('admin.layout.adminlayout')
 
@section('content')
    

<body class="hold-transition sidebar-mini layout-fixed">
  
   
   <div class="container-fluide object-fit-contain ">
       <div class="row ml-auto">
           <div class="col-lg-6 " style="margin-left: 300px">
               <h3>All Categories</h3>
               <a href="/newcategory" class="btn btn-success   mb-2">Add Categories</a>
               <table class="table table-bordered table-striped "  >
                    <tr>
                       <th>Id</th>
                       <th>Name</th>
                       <th>Image</th>
                       <th>Action</th>
                       {{-- <th>View</th> --}}
                       {{-- <th>Delete</th>
                       <th>Update</th> --}}


                    </tr>
                   @foreach ($data as $id=>$user)
                     <tr>
                       <td>{{ $user->id }}</td>
                       <td>{{ $user->name }}</td>
                       <td>
                        <img src="/images/{{ $user->image }}" height="50px" width="50px">
                        </td>
                       {{-- <td><a href="{{ route('view.user', $user->id) }}" class="btn btn-outline-primary btn-sm">View</a></td> --}}
                       {{-- <td><a href="{{ route('delete.category', $user->id) }}" class="btn btn-outline-danger btn-sm">Delete</a></td>
                       <td><a href="{{ route('update.category', $user->id) }} " class="btn btn-outline-warning btn-sm">Update</a></td> --}}
                       <td> 
                        <a class="btn-sm" href="{{ route('delete.category', $user->id) }}"><i class="fa fa-trash" aria-hidden="true" ></i></a>&nbsp;
                        <a class="btn-sm" href="{{ route('update.category', $user->id) }}"><i class="fa fa-edit" aria-hidden="true" ></i></a>
                       </td>
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
 
@endsection






