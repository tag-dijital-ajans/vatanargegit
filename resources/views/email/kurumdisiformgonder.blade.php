@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{ $gonder['siteadi'] }}
        @endcomponent
    @endslot

    {{-- Body --}}
    <table>
        <tr>
            <td>Şirket Adı :</td> <td>{{$gonder['groupName']}}</td>
        </tr>
        <tr>
            <td>Şirket Unvanı:</td> <td> {{$gonder['groupLabel']}}</td>
        </tr>
        <tr>
            <td>Adresi:</td> <td> {{$gonder['groupAdress']}}</td>
        </tr>
        <tr>
            <td>Web Sitesi: </td> <td>{{$gonder['groupWebsite']}}</td>
        </tr>
        <tr>
            <td>Ülke: </td> <td>{{$gonder['groupCountry']}}</td>
        </tr>
        <tr>
            <td>Kuruluş Yılı:</td> <td> {{$gonder['foundedYear']}}</td>
        </tr>
        <tr>
            <td>Şirketin Kuruluş Türü: </td> <td>{{$gonder['foundationType']}}</td>
        </tr>
        <tr>
            <td>Vergi Dairesi:</td> <td> {{$gonder['groupTaxBranch']}}</td>
        </tr>
        <tr>
            <td>Vergi Numarası:</td> <td> {{$gonder['groupTaxNo']}}</td>
        </tr>
        <tr>
            <td>Ticari Sicil Numarası: </td> <td>{{$gonder['groupSicilNo']}}</td>
        </tr>
        <tr>
            <td>SGK Sicil Numarası: </td> <td>{{$gonder['groupSGKNo']}}</td>
        </tr>
        <tr>
            <td>Ödenmiş Sermaye:</td> <td> {{$gonder['paidCapital']}}</td>
        </tr>
        <tr>
            <td>Şirketin Çoğunluk Hissesinin Kime Ait Olduğu: </td> <td>{{$gonder['biggestShareName']}}</td>
        </tr>
        <tr>
            <td>Çoğunluk Hissedarının Hise Oranı:</td> <td> {{$gonder['biggestSharePerc']}}</td>
        </tr>
        <tr>
            <td>Yabancı Hissedar Var Mı?:</td> <td> {{$gonder['foreignPartner']}}</td>
        </tr>
        <tr>
            <td>Son 3 Yıllık Ciro:</td> <td> {{$gonder['lastEndorsement']}}</td>
        </tr>
        <tr>
            <td>Gelecek 3 Yıllık Ciro Beklentinizi Yıl ve Rakam Olacak Şekilde Belirtiniz:</td>
            <td>{{$gonder['nextEndorsement']}}</td>
        </tr>
        <tr>
            <td>Geçen Yıl Fatura Kestiğiniz Müşteri Sayısı: </td> <td>{{$gonder['lastInvoice']}}</td>
        </tr>
        <tr>
            <td>İEM VATAN'a Başvuru Yaptığınız Ürününüzün Satışından Son 1 Yıldır Gerçekleşen Ciro: </td>
            <td>{{$gonder['lastYearRevenue']}}</td>
        </tr>
        <tr>
            <td>Yatırım Arıyor Musunuz:</td> <td> {{$gonder['needInvestment']}}</td>
        </tr>
        <tr>
            <td>En Yüksek Hisseye Sahip Yabancı Hissedarın Hisse Oranını Belirtiniz:</td>
            <td>{{$gonder['biggestForeignSharePerc']}}</td>
        </tr>

        <tr>
            <td>Adınız: </td> <td>{{$gonder['groupContactName']}}</td>
        </tr>
        <tr>
            <td>Soyadınız: </td> <td>{{$gonder['groupContactLastName']}}</td>
        </tr>
        <tr>
            <td>Telefon:</td> <td> {{$gonder['groupContactPhone']}}</td>
        </tr>
        <tr>
            <td>E-Mail:</td> <td> {{$gonder['groupContactEmail']}}</td>
        </tr>


        <tr>
            <td>Yetkinlikler </td> <td></td>
        </tr>
        <tr>

        <tr>
            <td>Satış: </td> <td>{{$gonder['competence1Count']}}</td>
        </tr>
        <tr>
            <td>Pazarlama:</td> <td> {{$gonder['competence2Count']}}</td>
        </tr>
        <tr>
            <td>Yazılım: </td> <td>{{$gonder['competence3Count']}}</td>
        </tr>
        <tr>
            <td>Tasarım:</td> <td> {{$gonder['competence4Count']}}</td>
        </tr>
        <tr>
            <td>Üretim Planlama: </td> <td>{{$gonder['competence5Count']}}</td>
        </tr>
        <tr>
            <td>Muhasebe: </td> <td>{{$gonder['competence6Count']}}</td>
        </tr>
        <tr>
            <td>Stratejik Yönetim:</td> <td> {{$gonder['competence7Count']}}</td>
        </tr>
        <tr>
            <td>Elektrik - Elektronik: </td> <td>{{$gonder['competence8Count']}}</td>
        </tr>
        <tr>
            <td>Mekanik:</td> <td> {{$gonder['competence9Count']}}</td>
        </tr>
        <tr>
            <td>Diğer: </td> <td>{{$gonder['competence10Count']}}</td>
        </tr>


        <tr>
            <td>Kaç Tip Ürün: </td> <td>{{$gonder['productCount']}}</td>
        </tr>
        <tr>
            <td>Ana Ürünler:</td> <td> {{$gonder['productSummary']}}</td>
        </tr>


        <tr>
            <td>Proje Teknolojisi:</td> <td> {{$gonder['projectTech']}}</td>
        </tr>

        <tr>
            <td>Hangi Sektördesiniz?:</td> <td> {{$gonder['sector']}}</td>
        </tr>
        <tr>
            <td>Hedeflenen Ana Müşteri Grubu:</td> <td> {{$gonder['targetGroupSummary']}}</td>
        </tr>
        <tr>
            <td>Hedeflenen Ana Müşteri Grubu Sektörü: </td> <td>{{$gonder['targetSector']}}</td>
        </tr>
        <tr>
            <td>Alt Sektörü: </td> <td>{{$gonder['targetAltSector']}}</td>
        </tr>
        <tr>
            <td>Müşteri Grubu Sektörünün İhtiyacını Gideren Kişi Ve Web Adresleri:</td> <td> {{$gonder['competitorWebsites']}}</td>
        </tr>
        <tr>
            <td>Rakiplerinizden Sizi Ayıran Özellikler: </td> <td>{{$gonder['competitorDifference']}}</td>
        </tr>
        <tr>
            <td>Ürününüzü Nasıl Fiyatlandırıyorsunuz?: </td> <td>{{$gonder['businessModel2']}}</td>
        </tr>


        <tr>
            <td>Yatırım Aldınız Mı?: </td> <td>{{$gonder['haveInvestment']}}</td>
        </tr>
        <tr>
            <td>Patent Başvurunuz Var Mı?:</td> <td> {{$gonder['havePatent']}}</td>
        </tr>



</table>
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





