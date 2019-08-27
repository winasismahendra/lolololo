<?php

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

Route::get('/', 'MasterController@index');
Route::get('/jurusan/tkj', 'MasterController@tkj');
Route::get('/jurusan/perbankan', 'MasterController@perbankan');
Route::get('/jurusan/multimedia', 'MasterController@multimedia');
<<<<<<< HEAD
Route::get('/gallery', 'MasterController@gallery');
Route::get('/gallery/{id_album}', 'MasterController@gallery2');

=======
Route::get('/galeri', 'MasterController@galeri');
>>>>>>> 58f65a385a7a62ef6e6a42b71226c880dfc84bf2




/*admin*/

Route::get('/admin', 'AdminController@coba');

Route::get('/admin/halaman-depan/slidebar', 'AdminController@slidebar');
Route::get('/admin/slider/del/{id}', 'AdminController@slider_del')->name('del_slider');
Route::post('/admin/slider/proses', 'AdminController@slider_up')->name('up_slider');

Route::get('/admin/halaman-depan/kata-sambutan', 'AdminController@katasambutan');
Route::post('/admin/kata-depan/proses', 'AdminController@kata_up')->name('up_kata');
<<<<<<< HEAD

Route::get('/admin/halaman-depan/keunggulan', 'AdminController@keunggulan');
Route::post('/admin/keunggulan/proses', 'AdminController@keunggulan_up')->name('up_keunggulan');

Route::get('/admin/halaman-depan/kepala', 'AdminController@kepala');
Route::post('/admin/kepala/proses', 'AdminController@kepala_up2')->name('up_kepala');

Route::get('/admin/gallery/{id}', 'AdminController@gallery_edit');
Route::get('/admin/gallery/del2/{id}', 'AdminController@gallery_del2');
Route::post('/admin/gallery/{id}/proses', 'AdminController@gallery_editpros')->name('edit_gambar');
Route::post('/admin/gallery/{id}/p', 'AdminController@gallery_up2')->name('edit_gambar');
Route::get('/admin/gallery', 'AdminController@gallery');
Route::post('/admin/gallery/proses', 'AdminController@gallery_up')->name('up_gallery');

=======
Route::post('/admin/keunggulan/proses', 'AdminController@keunggulan_up')->name('up_keunggulan');

Route::get('/admin/galeri/add', 'AdminController@galeri_add')->name('galeri_add');
Route::post('/admin/galeri/store', 'AdminController@galeri_store')->name('galeri_store');

Route::get('/ppdb', 'AdminController@ppdb');

Route::get('/admin/berita/add', 'AdminController@berita_add')->name('berita_add');
Route::post('/admin/berita/store', 'AdminController@berita_store')->name('berita_store');
Route::get('/admin/berita/controller', 'AdminController@berita_controller')->name('berita_controller');
Route::post('/admin/berita/del', 'AdminController@berita_del')->name('berita_del');
Route::get('/admin/berita/edit/{id}', 'AdminController@berita_edit')->name('berita_edit');
Route::post('/admin/berita/update', 'AdminController@berita_update')->name('berita_update');
Route::get('/admin/berita/search', 'AdminController@berita_search')->name('berita_search');

//cke
Route::post('upload_image','AdminController@berita_upimage')->name('berita_upimage');
>>>>>>> 58f65a385a7a62ef6e6a42b71226c880dfc84bf2
