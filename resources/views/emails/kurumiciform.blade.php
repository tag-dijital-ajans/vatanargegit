@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{ $gonder['siteadi'] }}
        @endcomponent
    @endslot

    {{-- Body --}}
    Gönderen: {{$gonder['name']}}<br/>
    E-Mail Adresi: {{$gonder['email']}}<br/>
    Sicil No: {{$gonder['sicilno']}}<br/>
    Telefon: {{$gonder['phone']}}<br/>
    Nereden Mezun: {{$gonder['mezun']}}<br/>
    Fikir Adı: {{$gonder['fkrad']}}<br/>
    Fikir Özeti: {{$gonder['fkrozet']}}<br/>

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





