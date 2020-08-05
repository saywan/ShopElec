<?php


namespace App;


use App\Models\category;
use App\Models\product;

class Helper
{

    public  static function getCategory($catId)
    {

        $catinfo=category::where('id',$catId)->first();
        return $catinfo->name;
    }
    public  static function getParentCategory($catId)
    {

        $catinfo=category::where('id',$catId)->first();

        if($catinfo->parentId == 0)
        {
            echo '<span class="label l-bg-cyan shadow-style">دسته اصلی</span>';
        }else{
            return $catinfo->name;
        }

    }
    public static  function  getInfoUser($userid)
    {
        $userinfo=users::where('id',$userid)->first();
        return $userinfo->fullname;
    }
    public static  function  GetInfoProduct($id)
    {
        $userinfo=product::where('id',$id)->first();
        //echo $this->str_split_unicode($userinfo->title, 3);
        echo  $userinfo->title;
    }
    public static  function  GetNamecategory($id)
    {
        $userinfo=category::where('id',$id)->first();

        echo  $userinfo->name;
    }

}
