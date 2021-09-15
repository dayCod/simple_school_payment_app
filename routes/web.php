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
// INI BUAT MENENTUKAN PATH SETELAH MELAKUKAN TAHAP LOGIN 
Route::get('/redirect', function(){
    if(Auth::check() && Auth::user()->level == 'admin'){
        return redirect('admin/halaman_admin');
    }elseif(Auth::check() && Auth::user()->level == 'petugas'){
        return redirect('admin/halaman_petugas');
    }else{
        return redirect('/');
    }
});

Route::get('/', function () {
    return view('welcome');
});

   


// Route::group(['middleware' => 'role'], function() {
//    Route::get('layout_siswa.index','siswaController@index'); 
// });




//siswa 




// admin route

Route::get('logout_admin','indexController@logout_admin')->name('logout_admin');
Route::get('logout_petugas','indexController@logout_petugas')->name('logout_petugas');
Route::get('logout_siswa','siswaController@logout_siswa')->name('logout_siswa');
Route::get('cvghequiyd1cv','indexController@register');
Route::post('buatSaran','siswaController@buatSaran')->name('buatSaran');
Route::post('updatepass','siswaController@updatepass')->name('updatepass');

// approving
Route::post('approve/{id}', 'crudDataSppController@approve');
// end

// Route::post('loginAction','adminController@loginAction')->name('loginAction');
Route::post('regAction','adminController@regAction')->name('regAction');

// update kelas
// Route::get('/admin/crudDataKelas/edit/{id}','adminController@edit');
// Route::post('/update','adminController@update');
// endofupdatekelas

	
	// Route::get('admin.allPembayaran.index','payController@index');

Route::group(['middleware' => 'admin'], function() {
		Route::get('admin/halaman_admin','adminController@index_admin');
    	Route::resource('asPetugas','crudDataPetugasController');
		Route::resource('asSiswa','crudDataSiswaController');
		Route::resource('asClass','crudDataKelasController');
		Route::resource('asSpp','crudDataSppController');
		Route::resource('status','StatusController');
		Route::resource('asSaran','saranController');
		Route::resource('asPembayaran','pembayaranController');
		Route::resource('asHistori','historiController');
		Route::get('admin/pdf/index','pdfController@index');
		Route::get('admin/pdf/detail','pdfController@detail');
		Route::get('admin/pdf/for_pdf','pdfController@for_pdf');
		Route::get('getValue','pdfController@getValue')->name('getValue');
		Route::get('cetak_pdf', 'pdfController@cetak_pdf')->name('cetak_pdf');
		Route::get('unduh_pdf', 'pdfController@unduh_pdf')->name('unduh_pdf');

});
Route::group(['middleware' => 'petugas'], function() {
		Route::get('admin/halaman_petugas','adminController@index_petugas');
    	Route::resource('asHistory','historyController');
		Route::resource('asEntri','entriController');
		Route::resource('asSaranP','bySaranController');
});

Route::group(['middleware' => 'siswa'], function() {
    Route::get('layout_siswa.index','siswaController@index'); 
});
       
//Login All() 
Route::get('login_user','adminController@showLoginForm');
Route::post('postlogin', 'adminController@postlogin')->name('postlogin');
Route::get('login_siswa','siswaController@loginForm')->name('login_siswa');
Route::post('post','siswaController@post')->name('post'); 	
	
	


	
	




Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
