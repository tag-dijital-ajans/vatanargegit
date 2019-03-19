@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{ $gonder['siteadi'] }}
        @endcomponent
    @endslot

    {{-- Body --}}

    Şirket Adı : {{$gonder['groupName']}}<br/>
    Şirket Unvanı: {{$gonder['groupLabel']}}<br/>
    Adresi: {{$gonder['groupAddress']}}<br/>
    Web Sitesi: {{$gonder['groupWebsite']}}<br/>
    Ülke: {{$gonder['groupCountry']}}<br/>
    Kuruluş Yılı: {{$gonder['foundedYear']}}<br/>
    Şirketin Kuruluş Türü: {{$gonder['foundationType']}}<br/>
    Vergi Dairesi: {{$gonder['groupTaxBranch']}}<br/>
    Vergi Numarası: {{$gonder['groupTaxNo']}}<br/>
    Ticari Sicil Numarası: {{$gonder['groupSicilNo']}}<br/>
    SGK Sicil Numarası: {{$gonder['groupSGKNo']}}<br/>
    Ödenmiş Sermaye: {{$gonder['paidCapital']}}<br/>
    Şirketin Çoğunluk Hissesinin Kime Ait Olduğu: {{$gonder['biggestShareName']}}<br/>
    Çoğunluk Hissedarının Hise Oranı: {{$gonder['biggestSharePerc']}}<br/>
    Yabancı Hissedar Var Mı?: {{$gonder['foreignPartner']}}<br/>
    Son 3 Yıllık Ciro: {{$gonder['lastEndorsement']}}<br/>
    Gelecek 3 Yıllık Ciro Beklentinizi Yıl ve Rakam Olacak Şekilde Belirtiniz:{{$gonder['nextEndorsement']}}<br/>
    Geçen Yıl Fatura Kestiğiniz Müşteri Sayısı: {{$gonder['lastInvoice']}}<br/>
    İEM VATAN'a Başvuru Yaptığınız Ürününüzün Satışından Son 1 Yıldır Gerçekleşen Ciro: {{$gonder['lastYearRevenue']}}<br/>
    Yatırım Arıyor Musunuz: {{$gonder['needInvestment']}}<br/>
    En Yüksek Hisseye Sahip Yabancı Hissedarın Hisse Oranını Belirtiniz:{{$gonder['biggestForeignSharePerc']}}

    Adınız: {{$gonder['groupContactName']}}<br/>
    Soyadınız: {{$gonder['groupContactLastName']}}<br/>
    Telefon: {{$gonder['groupContactPhone']}}<br/>
    E-Mail: {{$gonder['groupContactEmail']}}<br/>
    İEM VATAN'a Sizin Dışınızda Başvuracak Kişi Sayısı : {{$gonder['groupOtherCount']}}<br/>



    Satış: {{$gonder['competence1Count']}}<br/>
    Pazarlama: {{$gonder['competence2Count']}}<br/>
    Yazılım: {{$gonder['competence3Count']}}<br/>
    Tasarım: {{$gonder['competence4Count']}}<br/>
    Üretim Planlama: {{$gonder['competence5Count']}}<br/>
    Muhasebe: {{$gonder['competence6Count']}}<br/>
    Stratejik Yönetim: {{$gonder['competence7Count']}}<br/>
    Elektrik - Elektronik: {{$gonder['competence8Count']}}<br/>
    Mekanik: {{$gonder['competence9Count']}}<br/>
    Diğer: {{$gonder['competence10Count']}}<br/>


    Kaç Tip Ürün: {{$gonder['productCount']}}<br/>
    Ana Ürünler: {{$gonder['productSummary']}}<br/>


    Tarım Teknolojileri: {{$gonder['projectTech1']}}<br/>
    Artırılmış Gerçeklik: {{$gonder['projectTech2']}}<br/>
    Büyük Veri: {{$gonder['projectTech3']}}<br/>
    Biyoloji/Mikrobiyoloji: {{$gonder['projectTech4']}}<br/>
    İçerik: {{$gonder['projectTech5']}}<br/>
    Donanım: {{$gonder['projectTech6']}}<br/>
    Eğitim Teknolojileri: {{$gonder['projectTech7']}}<br/>
    Emlak: {{$gonder['projectTech8']}}<br/>
    Enerji: {{$gonder['projectTech9']}}<br/>
    E-Ticaret: {{$gonder['projectTech10']}}<br/>
    Finansal Teknolojiler: {{$gonder['projectTech11']}}<br/>
    Gıda Teknolojileri: {{$gonder['projectTech12']}}<br/>
    Görüntü İşleme: {{$gonder['projectTech13']}}<br/>
    Sağlık: {{$gonder['projectTech14']}}<br/>
    Bilgi Güvenliği: {{$gonder['projectTech15']}}<br/>
    Nesnelerin İnterneti: {{$gonder['projectTech16']}}<br/>
    Lojistik: {{$gonder['projectTech17']}}<br/>
    Makina Öğrenmesi/Yapay Zeka: {{$gonder['projectTech18']}}<br/>
    Mobil Uygulama Geliştirme: {{$gonder['projectTech19']}}<br/>
    Oyun Geliştirme: {{$gonder['projectTech20']}}<br/>
    Robotik: {{$gonder['projectTech21']}}<br/>
    Bulut Servisler: {{$gonder['projectTech22']}}<br/>
    Giyilebilir Teknolojiler: {{$gonder['projectTech23']}}<br/>
    Yazılım: {{$gonder['projectTech24']}}<br/>
    Diğer:{{$gonder['projectTech25']}}<br/>



    Hangi Sektördesiniz?: {{$gonder['sector']}}<br/>
    Hedeflenen Ana Müşteri Grubu: {{$gonder['targetGroupSummary']}}<br/>
    Hedeflenen Ana Müşteri Grubu Sektörü: {{$gonder['targetSector']}}<br/>
    Müşteri Grubu Sektörünün İhtiyacını Gideren Kişi Ve Web Adresleri: {{$gonder['competitorWebsites']}}<br/>
    Rakiplerinizden Sizi Ayıran Özellikler: {{$gonder['competitorDifference']}}<br/>
    Ürününüzü Nasıl Fiyatlandırıyorsunuz?: {{$gonder['businessModel2']}}<br/>


    Yatırım Aldınız Mı?: {{$gonder['haveInvestment']}}<br/>
    Patent Başvurunuz Var Mı?: {{$gonder['havePatent']}}<br/>
    İEM VATAN'a adrres Göstermek İstiyor Musunuz?: {{$gonder['wantAddress']}}<br/>
    4691 Sayılı Teknoloji Geliştirme Bölgeleri Kanunu'ndan Faydalanmak İçin Başvuruda Bulunacak Mısınız? : {{$gonder['lawApply']}}<br/>
    {{-- Ürününüzü Nasıl Fiyatlandırıyorsunuz?: {{$gonder['businessModel2']}}<br/>
     Yatırım Aldınız Mı?:{{$gonder['haveInvestment']}}<br/>
     Patent Başvurunuz Var Mı?:{{$gonder['havePatent']}}<br/>
     İEM VATAN'a  adres göstermek istiyor musunuz?: {{$gonder['wantAddress']}}<br/>
     4691 sayılı Teknoloji Geliştirme Bölgeleri Kanunu’ndan faydalanmak üzere başvuruda bulunacak mısınız?:{{$gonder['lawApply']}}--}}


    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            {{ $gonder['siteadi'] }}
        @endcomponent
    @endslot
@endcomponent





