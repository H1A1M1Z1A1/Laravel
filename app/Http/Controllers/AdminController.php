<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;



class AdminController extends Controller
{
    public function category()
    {
        return view('admin.category');
    }
    public function addCategory(Request $req)
    {
        // return view('home.category');
        $data=new Category;
        $data->category_name=$req->category_name;
        $data->save();

        return redirect()->back()->with('message','Category Added Successfully');

    }
    public function product()
    {
        $category=Category::all();
        
        return view('admin.addProduct',['category'=>$category]);

    }
    public function addProduct(Request $req)
    {
        // return view('admin.addProduct');
        $data=new Product();
        $data->title=$req->title;
        $data->description=$req->description;
        $data->price=$req->price;
        $data->discount_price=$req->discount_price;
        $data->quantity=$req->quantity;
        $data->category=$req->category;

        $image=$req->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $data->image=$imagename;
 
        $req->image->move('product',$imagename);

        $data->save();

        return redirect()->back();
        // return ['data'=>$data];

    }
    public function show_product()
    {
        $data=Product::all();
        return view('admin.showProduct',['products'=>$data]);


    }
}
