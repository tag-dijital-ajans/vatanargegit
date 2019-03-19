<?php

namespace App\Http\Controllers;

use App\Kurum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KurumController extends Controller
{
    public function index()
    {
        $kurumlar = Kurum::orderby('sira','desc')->get();
        return view('adminkurumsal.kurumlogo.index', compact('kurumlar'));
    }


    public function create()
    {
        return view('adminkurumsal.kurumlogo.create');
    }


    public function store(Request $request)
    {


        $this->validate(request(), array(
            'kurumadi' => 'required',


        ));

        $kurumlar = new Kurum();
        $kurumlar->kurumadi = request('kurumadi');
        $kurumlar->aciklama = request('aciklama');
        $kurumlar->sira = request('sira');
        $kurumlar->link = request('link');


        if (request()->hasFile('logo')) {

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

            $resim = request()->file('logo');
            $dosya_adi = 'kurumlogo' . '-' . time() . '.' . $resim->extension();

            if ($resim->isValid()) {

                $hedef_klasor = 'uploads/kurum';
                $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                $resim->move($hedef_klasor, $dosya_adi);
                $kurumlar->logo = $dosya_yolu;
            }
        }
        $kurumlar->save();



        if ($kurumlar) {
            alert()
                ->success('Başarılı', 'İşlem Başarılı')

                ->autoClose(1000);
            return back();


        } else {
            alert()
                ->error('Hata', 'İşlem Başarısız')

                ->autoClose(1000);
            return back();

        }
    }





    public function edit($id)
    {
        $kurum = Kurum::find($id);
        return view('adminkurumsal.kurumlogo.edit', compact('kurum'));
    }


    public function update(Request $request, $id)
    {


        $this->validate(request(), array(
            'kurumadi' => 'required',


        ));
        $kurumlar = Kurum::find($id);
        $kurumlar->kurumadi = request('kurumadi');
        $kurumlar->aciklama = request('aciklama');
        $kurumlar->sira = request('sira');
        $kurumlar->link = request('link');


        if (request()->hasFile('logo')) {

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

            $resim = request()->file('logo');
            $dosya_adi = 'kurumlogo' . '-' . time() . '.' . $resim->extension();

            if ($resim->isValid()) {

                $hedef_klasor = 'uploads/kurum';
                $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
                $resim->move($hedef_klasor, $dosya_adi);
                $kurumlar->logo = $dosya_yolu;
            }
        }
        $kurumlar->save();


        if ($kurumlar) {
            alert()
                ->success('Başarılı', 'İşlem Başarılı')

                ->autoClose(1000);
            return back();


        } else {
            alert()
                ->error('Hata', 'İşlem Başarısız')

                ->autoClose(1000);
            return back();

        }
    }


    public function destroy($id)
    {

        $sil = Kurum::destroy($id);
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
