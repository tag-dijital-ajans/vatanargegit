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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'yonetim','middleware' =>'admin'],function(){
Route::get('/','YonetimKurumsalController@index')->name('yonetimkurumsal.index');
Route::get('cikis','YonetimKurumsalController@cikis')->name('yonetim.cikis');
Route::resource('ayarlar','AyarController');
Route::resource('anasayfaayarlar','AnasayfaAyarController');
Route::resource('bloglar','BlogController');
Route::resource('kategori','KategoriController');
Route::resource('menuler','MenuController');
/*Route::post('ayarlar','AyarController@guncelle')->name('ayar.guncelle');*/
Route::resource('sayfalar','SayfaController');
Route::resource('hizmetler','HizmetController');
Route::resource('ekip','EkipController');
Route::resource('kurum','KurumController');
Route::resource('sliderlar','SliderController');
Route::resource('referanslar','ReferansController');
Route::resource('yazilar','YaziController');
Route::get('kullanicilar','YonetimKurumsalController@kullanicilar')->name('kullanicilar.index');
Route::get('kullaniciekle','YonetimKurumsalController@kullaniciekle')->name('kullanici.ekle');
Route::post('kullanicikayit','YonetimKurumsalController@kullanicikayit')->name('kullanici.kayit');
Route::get('kullaniciduzenle/{id}','YonetimKurumsalController@kullaniciduzenle')->name('kullanici.duzenle');
Route::post('kullaniciguncelle/{id}','YonetimKurumsalController@kullaniciguncelle')->name('kullanici.guncelle');
Route::delete('kullanicisil/{id}','YonetimKurumsalController@kullanicisil')->name('kullanici.sil');
Route::get('iletisim','YonetimKurumsalController@iletisim')->name('iletisim');
Route::post('iletisim','YonetimKurumsalController@iletisimgonder')->name('iletisim.gonder');

});

Auth::routes(['register' => false]);

Route::get('bakim','HomeController@bakim')->name('bakim.modu');

Route::group(['middleware' => ['bakim_modu']], function () {


//Anasayfa
Route::get('/','HomeController@index')->name('anasayfa');

//Sayfalar
Route::get('sayfa/{id}/{slug}', 'HomeController@sayfa')->name('sayfa.goster');
Route::get('/iletisim', 'HomeController@iletisim')->name('iletisim.formu');
Route::post('iletisimformu','HomeController@iletisimformgonder')->name('iletisimformu.gondeer');
//anasayfa iletşim formu için
Route::get('anasayfailetisim','HomeController@anasayfailetisim')->name('anasayfailetisim.formu');
Route::post('anasayfaform','HomeController@anasayfaformgonder')->name('anasayfaform.gonder');

Route::get('ekip','HomeController@ekip')->name('ekip.sayfasi');

//Basvuru Formları

    Route::get('kurumdisiform','HomeController@kurumdisiform')->name('kurumdisi.form');
    Route::post('kurumdisiform','HomeController@kurumdisiformgonder')->name('kurumdisiform.gonder');
    Route::get('kurumiciform', 'HomeController@kurumiciform')->name('kurumici.form');
    Route::post('kurumiciform','HomeController@kurumiciformgonder')->name('kurumiciform.gonder');

//Hizmetler
//Route::get('/hizmetler','HomeController@hizmetler')->name('hizmetleri.goster');
Route::get('/birimler','HomeController@hizmetler')->name('hizmetleri.goster');
Route::get('/hizmet/{id}/{slug}','HomeController@hizmet');

//Haberler (İcerikler)
Route::get('/haberler','HomeController@haberler')->name('haberler.goster');
Route::get('/haber/{id}/{slug}','HomeController@haber');

});