<?php

namespace App\Http\Controllers;

use App\Referans;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ReferansController extends Controller
{

    public function index()
    {
        $referanslar = Referans::orderby('sira','desc')->get();
        return view('adminkurumsal.referanslar.index', compact('referanslar'));
    }


    public function create()
    {
        return view('adminkurumsal.referanslar.create');
    }


    public function store(Request $request)
    {


        $this->validate(request(), array(
            'referans_adi' => 'required',
            'firma_adi' => 'required',

        ));

        $referans = new Referans();
        $referans->referans_adi = request('referans_adi');
        $referans->firma_adi = request('firma_adi');
        $referans->referans_aciklama = request('referans_aciklama');
        $referans->sira = request('sira');
        $referans->link = request('link');


        if (request()->hasFile('referans_gorseli')) {

            $validator = Validator::make($request->all(), [
                'referans_gorseli' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }

            $resim = request()->file('referans_gorseli');
            $dosya_adi = 'referans_gorseli' . '-' . time() . '.' . $resim->extension();

                if ($resim->isValid()) {

                    $hedef_klasor = 'uploads/dosyalar/klas_refr';
                    $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                    $resim->move($hedef_klasor, $dosya_adi);
                    $referans->referans_gorseli = $dosya_yolu;
                }
            }
        $referans->save();



        if ($referans) {
            alert()
                ->success('Başarılı', 'İşlem Başarılı')
                ->showConfirmButton()
                ->autoClose(2000);
            return back();


        } else {
            alert()
                ->error('Hata', 'İşlem Başarısız')
                ->showConfirmButton()
                ->autoClose(2000);
            return back();

        }
    }





    public function edit($id)
    {
        $referans = Referans::find($id);
        return view('adminkurumsal.referanslar.edit', compact('referans'));
    }


    public function update(Request $request, $id)
    {

        //Yetki Kontrol
        if(Auth::user()->yetki == null) {
            alert()
                ->error('Yetkiniz Yok', 'Demo Panelde Güncelleme Yapamassınız.')
                ->autoClose(2000);
            return back();
        }
        //Yetki Kontrol
        $this->validate(request(), array(
            'referans_adi' => 'required',
            'firma_adi' => 'required',

        ));
        $referans = Referans::find($id);
        $referans->referans_adi = request('referans_adi');
        $referans->firma_adi = request('firma_adi');
        $referans->referans_aciklama = request('referans_aciklama');
        $referans->sira = request('sira');
        $referans->link = request('link');
        if (request()->hasFile('referans_gorseli')) {

            $validator = Validator::make($request->all(), [
                'referans_gorseli' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }

            $resim = request()->file('referans_gorseli');
            $dosya_adi = 'referans_gorseli' . '-' . time() . '.' . $resim->extension();

            if ($resim->isValid()) {

                $hedef_klasor = 'uploads/dosyalar/klas_refr';
                $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                $resim->move($hedef_klasor, $dosya_adi);
                $referans->referans_gorseli = $dosya_yolu;
            }
        }
        $referans->save();


        if ($referans) {
            alert()
                ->success('Başarılı', 'İşlem Başarılı')
                ->showConfirmButton()
                ->autoClose(2000);
            return back();


        } else {
            alert()
                ->error('Hata', 'İşlem Başarısız')
                ->showConfirmButton()
                ->autoClose(2000);
            return back();

        }
    }


    public function destroy($id)
    {
        //Yetki Kontrol
        if(Auth::user()->yetki == null) {
            alert()
                ->error('Yetkiniz Yok', 'Demo Panelde Güncelleme Yapamassınız.')
                ->autoClose(2000);
            return back();
        }
        //Yetki Kontrol
        $sil = Referans::destroy($id);
        if ($sil) {
            alert()
                ->success('Başarılı', 'İşlem Başarılı')
                ->showConfirmButton()
                ->autoClose(2000);
            return back();


        } else {
            alert()
                ->error('Hata', 'İşlem Başarısız')
                ->showConfirmButton()
                ->autoClose(2000);
            return back();

        }
    }


}
