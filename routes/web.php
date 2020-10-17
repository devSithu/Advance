<?php

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('customerList',function(){
    $data = Customer::get();
    return view('customerList')->with(['customer'=>$data]);
});

Route::get('searching',function(Request $request){
    $search = $request->searchData;

    $result = Customer::where('name','like','%'.$search.'%')->get();

    return view('customerList')->with([ 'customer'=>$result ]);

})->name('searching');

Route::get('csv_download',function(){

        // //create csv header
        // $csv_header = ["ID","Name","Email","Address","Phone","Age","Register Date"];
        // $csv_header = CpsCSV::toLineFromArray($csv_header, 'header', []);
        // dd($csv_header);
        // //create csv body
        // $csv_body = '';
        // $start_count = 1;
        // foreach ($result as $item) {
        //     $line = [];
        //     $line[] = $start_count++;
        //     $line[] = $item['community_user_name'];
        //     $line[] = $item['view_count'];
        //     $line[] = $item['unique_count'];
        //     $line[] = $item['like_count'];
        //     $csv_body .= CpsCSV::toLineFromArray($line, null, []);
        // }
        // $csv_text = mb_convert_encoding($csv_header . $csv_body, 'SJIS-win', 'UTF-8');
        // $filename = "CategoryList.csv";

        // return CpsCSV::download($csv_text, $filename);

})->name('csv_download');

