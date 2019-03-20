@extends ('anasayfa.template')

@section('icerik')
{{--<section class="bg-0 p-t-92 p-b-50">
		<div class="container">
            <div class="row justify-content-center">

                <h2>{{$anasayfaayar->anasayfametin}}</h2>
            </div>
		</div>
</section>--}}

@include('anasayfa.services')




<!-- Call back -->


<section class="bg-10 p-t-92 p-b-60">
    <div class="container">

        <!--  -->
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                <!-- Block1 -->

                <input style="width: 300px; padding: 20px; cursor: pointer; box-shadow: 6px 6px 5px; #999;
                -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold;
                background: #ffffff; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%; "
                       type="button" value="Kurum İçi Başvuru" onclick="window.location.href='{{route('kurumici.form')}}'" />
            </div>

            <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">

                    <!-- Block1 -->
                    <input style="width: 300px; padding: 20px; cursor: pointer; box-shadow: 6px 6px 5px; #999;
                -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold;
                background: #ffffff; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%;"
                           type="button" value="Kurum Dışı Başvuru" onclick="window.location.href='{{route('kurumdisi.form')}}'" />

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