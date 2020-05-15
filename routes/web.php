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

// Route::get('/', function () {
    // return view('welcome');
// });

Route::get('/', function () {
    return view('mahasiswa');
});


Route::get('','mahasiswaCont@viewMahasiswa');
Route::get('mhs/msg/{msg}','mahasiswaCont@viewMahasiswaWithMsg');
Route::get('mhs/viewtambahmahasiswa','mahasiswaCont@viewTambahMahasiswa');
Route::get('mhs/vieweditmahasiswa/{id}','mahasiswaCont@viewEditMahasiswa');
Route::get('mhs/viewdeletemahasiswa/{id}','mahasiswaCont@viewDeleteMahasiswa');
Route::post('mhs/prosestambahmahasiswa','mahasiswaCont@prosesTambahMahasiswa');
Route::post('mhs/proseseditmahasiswa','mahasiswaCont@prosesEditMahasiswa');
Route::get('mhs/prosesdeletemahasiswa/{id}','mahasiswaCont@prosesDeleteMahasiswa');


// Route::get('dosen','dosenCont@viewDosen');
// Route::get('dosen/msg/{msg}','dosenCont@viewDosenWithMsg');
// Route::get('dosen/viewtambahdosen','dosenCont@viewTambahDosen');
// Route::get('dosen/vieweditdosen/{id}','dosenCont@viewEditDosen');
// Route::get('dosen/viewdeletedosen/{id}','dosenCont@viewDeleteDosen');
// Route::post('dosen/prosestambahdosen','dosenCont@prosesTambahDosen');
// Route::post('dosen/proseseditdosen','dosenCont@prosesEditDosen');
// Route::get('dosen/prosesdeletedosen/{id}','dosenCont@prosesDeleteDosen');

Route::get('jurusan','jurusanCont@viewJurusan');

//Route::resource('/makanan', 'MakananController');