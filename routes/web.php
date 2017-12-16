<?php
use App\Models\Gear;
use Illuminate\Http\Request;
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
   return view('welcome',['name'=>'Jasper']);
});

Route::get('/admin', function () {
    return view('admin',[]);
 });

 Route::get('/gear', function () {
    $gears=DB::table('gears')->get();     
    return view('gear',['gears'=>$gears]);
 });

 Route::post('/gear', function (Request $request) {    
    $gear = new Gear;
    $gear->brand = $request->brand;  
    $gear->type = $request->type;
    $gear->image = $request->image;
    $gear->sort = $request->sort;
    $gear->save();
    return redirect('/');
});