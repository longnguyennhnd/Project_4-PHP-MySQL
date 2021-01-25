<?php

use Illuminate\Support\Facades\Route;
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
//Frontend


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/search', 'HomeController@gsearch');
Route::post('/search', 'HomeController@psearch');
Route::get('/menu', 'HomeController@menu');
Route::get('/chitiet-sanpham/{id}', 'HomeController@products_detail');
Route::get('/logoutclient', 'HomeController@log_out');
Route::get('/contact', 'HomeController@contact');

//Quản lý tài khoản
Route::get('/myaccount', 'HomeController@myaccount');
Route::get('cancelOrder/{id?}', 'HomeController@cancelOrder');
Route::post('Account/update/{id}', 'HomeController@changeDetailsAcc');

//comment
Route::post('/postComment', 'HomeController@postComment') -> name('postComment');

//Chu de
Route::get('/chude/{Id}', 'HomeController@show_themes');
Route::get('/chude2/{Id}', 'HomeController@show_themes2');
Route::get('/loai-san-pham/{Id}', 'HomeController@show_categories');

//Cart
Route::get('/Add-Cart/{Id}', 'CartController@AddCart');
Route::get('/Delete-Item-Cart/{Id}', 'CartController@DeleteItemCart');
Route::get('/List-Carts', 'CartController@ViewListCart');
Route::get('/Delete-Item-List-Cart/{Id}', 'CartController@DeleteItemListCart');
Route::get('/Save-Item-List-Cart/{Id}/{quanty}', 'CartController@SaveItemListCart');
// Route::get('/chitiet-sanpham/Add-Cart/{Id}', 'CartController@AddCart');

//Wishlist
Route::get('/Addtowishlist/{id}', 'HomeController@addtowishlist');
Route::get('/Wishlists', 'HomeController@getWishlists');
Route::get('Wishlists/delete/{id?}', 'HomeController@deleteItemWishlist');

//Checkout
Route::get('/Checkout', 'CartController@getCheckout');
Route::post('/Checkout', 'CartController@postCheckout');

//DangNhap
Route::get('/dangnhap-dangky', 'HomeController@getSigninup');
Route::post('/dangnhap', 'HomeController@postSignin');

//Dangky
Route::post('/dangky', 'HomeController@postSignup');

//Backend
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::post('/admin-dashboard', 'AdminController@dashboard');
Route::get('/thongke', 'AdminController@statistical');
Route::post('/thongkedoanhthu', 'AdminController@thongkedoanhthu');
Route::post('/thongketheothang', 'AdminController@ThongkeDoanhthuTheothang');

//logout
Route::get('/logout', 'AdminController@log_out');

// Quản lý loại sản phẩm
Route::get('/QLLoaiSP', 'ProductcategoriesController@index');
Route::post('QLLoaiSP/create', 'ProductcategoriesController@create') -> name('QLLoaiSP.create');
Route::post('QLLoaiSP/update/{Id}', 'ProductcategoriesController@update');
Route::get('QLLoaiSP/{id?}','ProductcategoriesController@edit');
Route::get('QLLoaiSP/delete/{id?}', 'ProductcategoriesController@delete');

//Quản lý sản phẩm
Route::get('/Product', 'ProductsController@index');
Route::post('Product/create', 'ProductsController@create') -> name('Product.create');
Route::get('Product/edit/{id?}','ProductsController@edit');
Route::post('Product/update/{Id}', 'ProductsController@update');
Route::get('Product/delete/{id?}', 'ProductsController@delete');
Route::get('/change_show_on_home/{id?}', 'ProductsController@change_show_on_home')->name('product.change_show_on_home');
Route::get('/changestatus/{id}', 'ProductsController@changeStatus')->name('product.change_status');

//Quản lý bài viết
Route::get('/Blog', 'BlogsController@index');
Route::post('Blog/create', 'BlogsController@create') -> name('Blog.create');
Route::get('Blog/edit/{id?}','BlogsController@edit');
Route::post('Blog/update/{Id}', 'BlogsController@update');
Route::get('Blog/delete/{id?}', 'BlogsController@delete');
Route::get('/change_show_on_home/{id}', 'BlogsController@change_show_on_home')->name('Blog.change_show_on_home');
Route::get('/blog_detail/{id?}', 'HomeController@blog_detail');


//Quản lý hoá đơn
Route::get('/Order', 'OrdersController@index');
Route::post('Order/Changestatus/{id}', 'OrdersController@changeStatus');
Route::get('ViewDetail/{id?}', 'OrdersController@ViewDetail');
Route::get('PDF/{id?}', 'OrdersController@getPDF');

//Mail
Route::post('/send-mail', 'CartController@SendMail');

