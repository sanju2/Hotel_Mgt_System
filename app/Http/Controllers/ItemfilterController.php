<?php

namespace App\Http\Controllers;
use App\Cart;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;
use App\fooditem;
use App\cats;
use Illuminate\Support\Facades\DB;
use Session;
use Stripe\Charge;
use Redirect,Response;
use Stripe\Stripe;
use App\foodOrders;

class ItemfilterController extends Controller
{
   
public function fetch_data(Request $request)
    {
        if($request->ajax())

      {
        $sort_by = $request->get('sortby');        
        $sort_type = $request->get('sorttype');
        $category = $request->get('category');
        $price =$request->get('price');        
        $query = $request->get('query'); 
        $query = str_replace(" ", "%", $query);

        //dd($sort_by,$sort_type,$category, $price,$query);

       if(!empty($query)){
       
         $products = DB::table('fooditems')
         ->where('itemname','like','%'.$query.'%')
         ->orWhere('price','like','%'.$query.'%')
         ->orWhere('calorie','like','%'.$query.'%')
         ->orderBy($sort_by,$sort_type)
         ->paginate(100);
        //dd($members);
        //$designations = DB::select("select * from positions");
         $record_count = count($products);
       }else if(empty($query))
       {
      
        if((empty($category))&&(empty($price))){
          
          //$test = 'i am in first block';
          //dd($test);
          $products = DB::table('fooditems')->orderBy($sort_by,$sort_type)->paginate(100);          
          $record_count = count($products);
          //dd($sort_by);
        }elseif((!empty($category))&&(empty($price))){        
         
          //$test = 'i am in second block';
          //dd($sort_by);
          $products = DB::table('fooditems')->where('cat_id',$category)->orderBy($sort_by,$sort_type)->paginate(100);
         //$products =DB::select("select * from fooditems");
         $record_count = count($products);
        
          //dd($products);
        }elseif((empty($category))&&(!empty($price))){        
         
         // $test = 'i am in third block';
          //dd($test);    

        if($price == "0-100"){
          $product_price = 100;
         $products = DB::table('fooditems')->where('price', '<',$product_price)->orderBy($sort_by,$sort_type)->paginate(100);
        }
        elseif($price == "100-300"){
          $product_price1 = 100;
          $product_price2 = 300;
         $products = DB::table('fooditems')->where('price', '<',$product_price2)->where('price','>=',$product_price1)->orderBy($sort_by,$sort_type)->paginate(100);
        }
        elseif($price == "300-500"){
          $product_price1 = 300;
          $product_price2 = 500;
         $products = DB::table('fooditems')->where('price', '<',$product_price2)->where('price','>=',$product_price1)->orderBy($sort_by,$sort_type)->paginate(100);
        }
        elseif($price == "500-1000"){
          $product_price1 = 500;
          $product_price2 = 1000;
         $products = DB::table('fooditems')->where('price', '<',$product_price2)->where('price','>=',$product_price1)->orderBy($sort_by,$sort_type)->paginate(100);
        }
        elseif($price == "1000-2000"){
          $product_price1 = 1000;
         $products = DB::table('fooditems')->where('price','>=',$product_price1)->orderBy($sort_by,$sort_type)->paginate(100);
        }
         $record_count = count($products);
          //dd($products);
        }elseif((!empty($category))&&(!empty($price))){        
         
          //$test = 'i am in fourth block';
          //dd($test);
         //$products = DB::table('fooditems')->where('cat_id',$category)->where('price',$price)->orderBy($sort_by,$sort_type)->paginate(100);
         if($price == "0-100"){
          $product_price = 100;
         $products = DB::table('fooditems')->where('cat_id',$category)->where('price', '<',$product_price)->orderBy($sort_by,$sort_type)->paginate(100);
        }
        elseif($price == "100-300"){
          $product_price1 = 100;
          $product_price2 = 300;
         $products = DB::table('fooditems')->where('cat_id',$category)->where('price', '<',$product_price2)->where('price','>=',$product_price1)->orderBy($sort_by,$sort_type)->paginate(100);
        }
        elseif($price == "300-500"){
          $product_price1 = 300;
          $product_price2 = 500;
         $products = DB::table('fooditems')->where('cat_id',$category)->where('price', '<',$product_price2)->where('price','>=',$product_price1)->orderBy($sort_by,$sort_type)->paginate(100);
        }
        elseif($price == "500-1000"){
          $product_price1 = 500;
          $product_price2 = 1000;
         $products = DB::table('fooditems')->where('cat_id',$category)->where('price', '<',$product_price2)->where('price','>=',$product_price1)->orderBy($sort_by,$sort_type)->paginate(100);
        }
        elseif($price == "1000-2000"){
          $product_price1 = 1000;
         $products = DB::table('fooditems')->where('cat_id',$category)->where('price','>=',$product_price1)->orderBy($sort_by,$sort_type)->paginate(100);
        }
         $record_count = count($products);
         
        }else{
          $test = 'i am in fifth block';
          dd($test);
          $products = DB::table('fooditems')->orderBy($sort_by,$sort_type)->paginate(100);
          
          $record_count = count($products);

          //dd($members);
        }

       }

        return view('shop.productsPage',compact('products','record_count'))->render();
      }
    }
}