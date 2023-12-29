<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Product;
use App\Models\Cart;



class HomeController extends Controller
{

    public function redirect()
    {
        $data=Product::all();
        $usertype=Auth::user()->usertype;
        if($usertype=='0')
        {
            return view('admin.home');
        }
        else
        {
            return view('home.user',['products'=>$data]);
        }
    }

    function index()
    {
        $data=Product::all();

        // return view('home.user');
        return view('home.user',['products'=>$data]);

    }
    public function addCart(Request $req,$id)
    {
       if(Auth::id())
       {
        // return redirect('/');
        $user=Auth::user();
        $product=Product::find($id);
        $cart=new cart();
        $cart->name=$user->name;
        $cart->email=$user->email;
        $cart->contact=$user->phone;
        $cart->address=$user->address;
        $cart->user_id=$user->id;

        $cart->title=$product->title;


        if($product->discount_price<$product->price)
{
    $cart->price=$product->discount_price*$req->quantity;
}
else{
    $cart->price=$product->price*$req->quantity;

}
        $cart->image=$product->image;
        $cart->product_id=$product->id;

        $cart->quantity=$req->quantity;


        $cart->save();
        return redirect('/');

       }
       else{
        return redirect('login');
       }

    }
}

// <!-- <x-app-layout>

// </x-app-layout> -->


