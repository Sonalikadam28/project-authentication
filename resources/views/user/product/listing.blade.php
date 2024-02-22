@extends('user.layouts.app')

@section('content')
@include('user.pages.navbar')

    <section class="breadcrumb-osahan pt-5 pb-5 bg-dark position-relative text-center">
        <h1 class="text-white">Offers Near You</h1>
        <h6 class="text-white-50">Best deals at your favourite restaurants</h6>
    </section>
         {{-- <h1>{{$category->name}}</h1> --}}
    <div class="container">
     <div class="row">
             @foreach($products as $product)
                <div class="col-md-3 col-6 mt-5">
                    <div class="card" style="width: 18rem;">
                      <a href="{{ route('details',$product->id) }}">
                        <img src="/images/{{ $product->Product_image }}" class="card-img-top" alt="..."  height="200px" width="300px" style="object-fit: contain">
                      </a>
                       <div class="card-body" style="text-align: center">
                         <h5 class="card-title">{{$product->Product_name}}</h5>
                         <p class="card-text">{{$product->Product_description}}</p>
                         <p class="card-text">${{$product->Product_price}}</p>
                         {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                       </div>
                  </div>
                </div>
            @endforeach
       </div>
   </div>


@include('user.pages.footer')
@endsection