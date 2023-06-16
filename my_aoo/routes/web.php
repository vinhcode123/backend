<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\addtocartController;

use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('indexUser', [CustomAuthController::class, 'indexUser']);
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('trangchu', [homeController::class, 'trangchu'])->name('trangchu');
Route::get('detail_user/{id}', [CustomAuthController::class, 'getUserById'])->name('detail_user');
Route::get('404', [CustomAuthController::class, '_404'])->name('404');

Route::get('account', [CustomAuthController::class, 'account'])->name('account');

/*Blog By Vu*/
//Route::get('blog-archive', [CustomAuthController::class, 'blog1'])->name('blog1');
Route::get('blog-archive-2', [CustomAuthController::class, 'blog2'])->name('blog2');
Route::get('comments/{id}', [CustomAuthController::class, 'blog'])->name('posts');
Route::post('products/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
/* Type_products By Vu */
Route::get('type_products/{id}', [CustomAuthController::class, 'type_products'])->name('type_products');
Route::get('contact', [CustomAuthController::class, 'contact'])->name('contact');
Route::get('/', [CustomAuthController::class, 'indexUserCustomer'])->name('index');

Route::get('product', [CustomAuthController::class, 'product'])->name('product');

Route::get('success', [CustomAuthController::class, 'success'])->name('success');

Route::post('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::post('RegisterUsersAdmin', [CustomAuthController::class, 'RegisterUsersAdmin'])->name('RegisterUsersAdmin');
Route::get('AddUser', [CustomAuthController::class, 'AddUser'])->name('AddUser');
Route::post('RegisterProductsAdmin/{category_id}', [CustomAuthController::class, 'RegisterProductsAdmin'])->name('RegisterProductsAdmin');
Route::get('AddProduct', [CustomAuthController::class, 'AddProduct'])->name('AddProduct');
Route::post('DeleteUser', [CustomAuthController::class, 'DeleteUser'])->name('DeleteUser');

Route::post('DeleteProduct', [CustomAuthController::class, 'DeleteProduct'])->name('DeleteProduct');
Route::get('searchproductuser', [CustomAuthController::class, 'search']);
//route admin
Route::group(['middleware' => 'role:1'], function () {
    //admin

    Route::get('index6', [CustomAuthController::class, 'index6']);
    Route::get('index7', [CustomAuthController::class, 'index7']);
    Route::get('index5', [CustomAuthController::class, 'index5'])->name('admin');
});


// Route::get('/addtocart/{id}' , [addtocartController::class , "productaddtoCart"]);
// Route::get('/deletetocart/{id}' , [addtocartController::class , "deleteProductToCart"]);

Route::group(['middleware' => 'role:0'], function () {
    Route::get('cart', [CustomAuthController::class, 'cart'])->name('cart');
    Route::get('/addCoupon', [addtocartController::class, 'addCoupon']);
    Route::get('/addtowish/{id}', [addtocartController::class, "productaddtoWish"]);
    Route::get('/deletetowish/{id}', [addtocartController::class, "deleteProductToWish"])->name('deleteProductToWish');
    Route::get('/productdetail/{id}', [CustomAuthController::class, 'product_detail'])->name('product_detail');
    Route::get('/addtocart/{id}', [addtocartController::class, "productaddtoCart"]);
    Route::get('checkout', [CustomAuthController::class, 'checkout'])->name('checkout');
    Route::get('/deletetocart/{id}', [addtocartController::class, "deleteProductToCart"]);
    Route::get('wishlist', [CustomAuthController::class, 'wishlist'])->name('wishlist');
});


//edit admin
Route::post('/editUser', [CustomAuthController::class, 'editUser'])->name('editUser');
Route::get('/editUser')->name('editUser')->middleware('blockGetRequests');

Route::post('updateUser', [CustomAuthController::class, 'updateUser'])->name('update_user');

Route::get('updateUser')->name('update_user')->middleware('blockGetRequests');
