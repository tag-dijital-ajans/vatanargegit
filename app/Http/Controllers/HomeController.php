<?php

namespace App\Http\Controllers;
use App\Ayar;
use App\Hizmet;
use App\Http\Requests\KurumdisiformRequest;
use App\Http\Requests\KurumiciformRequest;
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
            'groupLabel' => request('groupLabel'),
            'groupAdress' => request('groupAdress'),
            'groupWebsite' => request('groupWebsite'),
            'groupCountry' => request('groupCountry'),
            'foundedYear' => request('foundedYear'),
            'foundationType' => request('foundationType'),
            'groupTaxBranch' => request('groupTaxBranch'),
            'groupTaxNo' => request('groupTaxNo'),
            'groupSicilNo' => request('groupSicilNo'),
            'groupSGKNo' => request('groupSGKNo'),
            'paidCapital' => request('paidCapital'),
            'biggestShareName' => request('biggestShareName'),
            'biggestSharePerc' => request('biggestSharePerc'),
            'foreignPartner' => request('foreignPartner'),
            'lastEndorsement' => request('lastEndorsement'),
            'nextEndorsement' => request('nextEndorsement'),
            'lastInvoice' => request('lastInvoice'),
            'lastYearRevenue' => request('lastYearRevenue'),
            'needInvestment' => request('needInvestment'),
            'biggestForeignSharePerc' => request('biggestForeignSharePerc'),


            'groupContactName' => request('groupContactName'),
            'groupContactLastName' => request('groupContactLastName'),
            'groupContactPhone' => request('groupContactPhone'),
            'groupContactEmail' => request('groupContactEmail'),
            'groupOtherCount' => request('groupOtherCount'),


            'competence1Count' => request('competence1Count'),
            'competence2Count' => request('competence2Count'),
            'competence3Count' => request('competence3Count'),
            'competence4Count' => request('competence4Count'),
            'competence5Count' => request('competence5Count'),
            'competence6Count' => request('competence6Count'),
            'competence7Count' => request('competence7Count'),
            'competence8Count' => request('competence8Count'),
            'competence9Count' => request('competence9Count'),
            'competence10Count' => request('competence10Count'),


            'productCount' => request('productCount'),
            'productSummary' => request('productSummary'),


            'projectTech1' => request('projectTech1'),
            'projectTech2' => request('projectTech2'),
            'projectTech3' => request('projectTech3'),
            'projectTech4' => request('projectTech4'),
            'projectTech5' => request('projectTech5'),
            'projectTech6' => request('projectTech6'),
            'projectTech7' => request('projectTech7'),
            'projectTech8' => request('projectTech8'),
            'projectTech9' => request('projectTech9'),
            'projectTech10' => request('projectTech10'),
            'projectTech11' => request('projectTech11'),
            'projectTech12' => request('projectTech12'),
            'projectTech13' => request('projectTech13'),
            'projectTech14' => request('projectTech14'),
            'projectTech15' => request('projectTech15'),
            'projectTech16' => request('projectTech16'),
            'projectTech17' => request('projectTech17'),
            'projectTech18' => request('projectTech18'),
            'projectTech19' => request('projectTech19'),
            'projectTech20' => request('projectTech20'),
            'projectTech21' => request('projectTech21'),
            'projectTech22' => request('projectTech22'),
            'projectTech23' => request('projectTech23'),
            'projectTech24' => request('projectTech24'),
            'projectTech25' => request('projectTech25'),


            'sector' => request('sector'),
            'targetGroupSummary' => request('targetGroupSummary'),
            'targetSector' => request('targetSector'),
            'competitorWebsites' => request('competitorWebsites'),
            'competitorDifference' => request('competitorDifference'),
            'businessModel2' => request('businessModel2'),


            'haveInvestment' => request('haveInvestment'),
            'havePatent' => request('havePatent'),
            'wantAddress' => request('wantAddress'),
            'lawApply' => request('lawApply'),
        );
        $mail = Mail::to($siteemail)->send(new \App\Mail\KurumDisiFormGonder($bilgiler));
        if($mail) {
            alert()
                ->success('Gönderildi', 'En kısa zamanda tarafınıza ulaşılacaktır...')
                ->autoClose(2000);
            return back();
        }else{
            alert()
                ->error('Hata', 'Email gonderilemedi...')
                ->autoClose(2000);
            return back();

        }

    }
    public function kurumiciformgonder(KurumiciformRequest $request){


        $ayarlar = Ayar::find(1);
        $siteadi = $ayarlar->site_adi;
        $siteemail = $ayarlar->email;

        $bilgiler = array(

            'siteadi' => $siteadi,
            'siteemail' => $siteemail,

            'name' => request('name'),
            'email' => request('email'),
            'sicilno' => request('sicilno'),
            'phone' => request('phone'),
            'mezun' => request('mezun'),
            'fkrad' => request('fkrad'),
            'fkrozet' => request('fkrozet'),


        );
        $mail = Mail::to($siteemail)->send(new \App\Mail\KurumIciFormGonder($bilgiler));
        if($mail) {
            alert()
                ->success('Gönderildi', 'En kısa zamanda tarafınıza ulaşılacaktır...')
                ->autoClose(2000);
            return back();
        }else{
            alert()
                ->error('Hata', 'Email gonderilemedi...')
                ->autoClose(2000);
            return back();

        }

    }

}
