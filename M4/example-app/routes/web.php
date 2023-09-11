<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    echo view('welcome');
});

Route::get('/login', function () {
    return view('login'); 
});

Route::post('/login', function(Illuminate\Http\Request $post){
//fs
$username = $post->username;
$password = $post->password;
if($username == 'admin' && $password == 123){
    return view('xinchao_admin');
}
return view('login_error');
});

Route::get('/input', function(){
    return view('input');
});

Route::post('/input', function(\Illuminate\Http\Request $request){
$description = $request->description;
$price = $request->price;
$percent = $request->percent;
$discountAmount = $price*$percent*0.1;
return view('show_discount_amount', compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent']));

}
);

