
@extends('admin.layout.adminlayout')
 
@section('content')
    

<body class="hold-transition sidebar-mini layout-fixed " style=" overflow-x: hidden;">
  
   
   <div class="container-fluide" >
       <div class="row ">
           <div class="col-lg-9 " style="margin-left: 260px">
               <h3>All Products</h3>
               <a href="/newproduct" class="btn btn-success   mb-2">Add Products</a>
               <table class="table table-bordered table-striped table-sm" >
                    <tr>
                       <th>Product_id</th>
                       <th>Product_name</th>
                       <th>Product_image</th>
                       <th>Product_price</th>
                       <th>Product_description</th>
                       <th>Product_category</th>
                       <th>Status</th>
                       <th>Action</th>
                       {{-- <th>View</th> --}}
                       {{-- <th>Delete</th>
                       <th>Update</th> --}}


                    </tr>
                   @foreach ($products as $user)
                     <tr>
                       <td>{{ $user->id }}</td>
                       <td>{{ $user->Product_name }}</td>
                       <td>
                        <img src="/images/{{ $user->Product_image }}" height="50px" width="50px">
                        </td>
                        <td>{{ $user->Product_price }}</td>
                        <td>{{ $user->Product_description }}</td>
                        <td>{{ $user->Product_category }}</td>
                        <td>{{ ($user->Product_status) ? 'Publish' : 'Unpublished' }}</td>
                       {{-- <td><a href="{{ route('view.user', $user->id) }}" class="btn btn-outline-primary btn-sm">View</a></td> --}}
                       {{-- <td><a href="{{ route('delete.product', $user->id) }}" class="btn btn-outline-danger btn-sm">Delete</a></td>
                       <td><a href="{{ route('update.product', $user->id) }} " class="btn btn-outline-warning btn-sm">Update</a></td> --}}
                       <td> 
                        <a class="btn-sm" href="{{ route('delete.product', $user->id) }}"><i class="fa fa-trash" aria-hidden="true" ></i></a>&nbsp;
                        <a class="btn-sm" href="{{ route('update.product', $user->id) }}"><i class="fa fa-edit" aria-hidden="true" ></i></a>
                       </td>

                     </tr>
                   @endforeach
               </table>

               <div class="mt-5">
                 {{ $products->links() }}
                  
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






