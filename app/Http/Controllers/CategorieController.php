<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
use App\Models\categorie;


class CategorieController extends Controller
{
    public function showUser(){
        $categories= DB::table('categories')
                   ->paginate(5);
                   //->appends(['sort'=>'votes']);
                   //->fragment('users');
       
       return view('admin.categories.categories',['data'=> $categories]);
   
       }
   
      //  public function singleuser( string $id){
      //   $categorie= DB::table('categories')->where('id',$id)->get();
      //      return view('admin.user',['data'=>$categorie]);
      //  }
   
       public function addCategory(Request $req){
         $req->validate([
            'username'=>'required',
            'userimg'=>'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        
        $imageName = time().'.'.$req->userimg->extension(); 
        $req->userimg->move(public_path('images'), $imageName);
        //dd($imageName);
        $categorie =new categorie;
       
        $categorie->name =$req->username;
        $categorie->image =$imageName;

        $categorie->save();
        if($categorie){
         return redirect()->route('categories');
       //  echo "data successfully added";
        }else{
         echo"data not added";
      };  
                  
       }
   
       public function updateCategory( string $id){
          // $user= DB::table('users')->where('id',$id)->get();
          $categorie= DB::table('categories')->find($id); 
            return view('admin.categories.updatecategories',['data'=>$categorie]);
       }
   
      

      public function updateUser(Request $req,$id){
         $req->validate([
            'username'=>'required',
            'userimg'=>'nullable|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $categorie= categorie::where('id', $id)->first();

        if(isset($req->userimg)){
         $imageName = time().'.'.$req->userimg->extension(); 
         $req->userimg->move(public_path('images'), $imageName);
         $categorie->image =$imageName;
        }

        $categorie->name =$req->username;
        $categorie->save();
        //return back()->withSuccess("product updated..!!!");

        if($categorie){
         return redirect()->route('categories');
       //  echo "data successfully added";
      }else{
         echo"data not added";
      };      
}
   
       public function deleteCategory(string $id){
        $categorie=DB::table('categories')
           ->where('id',$id)
           ->delete(); 
   
           if( $categorie){
             return redirect()->route('categories');
           }
       }
}


//  public function updateUser(Request $req,$id){
      //    $req->validate([
      //       'username'=>'required',
      //       'userimg'=>'required',
      //   ]);
           
      //   $categorie=DB::table('categories')
      //      ->where('id',$id)
      //       ->update([
              
      //          'name'=> $req->username,
      //          'image'=>$req->userimg,
               
      //          'created_at'=>now(),
      //          'updated_at'=>now()
      //       ]);
             
      //             if($categorie){
      //              return redirect()->route('categories');
      //           }else{
      //              echo"data not added";
      //           };      
      //  }


      //   $categorie=DB::table('categories')
      //                 ->insertOrIgnore([
      //                  [
      //                      'name'=> $req->username,
      //                      $imageName=>$req->userimg,
      //                      'created_at'=>now(),
      //                      'updated_at'=>now()
      //                  ],
                       
                       
      //                 ]);

      //                 return back()
      //                 ->with('success', 'You have successfully upload image.')
      //                 ->with('image', $imageName);       
      