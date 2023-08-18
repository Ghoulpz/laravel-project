<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/addProduct', function () {
    return view('pages.addProduct');
}
)->middleware(['auth', 'verified'])->name('pages.addProduct');

Route::get('/MINECRAFT', function (Request $request) {
    $gameNumb = '1';
    $Product = Product::where('GameNumber', $gameNumb)->first();
    return view('pages.game1', ['Product'=>$Product]);
}
)->middleware(['auth', 'verified'])->name('pages.game1');

Route::get('/CSGO', function (Request $request) {
    $gameNumb = '2';
    $Product = Product::where('GameNumber', $gameNumb)->first();
    return view('pages.game2', ['Product'=>$Product]);
}
)->middleware(['auth', 'verified'])->name('pages.game2');

Route::get('/DOTA2', function (Request $request) {
    $gameNumb = '3';
    $Product = Product::where('GameNumber', $gameNumb)->first();
    return view('pages.game3', ['Product'=>$Product]);
}
)->middleware(['auth', 'verified'])->name('pages.game3');

Route::get('/Support', function (){
    return view('pages.support');
}
)->middleware(['auth', 'verified'])->name('pages.support');

Route::get('/MyProducts', function (){
    return view('pages.MyProducts');
}
)->middleware(['auth', 'verified'])->name('pages.MyProducts');

Route::get('/Wallet', function (){
    return view('pages.Wallet');
}
)->middleware(['auth', 'verified'])->name('pages.Wallet');

Route::post('/addProduct', function (Request $request) {
    $author = auth()->user()->name;
    $productName = $request->ProductName;
    $description = $request->Description;
    $price = $request->Price;
    $gameNumber = $request->GameNumber;
    $product = new Product();
    $product->ProductName = $productName;
    $product->Description = $description;
    $product->Price = $price;
    $product->GameNumber = $gameNumber;
    $product->Author = $author;
    $product->save();
    return view('pages.AddedProduct');
}
);
Route::get('/Product/{id}', function (Request $request){
$ProductId = $request->id;
$Product = Product::where('id', $ProductId)->first();
    return view('pages.Product', ['Product'=>$Product]);
}
);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
