<?php

Route::get('/users',function(){
   $users = \Illuminate\Support\Facades\DB::table('users')->get();
   print_r($users);
});


// eski route
//Route::get('/','indexController@index');
// yeni route
//Route::get('/',[\App\Http\Controllers\admin\indexController::class,'index']);


Route::get('/kitap/detay/{selflink}','front\kitap\indexController@index')->name('kitap.detay');
Route::get('/kategori/{selflink}','front\cat\indexController@index')->name('cat');
Route::get('/search','front\search\indexController@index')->name('search');
Route::get('/basket/add{id}','front\basket\indexController@add')->name('basket.add');
Route::get('/basket/remove/{id}','front\basket\indexController@remove')->name('basket.remove');
Route::get('/basket/flush','front\basket\indexController@flush')->name('basket.flush');
Route::get('/basket/complate','front\basket\indexController@complate')->name('basket.complate')->middleware(['auth']); //giriş yapmadan sayfaya erişilemesin
Route::post('/basket/complate','front\basket\indexController@complateStore')->name('basket.complateStore')->middleware(['auth']); // form olacagı için post ile gönderdik
Route::get('/basket','front\basket\indexController@index')->name('basket.index');

Auth::routes();

Route::group(['namespace'=>'admin','prefix'=>'admin','as'=>'admin.','middleware'=>['auth','AdminCtrl']],function (){
    Route::get('/','indexController@index')->name('index'); // adminin içindeki index

    Route::group(['namespace'=>'yayinevi','prefix'=>'yayinevi','as'=>'yayinevi.'],function(){
        Route::get('/','indexController@index')->name('index'); // adminin içindeki yayinevinin içindeki index
        Route::get('/ekle','indexController@create')->name('create');
        Route::post('/ekle','indexController@store')->name('create.post');
        Route::get('/düzenle/{id}','indexController@edit')->name('edit');
        Route::post('/düzenle/{id}','indexController@update')->name('edit.post');
        Route::get('/sil/{id}','indexController@delete')->name('delete');

    });

    Route::group(['namespace'=>'yazar','prefix'=>'yazar','as'=>'yazar.'],function(){
        Route::get('/','indexController@index')->name('index');
        Route::get('/ekle','indexController@create')->name('create');
        Route::post('/ekle','indexController@store')->name('create.post');
        Route::get('/düzenle/{id}','indexController@edit')->name('edit');
        Route::post('/düzenle/{id}','indexController@update')->name('edit.post');
        Route::get('/sil/{id}','indexController@delete')->name('delete');

    });

    Route::group(['namespace'=>'kitap','prefix'=>'kitap','as'=>'kitap.'],function(){
        Route::get('/','indexController@index')->name('index');
        Route::get('/ekle','indexController@create')->name('create');
        Route::post('/ekle','indexController@store')->name('create.post');
        Route::get('/düzenle/{id}','indexController@edit')->name('edit');
        Route::post('/düzenle/{id}','indexController@update')->name('edit.post');
        Route::get('/sil/{id}','indexController@delete')->name('delete');

    });

    Route::group(['namespace'=>'kategori','prefix'=>'kategori','as'=>'kategori.'],function(){
        Route::get('/','indexController@index')->name('index');
        Route::get('/ekle','indexController@create')->name('create');
        Route::post('/ekle','indexController@store')->name('create.post');
        Route::get('/düzenle/{id}','indexController@edit')->name('edit');
        Route::post('/düzenle/{id}','indexController@update')->name('edit.post');
        Route::get('/sil/{id}','indexController@delete')->name('delete');

    });

    Route::group(['namespace'=>'slider','prefix'=>'slider','as'=>'slider.'],function(){
        Route::get('/','indexController@index')->name('index');
        Route::get('/ekle','indexController@create')->name('create');
        Route::post('/ekle','indexController@store')->name('create.post');
        Route::get('/düzenle/{id}','indexController@edit')->name('edit');
        Route::post('/düzenle/{id}','indexController@update')->name('edit.post');
        Route::get('/sil/{id}','indexController@delete')->name('delete');

    });

    Route::group(['namespace'=>'order','prefix'=>'order','as'=>'order.'],function(){
        Route::get('/','indexController@index')->name('index');
        Route::get('/ekle','indexController@create')->name('create');
        Route::post('/ekle','indexController@store')->name('create.post');
        Route::get('/detail/{id}','indexController@detail')->name('detail');
        Route::get('/sil/{id}','indexController@delete')->name('delete');

    });


});

Route::get('/','front\indexController@index')->name('index');
