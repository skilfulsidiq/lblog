<?php

use Illuminate\Support\Facades\Route;

if(!function_exists('userFullName'))
{
    function userFullName()
    {
        return auth()->user()->name;
    }
}
if(!function_exists('setSingleActive')){
  function setSingleActive($path,$class=null){
    $active = Route::currentRouteName();
    // return Request::is($path . '*') ? ' class=active' :  '';
    if($active == $path){
      return ($class)?$class:'active';
    }else{
      return '';
    }
  }
}
