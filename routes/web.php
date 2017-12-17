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
    return view('welcome',[]);
 });

Route::get('/admin', function () {
    if($user = Auth::user())
    {
        return view('admin',[]);
    }
    else{
        return redirect('/');
    }
    
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

Route::get('/login', 'AuthController@index')->name('auth');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
 });

 
Auth::routes();


Route::get('/register', function(){
    return redirect('/');
} );

Route::post('/register', function(){
    return redirect('/');
});


    



