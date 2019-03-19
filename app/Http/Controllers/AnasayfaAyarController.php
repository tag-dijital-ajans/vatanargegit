<?php

namespace App\Http\Controllers;

use App\AnasayfaAyar;
use Illuminate\Http\Request;

class AnasayfaAyarController extends Controller
{

    public function index()
    {
        $ayarlar = AnasayfaAyar::find(1);
        return view('adminkurumsal.anasayfaayarlar.index',compact('ayarlar'));
    }




    public function update(Request $request, AnasayfaAyar $anasayfaAyar)
    {
        $this->validate(request(), array(
            'anasayfametin' => 'required'
        ));

        $ayar = AnasayfaAyar::find(1);
        $ayar->anasayfametin = request('anasayfametin');
        $ayar->anasayfavideo = request('anasayfavideo');


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



}
