<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Customer;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('test',function(Request $request){
    Customer::create([
        'name' => $request->name,
        'email' => $request->email,
        'address' => $request->address,
        'phone' => $request->phone,
        'age' => $request->age
    ]);

    return "create success";
});
