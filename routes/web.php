<?php

use App\Http\Controllers\pegawaiController;

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
Auth::routes();

Route::group(['prefix' => '', 'middleware' => 'auth'], function () {
    Route::get('/', 'simpegController@index')->name('dashboard');
});

Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {

    //ROUTE ADMIN//
    Route::get('admin_page', 'adminController@adminn')->name('admin_page');
    //Route::get('/', 'simpegController@index')->name('dashboard');    
    Route::get('admin/biodata_pegawai', 'pegawaiController@tampildatapegawai')->name('data.pegawai');

    Route::get('admin/tambahdata', 'pegawaiController@create')->name('tambah.pegawai');
    Route::post('admin/tambahdata/store', 'pegawaiController@storepegawai')->name('save.biodata_pegawai'); //tampil form tambah pegawai
    Route::get('admin/editpegawai/{id}', 'pegawaiController@edit')->name('editpegawai'); //tampil form edit
    Route::put('admin/update/pegawai', 'pegawaiController@update')->name('save.editpegawai'); //submit dari editpegawai
    Route::get('admin/view/{id}', 'pegawaiController@show')->name('showpegawai');
    Route::get('admin/printpegawai/{id}', 'pdfController@cetakindividupegawai')->name('printpegawai');
    Route::get('admin/printsemua_peg/', 'pdfController@print')->name('printsemua_peg');
    Route::post('admin/biodata_pegawai/massDelete', 'pegawaiController@massDelete')->name('massdeletepegawai');
    Route::get('admin/biodata_pegawai/pdf/{ids}', 'pegawaiController@generatePDF')->name('pdfpegawai');
    Route::get('search', 'pegawaiController@search')->name('searchpegawai');

    Route::group(['prefix' => 'admin/biodata_pegawai'], function () {

        Route::group(['prefix' => 'data-anak'], function () {

            Route::post('create', [
                'uses' => 'riwayatController@createDataAnak',
                'as' => 'create.data-anak'
            ]);

            Route::get('edit/{id}', [
                'uses' => 'riwayatController@editDataAnak',
                'as' => 'edit.data-anak'
            ]);

            Route::put('update/{id}', [
                'uses' => 'riwayatController@updateDataAnak',
                'as' => 'update.data-anak'
            ]);

            Route::get('delete/{id}', [
                'uses' => 'riwayatController@deleteDataAnak',
                'as' => 'delete.data-anak'
            ]);

        });

        Route::group(['prefix' => 'data-bahasa'], function () {

            Route::post('create', [
                'uses' => 'riwayatController@createDataBahasa',
                'as' => 'create.data-bahasa'
            ]);

            Route::get('edit/{id}', [
                'uses' => 'riwayatController@editDataBahasa',
                'as' => 'edit.data-bahasa'
            ]);

            Route::put('update/{id}', [
                'uses' => 'riwayatController@updateDataBahasa',
                'as' => 'update.data-bahasa'
            ]);

            Route::get('delete/{id}', [
                'uses' => 'riwayatController@deleteDataBahasa',
                'as' => 'delete.data-bahasa'
            ]);

        });

        Route::group(['prefix' => 'data-cuti'], function () {

            Route::post('create', [
                'uses' => 'riwayatController@createDataCuti',
                'as' => 'create.data-cuti'
            ]);

            Route::get('edit/{id}', [
                'uses' => 'riwayatController@editDataCuti',
                'as' => 'edit.data-cuti'
            ]);

            Route::put('update/{id}', [
                'uses' => 'riwayatController@updateDataCuti',
                'as' => 'update.data-cuti'
            ]);

            Route::get('delete/{id}', [
                'uses' => 'riwayatController@deleteDataCuti',
                'as' => 'delete.data-cuti'
            ]);

        });

        Route::group(['prefix' => 'data-diklat'], function () {

            Route::post('create', [
                'uses' => 'riwayatController@createDataDiklat',
                'as' => 'create.data-diklat'
            ]);

            Route::get('edit/{id}', [
                'uses' => 'riwayatController@editDataDiklat',
                'as' => 'edit.data-diklat'
            ]);

            Route::put('update/{id}', [
                'uses' => 'riwayatController@updateDataDiklat',
                'as' => 'update.data-diklat'
            ]);

            Route::get('delete/{id}', [
                'uses' => 'riwayatController@deleteDataDiklat',
                'as' => 'delete.data-diklat'
            ]);

        });

        Route::group(['prefix' => 'data-gaji'], function () {

            Route::post('create', [
                'uses' => 'riwayatController@createDataGaji',
                'as' => 'create.data-gaji'
            ]);

            Route::get('edit/{id}', [
                'uses' => 'riwayatController@editDataGaji',
                'as' => 'edit.data-gaji'
            ]);

            Route::put('update/{id}', [
                'uses' => 'riwayatController@updateDataGaji',
                'as' => 'update.data-gaji'
            ]);

            Route::get('delete/{id}', [
                'uses' => 'riwayatController@deleteDataGaji',
                'as' => 'delete.data-gaji'
            ]);

        });

        Route::group(['prefix' => 'data-hukuman'], function () {

            Route::post('create', [
                'uses' => 'riwayatController@createDataHukuman',
                'as' => 'create.data-hukuman'
            ]);

            Route::get('edit/{id}', [
                'uses' => 'riwayatController@editDataHukuman',
                'as' => 'edit.data-hukuman'
            ]);

            Route::put('update/{id}', [
                'uses' => 'riwayatController@updateDataHukuman',
                'as' => 'update.data-hukuman'
            ]);

            Route::get('delete/{id}', [
                'uses' => 'riwayatController@deleteDataHukuman',
                'as' => 'delete.data-hukuman'
            ]);

        });

        Route::group(['prefix' => 'data-jabatan'], function () {

            Route::post('create', [
                'uses' => 'riwayatController@createDataJabatan',
                'as' => 'create.data-jabatan'
            ]);

            Route::get('edit/{id}', [
                'uses' => 'riwayatController@editDataJabatan',
                'as' => 'edit.data-jabatan'
            ]);

            Route::put('update/{id}', [
                'uses' => 'riwayatController@updateDataJabatan',
                'as' => 'update.data-jabatan'
            ]);

            Route::get('delete/{id}', [
                'uses' => 'riwayatController@deleteDataJabatan',
                'as' => 'delete.data-jabatan'
            ]);

        });

        Route::group(['prefix' => 'data-kursus'], function () {

            Route::post('create', [
                'uses' => 'riwayatController@createDataKursus',
                'as' => 'create.data-kursus'
            ]);

            Route::get('edit/{id}', [
                'uses' => 'riwayatController@editDataKursus',
                'as' => 'edit.data-kursus'
            ]);

            Route::put('update/{id}', [
                'uses' => 'riwayatController@updateDataKursus',
                'as' => 'update.data-kursus'
            ]);

            Route::get('delete/{id}', [
                'uses' => 'riwayatController@deleteDataKursus',
                'as' => 'delete.data-kursus'
            ]);

        });

        Route::group(['prefix' => 'data-organisasi'], function () {

            Route::post('create', [
                'uses' => 'riwayatController@createDataOrganisasi',
                'as' => 'create.data-organisasi'
            ]);

            Route::get('edit/{id}', [
                'uses' => 'riwayatController@editDataOrganisasi',
                'as' => 'edit.data-organisasi'
            ]);

            Route::put('update/{id}', [
                'uses' => 'riwayatController@updateDataOrganisasi',
                'as' => 'update.data-organisasi'
            ]);

            Route::get('delete/{id}', [
                'uses' => 'riwayatController@deleteDataOrganisasi',
                'as' => 'delete.data-organisasi'
            ]);

        });

        Route::group(['prefix' => 'data-pangkat'], function () {

            Route::post('create', [
                'uses' => 'riwayatController@createDataPangkat',
                'as' => 'create.data-pangkat'
            ]);

            Route::get('edit/{id}', [
                'uses' => 'riwayatController@editDataPangkat',
                'as' => 'edit.data-pangkat'
            ]);

            Route::put('update/{id}', [
                'uses' => 'riwayatController@updateDataPangkat',
                'as' => 'update.data-pangkat'
            ]);

            Route::get('delete/{id}', [
                'uses' => 'riwayatController@deleteDataPangkat',
                'as' => 'delete.data-pangkat'
            ]);

            Route::group(['prefix' => 'petikan'], function () {

                Route::get('fungsional/{nip}', [
                    'uses' => 'riwayatController@petikanFungsional',
                    'as' => 'petikan.fungsional'
                ]);

                Route::get('fungsional-struktural/{nip}', [
                    'uses' => 'riwayatController@petikanFungsionalStruktural',
                    'as' => 'petikan.fungsional-struktural'
                ]);

                Route::get('perorangan/{nip}', [
                    'uses' => 'riwayatController@petikanPerorangan',
                    'as' => 'petikan.perorangan'
                ]);

                Route::get('struktural/{nip}', [
                    'uses' => 'riwayatController@petikanStruktural',
                    'as' => 'petikan.struktural'
                ]);

                Route::get('struktural-perorangan/{nip}', [
                    'uses' => 'riwayatController@petikanStrukturalPerorangan',
                    'as' => 'petikan.struktural-perorangan'
                ]);

                Route::get('sk-perorangan/{nip}', [
                    'uses' => 'riwayatController@petikanSKPerorangan',
                    'as' => 'petikan.sk-perorangan'
                ]);

            });

        });

        Route::group(['prefix' => 'data-penataran'], function () {

            Route::post('create', [
                'uses' => 'riwayatController@createDataPenataran',
                'as' => 'create.data-penataran'
            ]);

            Route::get('edit/{id}', [
                'uses' => 'riwayatController@editDataPenataran',
                'as' => 'edit.data-penataran'
            ]);

            Route::put('update/{id}', [
                'uses' => 'riwayatController@updateDataPenataran',
                'as' => 'update.data-penataran'
            ]);

            Route::get('delete/{id}', [
                'uses' => 'riwayatController@deleteDataPenataran',
                'as' => 'delete.data-penataran'
            ]);

        });

        Route::group(['prefix' => 'data-pendidikan'], function () {

            Route::post('create', [
                'uses' => 'riwayatController@createDataPendidikan',
                'as' => 'create.data-pendidikan'
            ]);

            Route::get('edit/{id}', [
                'uses' => 'riwayatController@editDataPendidikan',
                'as' => 'edit.data-pendidikan'
            ]);

            Route::put('update/{id}', [
                'uses' => 'riwayatController@updateDataPendidikan',
                'as' => 'update.data-pendidikan'
            ]);

            Route::get('delete/{id}', [
                'uses' => 'riwayatController@deleteDataPendidikan',
                'as' => 'delete.data-pendidikan'
            ]);

        });

        Route::group(['prefix' => 'data-penghargaan'], function () {

            Route::post('create', [
                'uses' => 'riwayatController@createDataPenghargaan',
                'as' => 'create.data-penghargaan'
            ]);

            Route::get('edit/{id}', [
                'uses' => 'riwayatController@editDataPenghargaan',
                'as' => 'edit.data-penghargaan'
            ]);

            Route::put('update/{id}', [
                'uses' => 'riwayatController@updateDataPenghargaan',
                'as' => 'update.data-penghargaan'
            ]);

            Route::get('delete/{id}', [
                'uses' => 'riwayatController@deleteDataPenghargaan',
                'as' => 'delete.data-penghargaan'
            ]);

        });

        Route::group(['prefix' => 'data-penugasan'], function () {

            Route::post('create', [
                'uses' => 'riwayatController@createDataPenugasan',
                'as' => 'create.data-penugasan'
            ]);

            Route::get('edit/{id}', [
                'uses' => 'riwayatController@editDataPenugasan',
                'as' => 'edit.data-penugasan'
            ]);

            Route::put('update/{id}', [
                'uses' => 'riwayatController@updateDataPenugasan',
                'as' => 'update.data-penugasan'
            ]);

            Route::get('delete/{id}', [
                'uses' => 'riwayatController@deleteDataPenugasan',
                'as' => 'delete.data-penugasan'
            ]);

        });

        Route::group(['prefix' => 'data-seminar'], function () {

            Route::post('create', [
                'uses' => 'riwayatController@createDataSeminar',
                'as' => 'create.data-seminar'
            ]);

            Route::get('edit/{id}', [
                'uses' => 'riwayatController@editDataSeminar',
                'as' => 'edit.data-seminar'
            ]);

            Route::put('update/{id}', [
                'uses' => 'riwayatController@updateDataSeminar',
                'as' => 'update.data-seminar'
            ]);

            Route::get('delete/{id}', [
                'uses' => 'riwayatController@deleteDataSeminar',
                'as' => 'delete.data-seminar'
            ]);

        });

    });

    //Route::get('admin/printpegawai/{id}', 'pdfController@cetakindividupegawai')->name('printtk2d');
    Route::get('admin/naikpangkatreg', 'penjagaanController@naikpangkatreguler')->name('naikpangkatreg');
    Route::get('admin/naikpangkatpilih', 'penjagaanController@naikpangkatpilihan')->name('naikpangkatpil');
    Route::get('admin/naikgajiberkala', 'penjagaanController@naikgajiberkala')->name('naikgajiberkala');
    Route::get('admin/bio_sks10thn', 'penjagaanController@sks10')->name('sks10thn');
    Route::get('admin/bio_sks20thn', 'penjagaanController@sks20')->name('sks20thn');
    Route::get('admin/bio_sks30thn', 'penjagaanController@sks30')->name('sks30thn');
    Route::get('admin/usiapensiun', 'penjagaanController@usiapensiun')->name('usiapensiun');
    Route::get('admin/naiktk2d', 'penjagaanController@naiktk2d')->name('naiktk2d');
    Route::get('admin/biodata_pegawai/filter-agama', 'filterPegawaiController@filterAgamaDataPegawai')->name('data.pegawai.Agama');
    Route::get('admin/biodata_pegawai/filter-golongan', 'filterPegawaiController@filterGolDataPegawai')->name('data.pegawai.Golongan');
    Route::get('admin/biodata_pegawai/filter-pangkat', 'filterPegawaiController@filterPangkatDataPegawai')->name('data.pegawai.Pangkat');
    Route::get('admin/biodata_pegawai/filter-kelamin', 'filterPegawaiController@filterJkDataPegawai')->name('data.pegawai.Kelamin');


    //ROUTE USER//
    Route::get('user/bio_Pegawai', 'userController@index')->name('data.pegawaiUser');
    Route::get('user/reg_Naikpngkt', 'penjagaanController@reg_naikpngkt')->name('reg.naikpangkat.User');
    Route::get('user/pil_Naikpngkt', 'penjagaanController@pil_naikpangkat')->name('pil.naikpangkat.User');
    Route::get('user/naik_Gaji_Berkala', 'penjagaanController@reg_naikpngkt')->name('naik_Gajikala.User');
    Route::get('user/SKS_10', 'penjagaanController@SKS_10')->name('SKS_10.User');
    Route::get('user/SKS_20', 'penjagaanController@SKS_20')->name('SKS_20.User');
    Route::get('user/SKS_30', 'penjagaanController@SKS_30')->name('SKS_30.User');
    Route::get('user/SKS_30', 'penjagaanController@SKS_30')->name('SKS_30.User');
    Route::get('user/usia_Pensiun', 'penjagaanController@usia_Pensiun')->name('usia_Pensiun.User');
    Route::get('user/naik_TK2D', 'penjagaanController@naik_TK2D')->name('naik_TK2D.User');
    Route::get('user/bio_Pegawai/filter-Agama', 'filterPegawaiController@filterAgamaDataPegawai_User')->name('data.pegawai.Agama.User');
    Route::get('user/bio_Pegawai/filter-Golongan', 'filterPegawaiController@filterGolDataPegawai_User')->name('data.pegawai.Golongan.User');
    Route::get('user/bio_Pegawai/filter-Pangkat', 'filterPegawaiController@filterPangkatDataPegawai_User')->name('data.pegawai.Pangkat.User');
    Route::get('user/bio_Pegawai/filter-Jk', 'filterPegawaiController@filterJkDataPegawai_User')->name('data.pegawai.Kelamin.User');


    Route::get('biodata_naikpangkatreg', 'penjagaanController@naikpangkatreguler')->name('biodata_naikpangkatreg');
    Route::get('biodata_naikpangkatpilih', 'penjagaanController@naikpangkatpilihan');
    Route::get('biodata_naikgajiberkala', 'penjagaanController@naikgajiberkala');
    Route::get('biodata_usiapensiun', 'penjagaanController@usiapensiun');
    Route::get('biodata_naiktk2d', 'penjagaanController@naiktk2d');
    Route::post('tambah/pegawai', 'tampildataController@savepegawai')->name('save.pegawai');

    Route::group(['prefix' => 'berkas-pegawai'], function () {

        Route::get('{nip}', [
            'uses' => 'BerkasPegawaiController@showBerkasPegawai',
            'as' => 'show.berkas-pegawai'
        ]);

        Route::get('{nip}/{berkas}/unduh', [
            'uses' => 'BerkasPegawaiController@unduhBerkasPegawai',
            'as' => 'unduh.berkas-pegawai'
        ]);

        Route::post('unggah', [
            'uses' => 'BerkasPegawaiController@unggahBerkasPegawai',
            'as' => 'unggah.berkas-pegawai',
            'middleware' => 'user'
        ]);

        Route::put('verify', [
            'uses' => 'BerkasPegawaiController@verifyBerkasPegawai',
            'as' => 'verify.berkas-pegawai',
            'middleware' => 'admin'
        ]);

    });

    Route::group(['prefix' => 'riwayat-mutasi'], function () {

        Route::get('/', [
            'uses' => 'RiwayatMutasi@showRiwayatMutasi',
            'as' => 'show.riwayat-mutasi'
        ]);

        Route::get('{id}/berkas', [
            'uses' => 'RiwayatMutasi@showBerkasMutasi',
            'as' => 'show.berkas-mutasi'
        ]);

        Route::get('{nip}/berkas/{berkas}/unduh', [
            'uses' => 'RiwayatMutasi@unduhBerkasMutasi',
            'as' => 'unduh.berkas-mutasi'
        ]);

        Route::group(['prefix' => 'user', 'middleware' => 'user'], function () {

            Route::post('create', [
                'uses' => 'RiwayatMutasi@createRiwayatMutasi',
                'as' => 'create.riwayat-mutasi'
            ]);

            Route::put('update', [
                'uses' => 'RiwayatMutasi@updateRiwayatMutasi',
                'as' => 'update.riwayat-mutasi'
            ]);

            Route::get('{id}/delete', [
                'uses' => 'RiwayatMutasi@deleteRiwayatMutasi',
                'as' => 'delete.riwayat-mutasi'
            ]);

            Route::post('berkas/unggah', [
                'uses' => 'RiwayatMutasi@unggahBerkasMutasi',
                'as' => 'unggah.berkas-mutasi'
            ]);

        });

        Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {

            Route::put('verify', [
                'uses' => 'RiwayatMutasi@verifyRiwayatMutasi',
                'as' => 'verify.riwayat-mutasi'
            ]);

            Route::put('berkas/verify', [
                'uses' => 'RiwayatMutasi@verifyBerkasMutasi',
                'as' => 'verify.berkas-mutasi'
            ]);

        });

    });

});