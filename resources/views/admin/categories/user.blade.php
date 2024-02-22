<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 mt-4">
            <div class="card p-4"  >
                @foreach ($data as $id=>$categorie)
                   <h5>Name : {{ $categorie->Product_name }}</h5>
                   <img src="/images/{{ $categorie->Product_image }}"  width="50%">
                @endforeach
            </div>
        </div>
    </div>
   </div>

    {{-- <h3>User Page</h3>
    <form action="" method="post" enctype="multipart/form-data" >
        @csrf
        @foreach ($data as $id=>$categorie)
         <h3>Name : {{ $categorie->name }}</h3>
         <h3>Image : {{ $categorie->image }}</h3>
         <img src="/images/{{ $categorie->image }}" height="50px" width="50px">
     
        @endforeach
   </form> --}}
</body>
</html>
