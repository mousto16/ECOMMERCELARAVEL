<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){

        $products = DB::table('products')->take(6)->get();
        // dd($products);
        return view('products.index')->with('products', $products);
    }

    public function show($slug){

        
            $product = DB::table('products')->where('slug', $slug)->first();
            return view('products.show')->with('product', $product);

        // } catch (\Exception $exception) {
        //     return view('erros.404');
        // }
       

    }
}
