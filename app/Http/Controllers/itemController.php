<?php

namespace App\Http\Controllers;
use App\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;
use App\fooditem;
use App\cats;
use Illuminate\Support\Facades\DB;
//use Session;
use Stripe\Charge;
use Redirect,Response;
use Stripe\Stripe;
use App\foodOrders;








class itemController extends Controller
{
    
    public function foodview(){

        return view('food');
    }
    
    public function itemstore(Request $request){

        // dd($request->all());
        $item=new fooditem;
        $this->validate($request,[
            'itemname'=>'required|max:100|min:3',
            'price'=>'required|max:100|min:3',
            'calorie'=>'required|max:100|min:3',
            'image'=>'required|max:100|min:3',
]);



     
        $item->itemname=$request->input('itemname');
        $item->price=$request->input('price');
        $item->calorie=$request->input('calorie');
       // $item->image=$request->image;

            if($request->hasfile('image')){

                $file=$request->file('image');
                $extention=$file->getClientOriginalExtension();
                $filename=time() . '.' .$extention;
                $file->move('uploads/item/',$filename);
                $item->image=$filename;
             }


             else{
                 return $request;
                 $item->image='';
             }



        $item->description=$request->input('description');
        $item->cat_id=$request->input('cat_id');
        $item->save();
      // return redirect()-> back();
       return view('food')->with('item',$item);
    
    }







    public function display(){
        $items=fooditem::all();

        
        return view('foodview',compact('items'));
    }


    public function edit($id){
        $items=fooditem::find($id);
        // return dd($items);
        return view('foodupdate')->with('items',$items);
    }




    


  
    public function update(Request $request, $id){


        $items=fooditem::find($id);


        $items->price=$request->input('price');
        $items->calorie=$request->input('calorie');

        if($request->hasfile('image')){
            $file=$request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time() . '.' .$extention;
            $file->move('uploads/item/',$filename);
            $items->image=$filename;

        }
       
        
        $items->save();

        return redirect('/viewfood')->with('items',$items);
    }

    public function destroy(fooditem $food){

        DB::table('fooditems')->where('id', '=', $food->id)->delete();
        return back()->with('success','Data Deleted');
      }
   
public function getIndex(){
    $item=fooditem::all();
    return view('shop.index',['products'=>$item]);
}
    
public function getAddToCart(Request $request,$id){

    $items=fooditem::find($id);
    $oldCart=Session::has('cart') ? Session::get('cart') :null;
    $cart=new Cart($oldCart);
    $cart->add($items,$items->id);

    $request->session()->put('cart',$cart);
    //dd($request->session()->get('cart'));
    return back();

}

public function getCart(){

    $items=fooditem::all();
    if(!Session::has('cart')){
        return view('shop.shopping-cart');
    }
    $oldCart=Session::get('cart');
    $cart=new Cart($oldCart);
    return view('shop.shopping-cart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);

}
public function getCart2(){

    if(!Session::has('cart')){
        return view('shop.shopping-cart');
    }
    $oldCart=Session::get('cart');
    $cart=new Cart($oldCart);
    return view('checkout',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);

}


public function getCheckout(){
   if(!Session::has('cart')){


return view('shop.shopping-cart');

   }

$oldCart=Session::get('cart');
$cart=new Cart($oldCart);
$total=$cart->totalPrice;
return view('checkout',['total'=>$total]);
}



public function postCheckout(Request $request){
    if(!Session::has('cart')){


        return redirect()->route('shop.shoppingCart');
        
           }

           $oldCart=Session::get('cart');
           $cart=new Cart($oldCart);

           Stripe::setApiKey(env('STRIPE_SECRET'));
        //    dd($token = $request->stripeToken);
        //    dd($request->all());
           try{
               Charge::create([
                'amount' => $cart->totalPrice*100,
                'currency' => 'usd',
                'source' => $request->input('stripeToken'),
                'description' => 'Test charge',
              ]);
  }  catch(\Exception $e){

    return redirect()->route('checkout')->with('error',$e->getMessage());

  }

Session::forget('cart');
return redirect()->route('product.index')->with('success','Successfully purchased products!');

}


public function indexnew()
{
    return view('payment');
}

public function store(Request $request)
{

    $stripe = Stripe::charges()->create([
        'source' => $request->get('tokenId'),
        'currency' => 'USD',
        'amount' => $request->get('amount') * 1500
    ]);

    return $stripe;
}

public function saveCategory(Request $request){
    $cat_name = $request->cat_name;
    
    $add_cat = DB::table('cats')->insert([
      'cat_name' => $cat_name,
      'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),

    ]);
    if($add_cat){
      echo "done";
      return back();
    }else{
      echo "error";
    }
  }


public function proCat(Request $request){


 $cat =$request->cat;

$products= DB::table('fooditems')->join('cats','cats.id','fooditems.cat_id')->where('cats.cat_name',$cat)->get();


return view('shop.index',[

    'products'=>$products
]);



}


public function productsCat(Request $request){

 $cat_id=$request->cat_id;

  $products=DB::table('fooditems')
->join('cats','cats.id','fooditems.cat_id')
->where('fooditems.cat_id',$cat_id)
->get();
 return view('shop.productsPage',[

    'products'=>$products
    
    ]);
 }



//'catByUser' => 'All Products'


public function displayorder(){

    $foodorder=foodOrders::all();
    return view('foodorder')->with('foodorder',$foodorder);
}



public function sendSms(Request $request)
    {
        // return $request;
        Nexmo::message()->send([
            'to' => '94' . $request->mobile,
            'from' => '16105552344',
            'text' => 'Using the facade to send a message.'
        ]);

        Session::flash('success', 'Message sent');
        return redirect('/foodorders');
    }
}