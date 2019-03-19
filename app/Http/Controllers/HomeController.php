<?php

namespace App\Http\Controllers;
use App\Ayar;
use App\Hizmet;
use App\Http\Requests\KurumdisiformRequest;
use App\Kategori;
use App\Referans;
use App\Sayfa;
use App\Menu;
use App\Slider;
use App\Yazi;
use App\Ekip;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

   /* public function __construct()
    {
        $this->middleware('auth');
    }*/


    public function index()
    {
        $sliders = Slider::all();
        $services = Hizmet::orderby('created_at','desc')->take(6)->get();
        $icerikler = Yazi::orderby('created_at','desc')->take(3)->get();
        $partners = Referans::orderby('sira','asc')->get();
        return view('anasayfa.index',compact('sliders','services','icerikler','partners'));
    }

    public function yazilar($id){


    }

    public function cikis()  {

        auth()->logout();
        return redirect('/');
    }


    public function hakkimizda(){
        return view('anasayfa.hakkimizda');
    }

    public function sayfa($id){

        $sayfa = Sayfa::find($id);
        return view('anasayfa.sayfa',compact('sayfa'));


    }

    public function hizmetler(){

        $hizmetler = Hizmet::all();
        return view('anasayfa.hizmetler', compact('hizmetler'));

    }

    public function hizmet($id){

        $hizmet = Hizmet::find($id);
        $listhizmetler = Hizmet::all();
            return view('anasayfa.hizmet', compact('hizmet','listhizmetler'));
        }

    public function haberler(){
            $haberler = Yazi::orderby('created_at','desc')->paginate(3);
            return view('anasayfa.haberler',compact('haberler'));
    }

    public function haber($id){

        $haber = Yazi::find($id);
        $hizmetler = Hizmet::all();
        return view('anasayfa.haber',compact('haber','hizmetler'));

    }
    public function iletisim(){
        return view('anasayfa.iletisim');
    }

    public function iletisimformgonder(Request $request){

        $this->validate($request,array(
            'ad'=>'required',
            'email'=>'required',
            'konu'=>'required',
            'mesaj'=>'required',
        ));

        $ayarlar = Ayar::find(1);
        $siteadi = $ayarlar->site_adi;
        $siteemail = $ayarlar->email;

        $bilgiler = array(
            'ad' => request('ad'),
            'email' => request('email'),
            'konu' => request('konu'),
            'mesaj' => request('mesaj'),
            'siteadi' => $siteadi,
            'siteemail' => $siteemail,

        );
        Mail::to($siteemail)->send(new \App\Mail\iletisimformu($bilgiler));
           alert()
             ->success('Gönderildi','Formunuz Gönderildi')
             ->autoClose(2000);
           return back();


    }

    public function anasayfaformgonder(Request $request){

        $this->validate($request,array(
            'ad'=>'required',
            'email'=>'required',
            'konu'=>'required',

        ));
        $ayarlar = Ayar::find(1);
        $siteadi = $ayarlar->site_adi;
        $siteemail = $ayarlar->email;

        $bilgiler = array(
            'ad' => request('ad'),
            'email' => request('email'),
            'konu' => request('konu'),
            'siteadi' => $siteadi,
            'siteemail' => $siteemail,

        );
        Mail::to($siteemail)->send(new \App\Mail\talepformu($bilgiler));
        alert()
            ->success('Gönderildi','Formunuz Gönderildi')
            ->autoClose(2000);
        return back();


    }

    public function ekip(){

        $ekipler = Ekip::orderby('sira','desc')->get();

        return view('anasayfa.ekip',compact('ekipler'));
    }

    public function bakim(){

        return view('anasayfa.bakim');

    }

    public function kurumdisiform(){

        return view('anasayfa.kurumdisiform');
    }
    public function kurumiciform(){
        return view('anasayfa.kurumiciform');
    }

    public function kurumdisiformgonder(KurumdisiformRequest $request){

        $ayarlar = Ayar::find(1);
        $siteadi = $ayarlar->site_adi;
        $siteemail = $ayarlar->email;

        $bilgiler = array(

            'siteadi' => $siteadi,
            'siteemail' => $siteemail,


            'groupName' => request('groupName'),
            'groupLabel' => request('groupName'),
            'groupAdress' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
            'groupName' => request('groupName'),
        );
        Mail::to($siteemail)->send(new \App\Mail\talepformu($bilgiler));
        alert()
            ->success('Gönderildi','En kısa zamanda tarafınıza ulaşılacaktır...')
            ->autoClose(2000);
        return back();


    }
    public function kurumiciformgonder(){



    }

}
