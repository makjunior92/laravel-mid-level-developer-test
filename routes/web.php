<?php

use Illuminate\Support\Facades\Route;
use App\Buyer;
use App\Diary;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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








// start:: second buyer with eloquent

Route::get('/second-buyer-eloquent', function () {
    
 $buyers = Buyer::all()->sortByDesc('total_items_taken')->skip(1)->take(1);
 
 return view('second-buyer-eloquent', compact('buyers'));

});







// start:: second buyer without eloquent

Route::get('/second-buyer-no-eloquent', function() {

    $rows = DB::select("SELECT buyers.id id, buyers.name name, diaries.diary_taken diaries_taken, erasers.eraser_taken erasers_taken, pens.pen_taken pens_taken FROM buyers JOIN diaries ON ( buyers.id = diaries.buyer_id ) JOIN erasers ON ( buyers.id = erasers.buyer_id ) JOIN pens ON ( buyers.id = pens.buyer_id )");
   

    $buyers = collect([]);

     foreach($rows as $row){

        $buyers->push(
            
          [
              "id"=>$row->id,
              "name"=>$row->name, 
              "diaries_taken"=>$row->diaries_taken,
              "erasers_taken"=>$row->erasers_taken,
              "pens_taken"=>$row->pens_taken,
              "total_items_taken"=>$row->diaries_taken + $row->pens_taken + $row->erasers_taken
          ]  
        
        );

       
     }


     $buyers = $buyers->sortByDesc('total_items_taken')->skip(1)->take(1);
    
     return view('/second-buyer-no-eloquent',compact('buyers'));
});









// start::purchase list with eloquent

Route::get('/purchase-list-eloquent', function () {
    
    $buyers = Buyer::all();
   
    return view('purchase-list-eloquent', compact('buyers'));
   
   });







   // start:: purchase list without eloquent

Route::get('/purchase-list-no-eloquent', function() {

    $rows = DB::select("SELECT buyers.id id, buyers.name name, diaries.diary_taken diaries_taken, erasers.eraser_taken erasers_taken, pens.pen_taken pens_taken FROM buyers JOIN diaries ON ( buyers.id = diaries.buyer_id ) JOIN erasers ON ( buyers.id = erasers.buyer_id ) JOIN pens ON ( buyers.id = pens.buyer_id )");
   

    $buyers = collect([]);

     foreach($rows as $row){

        $buyers->push(
            
          [
              "id"=>$row->id,
              "name"=>$row->name, 
              "diaries_taken"=>$row->diaries_taken,
              "erasers_taken"=>$row->erasers_taken,
              "pens_taken"=>$row->pens_taken,
              "total_items_taken"=>$row->diaries_taken + $row->pens_taken + $row->erasers_taken
          ]  
        
        );

       
     }


     $buyers = $buyers->sortBy('total_items_taken');
     
     return view('/purchase-list-no-eloquent',compact('buyers'));
});







// start:: record transfer

   Route::get('/record-transfer', function () {

    $records = json_decode( Storage::get('public/records.json'), true )['RECORDS'];
    
   

    foreach (array_chunk($records,2500) as $chunk) {
        try {
            DB::table('records')->insert($chunk);
        } catch ( \Exception $e) {
            return "Error occurred";
        }
    }

    return "Records insterted";
});





// start:: callback js

Route::get('/define-callback-js',function(){

    return view('define-callback-js');

});






// start::sort js

Route::get('/sort-js',function(){

    return view('sort-js');

});


//start:: foreach

Route::get('/foreach-js', function(){

    return view('foreach-js');

});







// start:: filter js

Route::get('/filter-js',function(){

    return view('filter-js');

});







// start:: map-js

Route::get('/map-js',function(){

    return view('map-js');

});







// start:: reduce-js

Route::get('/reduce-js',function(){

    return view('reduce-js');

});








// start:: i am funny

Route::get('/i-m-funny',function(){

    return view('i-m-funny');

});







//start:: animation

Route::get('/animation',function(){

    return view('animation');

});







   

