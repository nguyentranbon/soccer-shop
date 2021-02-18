<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    //
    public function getList(){
        $dataProducts = DB::table('products')
                ->get();
                
            
        $data = DB::table('products')
                ->orderBy('id','DESC')->get();
                // echo '<pre>';
                // print_r($dataProducts); exit;
        return view('backend.product.productList', compact('data'));
    }
}
