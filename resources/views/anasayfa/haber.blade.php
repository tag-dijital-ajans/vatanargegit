@extends('anasayfa.template')

@section('icerik')

    <!-- Title page -->
    <section class="bg-img1 kit-overlay1" style="background-image: url(/anasayfa/images/bg-07.jpg);">
        <div class="container size-h-3 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1  cl-0 txt-center m-b-25">
                Duyuru ve Etkinlikler
            </h2>

            <div class="flex-wr-c-c">
                <a href="{{route('anasayfa')}}" class="breadcrumb-item">
                    Anasayfa
                </a>

                <a href="{{route('duyurular.goster')}}" class="breadcrumb-item">
                    Duyuru ve Etkinlikler
                </a>

                <span class="breadcrumb-item">
					{{$haber->baslik}}
				</span>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div class="bg-0 p-t-100 p-b-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-4 col-lg-3 p-b-30">
                    <!-- Left bar -->
                    <div>


                        <!-- Categories -->
                        <div class="p-b-32">
                            <h4 class="t1-m-1 text-uppercase cl-3 kit-underline1 p-b-6">
                                Hizmetlerimiz
                            </h4>

                            <ul class="p-t-22">

                                @foreach($hizmetler as $hizmet)
                                <li class="bo-b-1 bcl-14 m-b-18">
                                    <a href="/hizmet/{{$hizmet->id}}/{{$hizmet->slug}}" class="flex-wr-sb-c t1-s-5 cl-5 hov-link2 trans-02 p-tb-3">
										<span>
											{{$hizmet->hizmet_basligi}}
										</span>


                                    </a>
                                </li>
                                @endforeach

                            </ul>
                        </div>

                        <!--  -->
                        <div class="bg-11 p-all-30 m-b-46">
                            <p class="t1-m-1 cl-0 m-b-13">
                                Destek
                            </p>

                            <p class="t1-s-2 cl-15 m-b-25">
                                Daha fazla bilgi için bizim ile iletişime geçin.
                            </p>

                            <a href="{{route('iletisim.formu')}}" class="d-inline-flex flex-c-c size-a-1 bg-0 t1-s-2 cl-6 text-uppercase hov-btn1 trans-02 p-rl-10">
                               İletişim
                            </a>
                        </div>


                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-9 p-b-30">
                    <div class="p-l-50 p-l-15-sr991 p-l-0-sr767">
                        <!-- News detail -->
                        <div class="m-b-25">
                            <img class="m-b-45 max-s-full" src="/{{$haber->resim}}" alt="{{$haber->slug}}">

                            <h4 class="t1-b-3 cl-3 m-b-11">
                                {{$haber->baslik}}
                            </h4>

                            <div class="flex-wr-s-c m-b-11">
                                <div class="p-r-20">
                                    <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                    <span class="t1-s-2 cl-7">
										{{date('d-m-y',strtotime($haber->created_at))}}
									</span>
                                </div>

                                {{--<div class="p-l-20 bo-l-1 bcl-12">
                                    <i class="fs-14 cl-7 fa fa-user m-r-2"></i>

                                    <a href="#" class="t1-s-2 cl-11 hov-link3">

                                    </a>
                                </div>--}}
                            </div>

                            <p class="t1-s-2 cl-6 m-b-9">
                                {!! $haber->icerik !!}
                            </p>




                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

@section('css')

@endsection

@section('js')

@endsection