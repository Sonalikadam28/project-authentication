@extends('admin.layout.adminlayout')

@section('content')
    
<body style="background-color: aliceblue">
    <div class="container">
        <div class="row">
            <div class="my-3 " style="margin-left: 250px ">
                <h3>Update Produts</h3>
                <div class="border p-3 w-50 h-100" style="background-color: white">
                 <form action="{{ route('updatepost.product',$product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label >Name</label>
                        <input type="text" value="{{ old('Product_name') }}{{ $product->Product_name }}"   class="form-control @error('Product_name') is-invalid @enderror" name="Product_name">
                        <span class="text-danger "> @error('Product_name') {{ $message }} @enderror </span>
                    </div>
                      
                    <div class="mb-3">
                        <label >Image</label>
                        <input type="file" value="{{ old('Product_image') }}{{ $product->Product_image }}"   class="form-control @error('Product_image') is-invalid @enderror" name="Product_image">
                        <span class="text-danger "> @error('Product_image') {{ $message }} @enderror </span>
                    </div>
                    
                    <div class="mb-3">
                        <label >Price</label>
                        <input type="text" value="{{ old('Product_price') }}{{ $product->Product_price }}"   class="form-control @error('Product_price') is-invalid @enderror" name="Product_price">
                        <span class="text-danger "> @error('Product_price') {{ $message }} @enderror </span>
                    </div> 

                    <div class="mb-3">
                        <label >Description</label>
                        <input type="text" value="{{ old('Product_description') }}{{ $product->Product_description }}"   class="form-control @error('Product_description') is-invalid @enderror" name="Product_description">
                        <span class="text-danger "> @error('Product_description') {{ $message }} @enderror </span>
                    </div>

                    <div class="mb-3">      
                        <label >Category</label>
                      <select class="form-select @error('category_id') is-invalid @enderror" aria-label="Default select example"  name="category_id" value="{{ old('category_id') }}">
                         <option value="">Select Category</option>
                          @foreach ($category as $val)
                          <option value="{{ $val->id }}">{{ $val->name}}</option>
                          @endforeach
  
                       </select>
                        <span class="text-danger "> @error('category_id') {{ $message }} @enderror </span>  
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1" name="Product_status" value="1" checked>
                        <label class="form-check-label">Publish</label>
                       
                    </div>
                     
                     <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
 