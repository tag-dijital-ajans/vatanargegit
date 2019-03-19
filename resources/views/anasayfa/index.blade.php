@extends ('anasayfa.template')

@section('icerik')
<section class="bg-0 p-t-20 p-b-20">
		<div class="container">

			<div class="size-w-1 m-rl-auto">
				{!!$anasayfaayar->anasayfametin!!}
			</div>
		</div>
	</section>

@include('anasayfa.services')




<!-- Call back -->
{{--<section class="bg-10 p-t-92 p-b-45">
    <div class="container">
        <div class="row">
            <div id="orta" class="col-lg-4 p-b-30">
                <!-- Title section -->
                --}}{{--<div class="flex-col-c-s p-b-20">

                  --}}{{----}}{{--  <h3 class="t1-b-1 cl-0 m-b-11">
                        Bilgi Talep Başvuru
                    </h3>--}}{{----}}{{--

                   --}}{{----}}{{-- <div class="size-a-2 bg-0"></div>--}}{{----}}{{--

                </div>--}}{{--

              --}}{{--  <p class="t1-s-2 cl-0">
                    Detaylı bilgi almak için, lütfen formu doldurunuz. Tarafınıza en kısa sürede dönüş yapılacaktır.
                </p>--}}{{--
            </div>


                <div class="row">

                    <div class="col-sm-6 p-b-25">
                        <a href="{{route('kurumici.form')}}"> <img  src="/anasayfa/images/butonlar/kurumicibasvuru.png"></a>

--}}{{--
                            <a class="d-inline-flex flex-c-c size-a-4 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11  trans-02" href="{{route('kurumici.form')}}">Kurum İçİ<br> Başvuru</a>
--}}{{--


                    </div>


                    <div class="col-sm-6 p-b-25">

                       <a  href="{{route('kurumdisi.form')}}"> <img src="/anasayfa/images/butonlar/kurumicibasvuru.png"></a>
--}}{{--
                            <a class="d-inline-flex flex-c-c size-a-4 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11  trans-02" href="{{route('kurumdisi.form')}}">Kurum Dışı Başvuru</a>
--}}{{--

                    </div>
                </div>

        </div>
    </div>
</section>--}}



<section class="bg-10 p-t-92 p-b-70">
    <div class="container">
        <!-- Title section -->
        <div class="flex-col-c-c p-b-50">
            {{--<h3 class="t1-b-1 cl-3 txt-center m-b-11">
                Why Chosse Us
            </h3>--}}

           {{-- <div class="size-a-2 bg-3"></div>--}}
        </div>

        <!--  -->
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-6 col-lg-3 p-b-30">
                <!-- Block1 -->
                            <a href="{{route('kurumici.form')}}"> <img  src="/anasayfa/images/butonlar/kurumicibasvuru.png"></a>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-3 p-b-30">
                <!-- Block1 -->
                <div class="col-sm-10 col-md-6 col-lg-3 p-b-30">
                    <!-- Block1 -->
                    <a href="{{route('kurumdisi.form')}}"> <img  src="/anasayfa/images/butonlar/kurumdisibasvuru.png"></a>
                </div>
            </div>




        </div>
    </div>
</section>














<!-- News -->
<section class="bg-12 p-t-92 p-b-60">
    <div class="container">
        <!-- Title section -->
        <div class="flex-col-c-c p-b-50">
            <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                Duyuru ve Etkinlikler
            </h3>

            <div class="size-a-2 bg-3"></div>
        </div>

        <!--  -->
        <div class="row justify-content-center">

            @foreach($icerikler as $icerik)
            <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                <div class="bg-0 h-full">
                    <a href="/haber/{{$icerik->id}}/{{$icerik->slug}}" class="hov-img0 of-hidden">
                        <img src="/{{$icerik->resim}}" alt="IMG" width="100" height="320">
                    </a>



                    <div class="bg-0 p-rl-28 p-t-26 p-b-35">
                        <h4 class="p-b-12">
                            <a href="/haber/{{$icerik->id}}/{{$icerik->slug}}" class="t1-m-1 cl-3 hov-link2 trans-02">
                                {{$icerik->baslik}}
                            </a>
                        </h4>

                        <div class="flex-wr-s-c p-b-9">
                            <div class="p-r-20">
                                <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                <span class="t1-s-2 cl-7">
										{{date('d-m-y',strtotime($icerik->created_at))}}
									</span>
                            </div>

                            {{--<div class="p-l-20 bo-l-1 bcl-12">
                                <i class="fs-14 cl-7 fa fa-user m-r-2"></i>

                                <a href="#" class="t1-s-2 cl-11 hov-link3">
                                    Admin
                                </a>
                            </div>--}}
                        </div>

                        <p class="t1-s-2 cl-6 p-b-20">
                            {!! $icerik->icerik !!}
                        </p>

                        <a href="/haber/{{$icerik->id}}/{{$icerik->slug}}"   class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11 hov-btn1 trans-02">

                           Daha Fazla Oku...
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@include('anasayfa.partners')


@endsection

@section('css')

@endsection

@section('js')

@endsection