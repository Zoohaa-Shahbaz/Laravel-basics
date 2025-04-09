<?php

use Illuminate\Support\Facades\Route;


Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/post/{id?}/comment/{commentid?}', function ($id=null,$commentid=null): string {
    if($id)
    {
          return "<h1> The id is :" .$id ." and comment is ". $commentid  . "</h1> "; 
    }

else {
    return "No ID found";
}
});


Route::get(uri: '/numberic/{num}'  ,action : function($num):string {
    return "<h1>Number is " . $num ."<h1>";

})->whereAlphaNumeric('num');

//whereAlpha
//whereAlphaNumberic

Route::get(uri: '/choice/{fav}'  ,action : function($fav):string {
    return "<h1>Favourate is " . $fav ."<h1>";

})->whereIn('fav',['Song','movie','Gaming']);


Route::get(uri: '/Fix/{fav}'  ,action : function($fav):string {
    return "<h1>Favourate is " . $fav ."<h1>";

})->where('fav','[0-9+]');


Route::get(uri: '/MuliFix/{fav}/num/{num}'  ,action : function($fav,$num):string {
    return "<h1>Favourite is " . $fav . " and number is : ".$num."  </h1>";


})->where('fav','[0-9]+')->where(name:'num',expression:'[A-Za-z]+');


//A-Za-z
