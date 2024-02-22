<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\categorie;
use App\Models\product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $category = categorie::get();
        return view('home',compact('category'));
    }



    public function listing($id){
        $products =product::select('products.*','category_id as cat_id','categories.name','products.Product_description as pro_desc')
        ->leftJoin('categories','products.category_id','categories.id')
        ->where('categories.id',$id)
        ->where('products.Product_status', 1)
        ->paginate(10);

        return view('user.product.listing',compact( 'products'));
    }

     public function details( string $id){
        $product= DB::table('products')->where('id',$id)->get();
           return view('user.product.details',['data'=>$product]);
    }

       public function loginuser(){
        $users= DB::table('users')
        ->get();
        return view('admin.loginuser',compact('users'));
    } 

    // public function addloginuser(Request $req){
    //     $req->validate([
    //        'username'=>'required',
    //        'userimg'=>'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
    //    ]);
       
    //   $imageName = time().'.'.$req->userimg->extension(); 
    //   $req->userimg->move(public_path('images'), $imageName);
    //  //dd($imageName);
    //    $categorie =new categorie();
    //    $categorie->name =$req->username;
    //    $categorie->image =$imageName;
    //    $categorie->save();
       
    //    if($categorie){
    //     return redirect()->route('categories');
    //     }else{
    //     echo"data not added";
    //  };  
                

    //   }
}
