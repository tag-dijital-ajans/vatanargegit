<?php

namespace App\Http\Controllers;

use App\Ekip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EkipController extends Controller
{

    public function index()
    {
        $ekipler = Ekip::all();
        return view('adminkurumsal.ekip.index', compact('ekipler'));
    }


    public function create()
    {
        return view('adminkurumsal.ekip.create');
    }


    public function store(Request $request)
    {
        $this->validate(request(), array(
            'ad' => 'required',


        ));

        $ekip = new Ekip();
        $ekip -> sira = request('sira');
        $ekip -> ad = request('ad');
        $ekip -> gorev = request('gorev');
        $ekip -> twitter = request('twitter');
        $ekip -> linkedin = request('linkedin');

        if (request()->hasFile('fotograf')) {

            $validator = Validator::make($request->all(), [
                'fotograf' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }

            $resim = request()->file('fotograf');
            $dosya_adi = 'ekip' . '-' . time() . '.' . $resim->extension();

            if ($resim->isValid()) {

                $hedef_klasor = 'uploads/ekip';
                $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                $resim->move($hedef_klasor, $dosya_adi);
                $ekip->fotograf = $dosya_yolu;


            }
        }

        $ekip->save();



        if ($ekip) {
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
        $ekip = Ekip::find($id);
        return view('adminkurumsal.ekip.edit', compact('ekip'));
    }


    public function update(Request $request, $id)
    {
        $this->validate(request(), array(
            'ad' => 'required',
            'gorev' => 'required',
            'sira' => 'required',


        ));

        $ekip = Ekip::find($id);
        $ekip -> sira = request('sira');
        $ekip -> ad = request('ad');
        $ekip -> gorev = request('gorev');
        $ekip -> twitter = request('twitter');
        $ekip -> linkedin = request('linkedin');

        if (request()->hasFile('fotograf')) {

            $validator = Validator::make($request->all(), [
                'fotograf' => 'image|mimes:jpeg,png,jpg,gif,svg|max:512',
            ]);
            if (!$validator->passes()) {
                alert()
                    ->error('Foto Yüklenemedi', 'Foto Dosya Boyutu Çok Büyük')
                    ->showConfirmButton()
                    ->autoClose(2000);
                return back();
            }

            $resim = request()->file('fotograf');
            $dosya_adi = 'ekip' . '-' . time() . '.' . $resim->extension();

            if ($resim->isValid()) {

                $hedef_klasor = 'uploads/ekip';
                $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                $resim->move($hedef_klasor, $dosya_adi);
                $ekip->fotograf = $dosya_yolu;


            }
        }

        $ekip->save();



        if ($ekip) {
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
        $sil = Ekip::destroy($id);
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
