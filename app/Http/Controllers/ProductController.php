<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\product;
use App\Models\categorie;

class ProductController extends Controller
{
    public function showProducts(){
        $products= product::select('products.*','categories.name as cat_name')
        ->leftJoin('categories','products.category_id','categories.id')
        ->paginate(5);
        $users= User::all(); 

        //dd($products->all());
       return view('admin.products.products')->with(compact('products','users' ));
   
       }
   
      //  public function singleuser( string $id){
      //   $categorie= DB::table('categories')->where('id',$id)->get();
      //      return view('admin.user',['data'=>$categorie]);
      //  }

      public function newproduct(){
        $category =categorie::get();
        $users= User::all(); 
        return view('admin.products.addproducts')->with(compact('category','users' ));
      }
   
     public function addProduct(Request $req){
       
         $req->validate([
            'Product_name'=>'required',
            'Product_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'Product_price'=>'required|numeric',
            'Product_description'=>'required',
            // 'Product_category'=>'required',
            'Product_status'=>'nullable',
            'category_id'=>'required',
        ]);
        
        
        $imageName = time().'.'.$req->Product_image->extension(); 
        $req->Product_image->move(public_path('images'), $imageName);
        
        $product =new product;
        $product ->Product_name =$req->Product_name;
        $product ->Product_image =$imageName;
        $product ->Product_price =$req->Product_price;
        $product ->Product_description =$req->Product_description;
        // $product ->Product_category =$req->Product_category;
        $product ->Product_status = !empty($req->Product_status) ? 1 : 0;
        $product ->category_id =$req->category_id;
        
        //dd($product);
         $product ->save();
         if($product ){
          return redirect()->route('products');
         }else{
          echo"data not added";
         };  
      
        // $category = categorie::orderBy('id','DESC')->get();  
        // return view('admin.products.products')->with(compact('category'));
                  
       }  


       public function updateProduct( string $id){
          // $user= DB::table('users')->where('id',$id)->get();
          // $product = DB::table('products')->find($id)->get();
          $product=product::where('id',$id)->first();
          $category= categorie::all(); 
          $users= User::all(); 
            return view('admin.products.updateproducts')->with(compact('product','category','users'));
       }
   
      

      public function updateUser(Request $req,$id){
         $req->validate([
            'Product_name'=>'required',
            'Product_image'=>'nullable|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'Product_price'=>'required|numeric',
            'Product_description'=>'required',
            // 'Product_category'=>'required',
            'Product_status'=>'required',
            'category_id'=>'required',
        ]);

        $product = product::where('id', $id)->first();

        if(isset($req->Product_image)){
         $imageName = time().'.'.$req->Product_image->extension(); 
         $req->Product_image->move(public_path('images'), $imageName);
         $product ->Product_image =$imageName;
        }

        $product ->Product_name =$req->Product_name;
        $product ->Product_price =$req->Product_price;
        $product ->Product_description =$req->Product_description;
        // $product ->Product_category =$req->Product_category;
        $product ->Product_status = !empty($req->Product_status) ? $req->Product_status : 0;
        $product ->category_id =$req->category_id;

        $product ->save();
        //return back()->withSuccess("product updated..!!!");

        if($product){
         return redirect()->route('products');
       //  echo "data successfully added";
        }else{
         echo"data not added";
      };      
}
   
       public function deleteUser(string $id){
        $product =DB::table('products')
           ->where('id',$id)
           ->delete(); 
   
           if( $product ){
             return redirect()->route('products');
           }
       }
}
