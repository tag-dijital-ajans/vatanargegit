<?php

namespace App\Http\Controllers;

use App\Ayar;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Contracts\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AyarController extends Controller
{

    public function index()
    {
        $ayarlar = Ayar::find(1);
        return view('adminkurumsal.ayarlar.create',compact('ayarlar'));
    }





    public function update(Request $request, $id)
    {



        $this->validate(request(), array(
            'site_adi' => 'required'
        ));

        $ayar = Ayar::find(1);
        $ayar->site_adi = request('site_adi');
        $ayar->firma_adres = request('firma_adres');
        $ayar->email = request('email');


        $ayar->telefon = request('telefon');
        $ayar->tag_manager_kod = request('tag_manager_kod');
        $ayar->tag_manager_script = request('google_map');
        $ayar->email_smtp_sunucu = request('email_smtp_sunucu');
        $ayar->email_kullanici = request('email_kullanici');
        $ayar->email_sifre = request('email_sifre'); //Veritabanında şifre-> email_sifre  olarak değiştir.
        $ayar->footer_yazisi = request('footer_yazisi');
        $ayar->facebook = request('facebook');
        $ayar->instagram = request('instagram');
        $ayar->twitter = request('twitter');
        $ayar->linkedin = request('linkedin');
        $ayar->pinterest = request('pinterest');
        $ayar->youtube = request('youtube');
        $ayar->temarenk = request('temarenk');


        // Ana Logo Yükleme
        if (request()->hasFile('logo')) {

            $validator = Validator::make($request->all(), [
                'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }
            if (request()->hasFile('logo')) {

                $this->validate(request(), array('logo' => 'image|mimes:png,jpg,jpeg,gif|max:1024'));
                $logo = request()->file('logo');
                $dosya_adi = 'logo' . '-' . time() . '.' . $logo->extension();

                if ($logo->isValid()) {

                    $hedef_klasor = 'uploads/dosyalar/klas_logo';
                    $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                    $logo->move($hedef_klasor, $dosya_adi);
                    $ayar->logo = $dosya_yolu;

                } else {
                    alert()
                        ->error('Hata', 'Logo Uygun Değil')
                        ->showConfirmButton()
                        ->autoClose(2000);
                    return back();

                }
            }
        }
        // Logo Yükleme
// Footer Logo Yükleme
        if (request()->hasFile('footerlogo')) {

            $validator = Validator::make($request->all(), [
                'footerlogo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }
            if (request()->hasFile('footerlogo')) {

                $this->validate(request(), array('footerlogo' => 'image|mimes:png,jpg,jpeg,gif|max:1024'));
                $footerlogo = request()->file('footerlogo');
                $dosya_adi = 'footerlogo' . '-' . time() . '.' . $footerlogo->extension();

                if ($footerlogo->isValid()) {

                    $hedef_klasor = 'uploads/logo';
                    $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                    $footerlogo->move($hedef_klasor, $dosya_adi);
                    $ayar->footerlogo = $dosya_yolu;

                } else {
                    alert()
                        ->error('Hata', 'Logo Uygun Değil')
                        ->showConfirmButton()
                        ->autoClose(2000);
                    return back();

                }
            }
        }
        // Logo Yükleme

        // Favicon Yükleme
        if (request()->hasFile('favicon')) {

            $validator = Validator::make($request->all(), [
                'favicon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }
            if (request()->hasFile('favicon')) {

                $this->validate(request(), array('logo' => 'image|mimes:png,jpg,jpeg,gif|max:100'));
                $fav = request()->file('favicon');
                $favdosya_adi = 'favicon' . '-' . time() . '.' . $fav->extension();

                if ($fav->isValid()) {

                    $favhedef_klasor = 'uploads/dosyalar/klas_fav';
                    $favdosya_yolu = $favhedef_klasor . '/' . $favdosya_adi;
                    $fav->move($favhedef_klasor, $favdosya_adi);
                    $ayar->favicon = $favdosya_yolu;

                }
            }
        }
        // Favicon Yükleme

        $ayar->save();
        if($ayar){
            alert()
                ->success('Başarılı','İşlem Başarılı')
                ->showConfirmButton()

                ->autoClose(2000);
            return back();

        }else {
            alert()
                ->error('Hata','İşlem Başarısız')
                ->showConfirmButton()

                ->autoClose(2000);
            return back();

        }

    }

    public function destroy($id)
    {
        //
    }


}
