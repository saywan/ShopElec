<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\order_request;
use App\Models\Orders;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use Image;
class ProductController extends Controller
{

    public  function  index()
    {

        return view('admin.Product.index');

    }
    public  function  AddProduct(Request $request){

        $name=$request->title;
        $price=str_replace(',','',$request->price);
        $count=$request->count;
        $category=$request->catid;
        $text=$request->disc;
        $imageurl=$request->image;



        $prod=new product();
        $prod->title=$name;
        $prod->count=$count;
        $prod->disc=$text;
        $prod->price=$price;
        $prod->catid=$category;
        $prod->pimage=$imageurl;


        if($prod->save())
        {
            $TeamId=$prod->id;
            $time=time();

            if(!empty($request->image))
            {
                $image = $request->image;


                $name = time().'.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];

                $prod->update([
                    'pimage'=>$name

                ]);


                \Image::make($request->get('image'))->save(public_path('upload/Product/').$name);

                return response()->json(['status'=>'success','message'=>'photo and Data are save']);
            }

        }else{
            return response()->json(['status'=>'Fail','data'=>$prod]);
        }
       /* if($prod->save())
        {

            return response()->json(['status'=>'Success','data'=>$prod]);
        }else{

            return response()->json(['status'=>'Fail','data'=>$prod]);
        }*/
    }
    public  function  AddCategory(Request $request){

        $NameCat=$request->NameCat;
        $parent_id=$request->parent_id;


        $category=new category();
        $category->name=$NameCat;
        $category->parentId =$parent_id;



        if ($category->save()){

            return $category;
        }



    }
    public  function  ShowFormAdd(){
        return view('admin.category.index');
    }
    public  function  GetCategory(){

      /*  DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('category')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');*/

        return category::all();
    }
    public  function  listproduct(){

       /* DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('product')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');*/



        $product = product::all();


        return view('admin.Product.listProduct',['listproduct'=>$product]);


    }
    public  function  listCategory(){


        $cat=category::all();
        return view('admin.category.list',['listcate'=>$cat]);


    }
    public  function  DeleteProduct(Request $request){
        $catdelete_id=product::where('id',$request->id);

        if($catdelete_id->delete())
        {
            return response()->json(['status'=>'100','message'=>'Delete!']);
        }else{
            return response()->json(['status'=>'200','message'=>$catdelete_id]);
        }



    }
    public  function  DeleteCat(Request $request){
        $catdelete_id=category::where('id',$request->id);

        if($catdelete_id->delete())
        {
            return response()->json(['status'=>'100','message'=>'Delete!']);
        }else{
            return response()->json(['status'=>'200','message'=>$catdelete_id]);
        }



    }
    public  function  EditCat(Request $request){
        $catdelete_id=category::where('id',$request->id)->update([
            'name'=>$request->NameCat,
            'parentId'=>$request->parent_id
        ]);

        if($catdelete_id)
        {
            return response()->json(['status'=>'100','message'=>'Update!']);
        }else{
            return response()->json(['status'=>'200','message'=>$catdelete_id]);
        }



    }

    public  function getOrder(){
        $order=Orders::all();
        return view('admin.order.listOrder',['orderlist'=>$order]);
    }
    public  function  EditProd(Request $request){

        dd('sdsd');
       /* $catdelete_id=product::where('id',$request->id)->update([
            'title'=>$request->title,
            'disc'=>$request->disc,
            'price'=>$request->price,
            'pimage'=>$request->pimage,
            'count'=>$request->count,
            'catid'=>$request->catid
        ]);

        if($catdelete_id)
        {
            return response()->json(['status'=>'100','message'=>'Update!']);
        }else{
            return response()->json(['status'=>'200','message'=>$catdelete_id]);
        }*/



    }
    public  function  ProductImage(Request $request){


        $file=$request->file('file');
        $filename=time().$file->getClientOriginalName();
        $file->move(public_path('upload/Product/'),$filename);
        return $filename;

    }
    public  function  getAddToCart(Request $request,$id){
        $product=product::find($id);
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->add($product,$product->id);

        $request->session()->put('cart',$cart);


        return view('home.cart',['ListCart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'pimage'=>$product->pimage]);

    }

    public  function  getCart(){

        return view('home.cart');
      /*  if(!Session::has('cart'))
        {
            return view('home.index');
        }
        else{

            $oldcart=Session::get('cart');
            $cart=new Cart($oldcart);
            return view('home.cart',['ListCart'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
        }*/

    }
    public  function  getCheckout(){

        return view('home.checkout');
       /* if(!Session::has('cart'))
        {
            return view('home.index');

        }else{
            $oldcart=Session::get('cart');
            $cart=new Cart($oldcart);
            return view('home.checkout',['ListCart'=>$cart->items,'totalPrice'=>$cart->totalPrice]);

        }*/
    }
    public function  AddOrder(Request $request){


        if(!Session::has('cart'))
        {
            return response()->json(['status'=>'200','message'=>'cart is emepty']);
        }elseif (Session::has('cart'))
        {
            $slidename='CK-';
            $digits = 7;
            $CodeOrder=$slidename.rand(pow(10, $digits-1), pow(10, $digits)-1);

            $order=new Orders();
          //  $order->user_id= Auth::user()->id;
            $order->fullname=$request->fullname;
            $order->mobile=$request->mobile;
            $order->email=$request->email;
            $order->telephone=$request->telephone;
            $order->address=$request->address;
            $order->province='sdsds';
            $order->zipcode=$request->zipcode;
            $order->CodeOrder=$CodeOrder;
            $order->price='0';
            $order->timereg=time();
            $order->datereg=date('Y-m-d H:i:s');
            $order->cart=json_encode(Session::get('cart')->items);
            if(Auth::user()->Orders()->save($order))
            {
                return response()->json(['status'=>'success','data'=>$order]);
            }else{
                return response()->json(['status'=>'error','message'=>'no save']);
            }


        }
    }
    public function  ListUser(){
        $user=User::all();
        return view('admin.user.listUser',['listuser'=>$user]);
    }
    public function  OrderRequest(){
        $user=User::all();
        return view('admin.user.listUser',['listuser'=>$user]);
    }
    public  function DetailsProduct($id){

        $prod=product::where('id',$id)->first();
        return view('home.Product',['product'=>$prod]);
    }
    public  function  request(){
        return view('home.request');
    }
    public  function  Addrequest(Request $request){

        $order_request=new order_request();
        $order_request->fullname=$request->fullname;
        $order_request->mobile=$request->mobile;
        $order_request->titlePro=$request->titlePro;
        $order_request->count=$request->count;
        $order_request->datereg=date('Y-m-d H:i:s');
        if($order_request->save())
        {
            return response()->json(['status'=>'100','data'=>$order_request]);
        }else{
            return response()->json(['status'=>'200','error'=>$order_request]);
        }
    }


}
