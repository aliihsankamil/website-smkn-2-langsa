<?php

use Illuminate\Routing\RouteGroup;
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

Route::get('/', 'PagesController@home');
Route::get('/sambutanKepsek', 'headmasterswordController@index2')->name('s_kepsek');
Route::get('/infoSekolah', 'PagesController@infoSekolah')->name('infoSekolah');
Route::get('/sejarah', 'HistoryController@index2')->name('sejarah');
Route::get('/visiMisi', 'PagesController@visiMisi')->name('visi_misi');
Route::get('/tenagaPendidik', 'PagesController@tenagaPendidik')->name('t_pendidik');
Route::get('/galery', 'GalleryController@index2')->name('galery');
Route::get('/jurusanall/{jurusan}', 'MajorallController@show');
Route::get('/beritaTerbaru', 'ArticleallController@index')->name('b_terbaru');
Route::get('/prestasii', 'Articleall2Controller@index')->name('prestasi');
Route::get('/beritaall/{berita}', 'ArticleallController@show');

// Route::get('/', function () {
//     return view('welcome');
// });

// admin

// Login
// Route::post('/login', 'otentikasi\OtentikasiController@login')->name('login');
// Route::get('/login', 'otentikasi\OtentikasiController@index')->name('login');
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::POST('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');

// Route::group(['middleware' => 'CekloginMiddleware'], function () {



Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function(){return view('adminPage.index');});
    //user
    Route::get('/user', 'UserController@index')->name('data_user');
    Route::post('/user', 'UserController@store')->name('tambah_user');
    //prestasi
    Route::get('/prestasi', 'PrestasiController@index')->name('data_prestasi');
    Route::get('/prestasi/create', 'PrestasiController@create')->name('tambah_prestasi');
    Route::post('/prestasi', 'PrestasiController@store')->name('tambah_data_prestasi');
    Route::get('/prestasi/{prestasi}', 'PrestasiController@show');
    Route::delete('/prestasi/{prestasi}', 'PrestasiController@destroy')->name('delete_prestasi');
    Route::get('/prestasi/{prestasi}/edit', 'PrestasiController@edit');
    Route::patch('/prestasis/{prestasi}', 'PrestasiController@update')->name('update_prestasi');
    Route::patch('/prestasiss/{prestasi}', 'PrestasiController@update2');
    //berita
    Route::get('/berita', 'BeritaController@index')->name('data_berita');
    Route::get('/berita/create', 'BeritaController@create')->name('tambah_berita');
    Route::post('/berita', 'BeritaController@store')->name('tambah_data_berita');
    Route::get('/berita/{berita}', 'BeritaController@show');
    Route::delete('/berita/{berita}', 'BeritaController@destroy')->name('delete_berita');
    Route::get('/berita/{berita}/edit', 'BeritaController@edit');
    Route::patch('/beritas/{berita}', 'BeritaController@update')->name('update_berita');
    Route::patch('/beritass/{berita}', 'BeritaController@update2');
    //galleries
    Route::get('/galleries', 'GalleryController@index')->name('data_gallery');
    Route::get('/gallery/create', 'GalleryController@create')->name('tambah_data_galery');
    Route::post('/gallery', 'GalleryController@store')->name('tambah_gallery_proses');
    Route::delete('/gallery/{galleries}', 'GalleryController@destroy')->name('delete_galery');
    Route::get('/galleries/{gallery}/edit', 'GalleryController@edit');
    Route::patch('/gallery/{gallery}', 'GalleryController@update')->name('edit_gallery_proses');
    //jurusan
    Route::get('/jurusans', 'MajorController@index')->name('data_jurusan');
    Route::get('/jurusans/create', 'MajorController@create')->name('tambah_jurusan');
    Route::post('/jurusans', 'MajorController@store')->name('tambah_data_jurusan');
    Route::get('/jurusan/{jurusan}', 'MajorController@show');
    Route::post('/descmajors', 'DescmajorController@store')->name('tambah_descmajor_proses');
    Route::delete('/jurusan/{jurusan}', 'MajorController@destroy')->name('delete_jurusan');
    Route::get('/jurusan/{jurusan}/edit', 'MajorController@edit');
    Route::patch('/jurusans/{jurusan}', 'MajorController@update');
    //sambutan kepsek
    Route::get('/headmasterswords', 'HeadmasterswordController@index')->name('data_sambutan');
    Route::post('/headmasterswords', 'HeadmasterswordController@store')->name('tambah_sambutan_proses');
    Route::delete('/headmastersword/{sambutan}', 'HeadmasterswordController@destroy')->name('delete_sambutan');
    Route::get('/headmasterswords/{sambutan}/edit', 'HeadmasterswordController@edit');
    Route::patch('/headmasterswords/{sambutan}', 'HeadmasterswordController@update');
    //sejarah
    Route::get('/histories', 'HistoryController@index')->name('history');
    Route::post('/history', 'HistoryController@store')->name('tambah_history_proses');
    Route::delete('/history/{history}', 'HistoryController@destroy')->name('delete_history');
    Route::get('/histories/{history}/edit', 'HistoryController@edit');
    Route::patch('/histories/{history}', 'HistoryController@update');
    //teacher
    Route::get('/teachers', 'TeachersController@index')->name('data_teachers');
    Route::get('/teachers/{teacher}', 'TeachersController@show');
    Route::get('/teacher/create', 'TeachersController@create')->name('tambah_teacher');
    Route::post('/teacher', 'TeachersController@store')->name('tambah_teacher_proses');
    Route::delete('/teacher/{teacher}', 'TeachersController@destroy')->name('delete_teacher');
    Route::get('/teachers/{teacher}/edit', 'TeachersController@edit');
    Route::patch('/teachers/{teacher}', 'TeachersController@update');
    // Visi
    Route::get('/visi', 'VisionsController@index')->name('data_visi');
    Route::get('/visi/create', 'VisionsController@create')->name('tambah_visi');
    Route::post('/visi', 'VisionsController@store')->name('tambah_visi_proses');
    Route::get('/visi/{id}/edit', 'VisionsController@edit')->name('edit_visi');
    Route::patch('/visi/{id}', 'VisionsController@update')->name('edit_visi_proses');
    Route::delete('/visi/{vision}', 'VisionsController@destroy')->name('delete_visi');
    // Kontak
    Route::get('/kontak', 'KontakController@index')->name('data_kontak');
    Route::get('/kontak/{id}/edit', 'KontakController@edit')->name('edit_kontak');
    Route::patch('/kontak/{id}', 'KontakController@update')->name('edit_kontak_proses');
    // Misi
    Route::get('/misi', 'MissionsController@index')->name('data_misi');
    Route::get('/misi/create', 'MissionsController@create')->name('tambah_misi');
    Route::post('/misi', 'MissionsController@store')->name('tambah_misi_proses');
    Route::delete('/misi/delete/{id}', 'MissionsController@destroy')->name('delete_misi');
    Route::get('/misi/{id}/edit', 'MissionsController@edit')->name('edit_misi');
    Route::patch('/misi/{id}', 'MissionsController@update')->name('edit_misi_proses');
    // Logout
    Route::get('/logout', 'otentikasi\OtentikasiController@logout')->name('logout');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
