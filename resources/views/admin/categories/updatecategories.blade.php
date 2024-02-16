@extends('admin.layout.adminlayout')

@section('content')
    
<body style="background-color: aliceblue">
    <div class="container">
        <div class="row">
            <div class="my-3 " style="margin-left: 250px ">
                <h3>Update Categories</h3>
                <div class="border p-3 w-50 h-100" style="background-color: white">
                 <form action="{{ route('updatepost.category',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label >Name</label>
                        <input type="text" value="{{ old('username') }}{{ $data->name }}"   class="form-control @error('username') is-invalid @enderror" name="username"  >
                        <span class="text-danger "> @error('username') {{ $message }} @enderror </span>
                    </div>
                      
                    <div class="mb-3">
                        <label >Image</label>
                        <input type="file" value="{{ old('userimg') }}{{ $data->image }}"   class="form-control @error('userimg') is-invalid @enderror" name="userimg">
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
 