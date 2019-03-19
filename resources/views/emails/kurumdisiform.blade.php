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
    Yabancı Hissedar Var Mı?: {{$gonder['firstChoiceTitle']}}<br/>
    Son 3 Yıllık Ciro: {{$gonder['mesaj']}}<br/>
    Geçen Yıl Fatura Kestiğiniz Müşteri Sayısı: {{$gonder['mesaj']}}<br/>
    İEM VATAN'a Başvuru Yaptığınız Ürününüzün Satışından Son 1 Yıldır Gerçekleşen Ciro: {{$gonder['mesaj']}}<br/>
    Yatırım Arıyor Musunuz: {{$gonder['mesaj']}}<br/>


    Adınız: {{$gonder['mesaj']}}<br/>
    Soyadınız: {{$gonder['mesaj']}}<br/>
    Telefon: {{$gonder['mesaj']}}<br/>
    E-Mail: {{$gonder['mesaj']}}<br/>
    İEM VATAN'a Sizin Dışınızda Başvuracak Kişi Sayısı : {{$gonder['mesaj']}}<br/>



    Satış: {{$gonder['mesaj']}}<br/>
    Pazarlama: {{$gonder['mesaj']}}<br/>
    Yazılım: {{$gonder['mesaj']}}<br/>
    Tasarım: {{$gonder['mesaj']}}<br/>
    Üretim Planlama: {{$gonder['mesaj']}}<br/>
    Muhasebe: {{$gonder['mesaj']}}<br/>
    Stratejik Yönetim: {{$gonder['mesaj']}}<br/>
    Elektrik - Elektronik: {{$gonder['mesaj']}}<br/>
    Mekanik: {{$gonder['mesaj']}}<br/>
    Diğer: {{$gonder['mesaj']}}<br/>


    Kaç Tip Ürün: {{$gonder['mesaj']}}<br/>
    Ana Ürünler: {{$gonder['mesaj']}}<br/>


    Tarım Teknolojileri: {{$gonder['mesaj']}}<br/>
    Artırılmış Gerçeklik: {{$gonder['mesaj']}}<br/>
    Büyük Veri: {{$gonder['mesaj']}}<br/>
    Biyoloji/Mikrobiyoloji: {{$gonder['mesaj']}}<br/>
    İçerik: {{$gonder['mesaj']}}<br/>
    Donanım: {{$gonder['mesaj']}}<br/>
    Eğitim Teknolojileri: {{$gonder['mesaj']}}<br/>
    Emlak: {{$gonder['mesaj']}}<br/>
    Enerji: {{$gonder['mesaj']}}<br/>
    E-Ticaret: {{$gonder['mesaj']}}<br/>
    Finansal Teknolojiler: {{$gonder['mesaj']}}<br/>
    Gıda Teknolojileri: {{$gonder['mesaj']}}<br/>
    Görüntü İşleme: {{$gonder['mesaj']}}<br/>
    Sağlık: {{$gonder['mesaj']}}<br/>
    Bilgi Güvenliği: {{$gonder['mesaj']}}<br/>
    Nesnelerin İnterneti: {{$gonder['mesaj']}}<br/>
    Lojistik: {{$gonder['mesaj']}}<br/>
    Makina Öğrenmesi/Yapay Zeka: {{$gonder['mesaj']}}<br/>
    Mobil Uygulama Geliştirme: {{$gonder['mesaj']}}<br/>
    Oyun Geliştirme: {{$gonder['mesaj']}}<br/>
    Robotik: {{$gonder['mesaj']}}<br/>
    Bulut Servisler: {{$gonder['mesaj']}}<br/>
    Giyilebilir Teknolojiler: {{$gonder['mesaj']}}<br/>
    Yazılım: {{$gonder['mesaj']}}<br/>



    Sektör: {{$gonder['mesaj']}}<br/>
    Hedeflenen Ana Müşteri Grubu: {{$gonder['mesaj']}}<br/>
    Hedeflenen Ana Müşteri Grubu Sektörü: {{$gonder['mesaj']}}<br/>
    Müşteri Grubu Sektörünün İhtiyacını Gideren Kişi Ve Web Adresleri: {{$gonder['mesaj']}}<br/>
    Rakiplerinizden Sizi Ayıran Özellikler: {{$gonder['mesaj']}}<br/>
    Ürününüzü Nasıl Fiyatlandırıyorsunuz?: {{$gonder['mesaj']}}<br/>


    Yatırım Aldınız Mı?: {{$gonder['mesaj']}}<br/>
    Patent Başvurunuz Var Mı?: {{$gonder['mesaj']}}<br/>
    İEM VATAN'a adrres Göstermek İstiyor Musunuz?: {{$gonder['mesaj']}}<br/>
    4691 Sayılı Teknoloji Geliştirme Bölgeleri Kanunu'ndan Faydalanmak İçin Başvuruda Bulunacak Mısınız? : {{$gonder['mesaj']}}<br/>
    Ürününüzü Nasıl Fiyatlandırıyorsunuz?: {{$gonder['mesaj']}}<br/>
    Ürününüzü Nasıl Fiyatlandırıyorsunuz?: {{$gonder['mesaj']}}

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





