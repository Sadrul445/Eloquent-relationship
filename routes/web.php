<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Product;
use App\Models\Order;

Route::get('/productsOrder',function(){ 
    $products = Product::with('orders')->get();
    return view('orderProduct', compact('products'));
});

Route::get('/UsersData',function() {
    
    $user = Phone::find(1);
    $user = Phone::find(1)->user;
    // return $user;

    $phone = User::find(1);
    $phone = User::find(1)->phone;
    // return $phone;
    $users = User::all();
    // return $users;

    // $users = Phone::with('phones')->get();
    
        // $phone = $users->phone;
        // do something with $phone
    
    return view('usersData',compact('users'));
});

Route::get('/', function () {
    $phone = User::find(1);
    // $phone = User::find(1)->phone;
    // // return $phone;
    $user = Phone::find(1);
    $user = Phone::find(1)->user;
    // // return $user;

    $users =User::all();
    // // return $users;
    $phones = Phone::all();
    $post = Comment::find(1);
    // //return $post;
    $comment = Post::find(1)->comments;
    // // return $comment;

    $posts = Post::with('comments')->get();
    //return $posts;
    // dd($posts);
    // $comments = Comment::all();

    $products = Order::find(2);
    //return $products;
    
    $orders = Product::find(2);
    // return $orders;
    $orders = Order::all();
    // return $orders;

    $products = Product::with('orders')->get();
    // return $products;
    

    return view('welcome', compact('products'));
});
