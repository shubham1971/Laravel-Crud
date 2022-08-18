<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

    	$product = Product::all();
    	return view('admin.product.index', compact('product'));
    }

    public function add(){
    	return view('admin.product.add');
    }

    public function insert(Request $request){
      
    $product = new Product();

      $product->name = $request->input('name');
	   	$product->price = $request->input('price');
	   	$product->upc = $request->input('upc');
	   	$product->status = $request->input('status') == TRUE? '1':'0';
	 
   	
   	if($request->hasfile('image'))
   	{
   		$file= $request->file('image');
   		$extention = $file->getClientOriginalExtension();
   		$filename = time().'.'.$extention;
   		$file->move(public_path('assets/uploads/product'),$filename);
   		$product->image= $filename;
   	}
	    

	   	$product->save();

	   	return redirect('/dashboard')->with('status', "Product Added Successfully");

	   }



     public function edit($id){
     
     $product= Product::find($id);

      return view('admin.product.edit',compact('product'));
     }


     public function update(Request $request,$id){

      $product= Product::find($id);

      
      if($request->hasfile('image')){

        $path = 'assets/uploads/product/'.$product->image;
        if(File::exists($path)){
          File::delete($path);
        }

        
          $file= $request->file('image');
          $extention = $file->getClientOriginalExtension();
          $filename = time().'.'.$extention;
          $file->move(public_path('assets/uploads/product'),$filename);
          $product->image= $filename;
       
         }
          $product->name = $request->input('name');
          $product->price = $request->input('price');
          $product->upc = $request->input('upc');
          $product->status = $request->input('status') == TRUE? '1':'0';
  

          $product->update();
          return redirect('dashboard')->with('status',"Product updated successfully");

     }

     public function destroy($id){
       
       $product= Product::find($id);
       if($product->image){
        $path = 'assets/upload/product/'.$product->image;
        if(File::exists($path)){
          File::delete($path);
        }
       }
       $product->delete();
       return redirect('product')->with('status',"product delete successfully");
     }

}
