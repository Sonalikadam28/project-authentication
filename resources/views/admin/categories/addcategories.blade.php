@extends('admin.layout.adminlayout')
 
@section('content')
    
<body style="background-color:aliceblue">
    <div class="container">
        <div class="row ">
            <div class="my-3 " style="margin-left: 250px ">
                <h3>Add New Category</h3>
                <div class="border p-3 w-50 h-100" style="background-color: white">
                 <form action="{{ route('addCategory') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    
                    <div class="mb-3">
                        <label >Name</label>
                        <input type="text" value="{{ old('username') }}"   class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Enter name">
                        <span class="text-danger "> @error('username') {{ $message }} @enderror </span>
                    </div>
                      
                    <div class="mb-3">
                        <label >Image</label>
                        <input type="file" value="{{ old('userimg') }}"   class="form-control @error('userimg') is-invalid @enderror" name="userimg">
                        <span class="text-danger "> @error('userimg') {{ $message }} @enderror </span>
                    </div>
                     
                     <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection 
 