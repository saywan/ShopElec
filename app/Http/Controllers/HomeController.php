<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{

    public function index()
    {

        $product8=product::all();
        $product1=product::where('catId',1)->get();
        $product2=product::where('catId',2)->get();
        $product3=product::where('catId',3)->get();
        $product4=product::where('catId',4)->get();
        $product5=product::where('catId',5)->get();
        $product6=product::where('catId',6)->get();
        $product7=product::where('catId',7)->get();
        return view('home.index',['product1'=>$product1,'product2'=>$product2,'product3'=>$product3,'product4'=>$product4,'product5'=>$product5,'product6'=>$product6,'product7'=>$product7,'product8'=>$product8]);
    }

    public  function ShowCategory($id)
    {
        $cateinfo=product::where('catid',$id)->get();
        return view('home.category',['cate'=>$cateinfo,'cateId'=>$id]);
    }
    public  function  profile(){
        return view('home.profile');
    }
    public  function ContactUs(){
        return view('home.contactus');
    }
    public  function AboutUs(){
        return view('home.about');
    }


}
