

    <!-- Footer -->
    <footer>
        <div class="parallax100 kit-overlay1 p-t-35 p-b-10" style="background-image: url(/anasayfa/images/bg-03.jpg);">
            <div class="container">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-sm-12 col-md-4 col-lg-6 p-b-20">
                        <div class="size-h-1 flex-s-e p-b-6 m-b-18">
                            <a href="#">
                                <img class="max-s-full" src="/{{$ayar->footerlogo}}" width="140"height="75" alt="IMG">
                            </a>
                        </div>

                        <div>
                            <p class="t1-s-2 cl-13 p-b-17">
                                   {{$ayar->tag_manager_kod}}
                            </p>

                            <div class="flex-wr-s-c p-t-10">
                                @if($ayar->facebook)
                                <a href="{{$ayar->facebook}}" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                @endif
                                @if($ayar->twitter)
                                <a href="{{$ayar->twitter}}" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                @endif
                                @if($ayar->pinterest)
                                <a href="{{$ayar->pinterest}}" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                                @endif
                                @if($ayar->instagram)
                                <a href="{{$ayar->instagram}}" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                @endif
                                @if($ayar->linkedin)
                                <a href="{{$ayar->linkedin}}" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                @endif
                                @if($ayar->youtube)
                                <a href="{{$ayar->youtube}}" class="flex-c-c size-a-7 borad-50per bg-11 fs-16 cl-0 hov-btn2 trans-02 m-r-10">
                                     <i class="fa fa-youtube"></i>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-20">
                        <div class="size-h-1 flex-s-e m-b-18">
                            <h4 class="t1-m-3 text-uppercase cl-0">
                                İletişim
                            </h4>
                        </div>

                        <ul>
                            <li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
								<span class="size-w-3">
									<i class="fa fa-home" aria-hidden="true"></i>
								</span>

                                <span class="size-w-4">
									{{$ayar->firma_adres}}
								</span>
                            </li>

                            <li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
								<span class="size-w-3">
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
								</span>

                                <span class="size-w-4">
									{{$ayar->email}}
								</span>


                            </li>
                            <li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
								<span class="size-w-3">
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
								</span>

                                <span class="size-w-4">
									{{$ayar->email2}}
								</span>
                            </li>

                            <li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
								<span class="size-w-3">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>

                                <span class="size-w-4">
									{{$ayar->telefon}}

								</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-20">
                        <div class="size-h-1 flex-s-e m-b-18">
                            <h4 class="t1-m-3 text-uppercase cl-0">
                               Linkler
                            </h4>
                        </div>

                        <div class="flex-wr-s-s">

                            <ul class="w-50">


                                <li class="kit-list1 p-b-9">
                                    <a href="{{route('anasayfa')}}" class="t1-s-2 cl-13 hov-link2 trans-02">
                                       Anasayfa</a>
                                </li>
                                <li class="kit-list1 p-b-9">
                                    <a href="{{route('hizmetleri.goster')}}" class="t1-s-2 cl-13 hov-link2 trans-02">
                                        Haberler</a>
                                </li>
                                <li class="kit-list1 p-b-9">
                                 <a href="{{route('hizmetleri.goster')}}" class="t1-s-2 cl-13 hov-link2 trans-02">
                                    Hizmetler</a>
                                </li>
                                <li class="kit-list1 p-b-9">
                                                                 <a href="{{route('ekip.sayfasi')}}" class="t1-s-2 cl-13 hov-link2 trans-02">
                                                                    Proje Ekibi</a>
                                                                </li>
                               <li class="kit-list1 p-b-9">
                               <a href="{{route('iletisim.formu')}}" class="t1-s-2 cl-13 hov-link2 trans-02">
                                   İletişim</a>
                               </li>

                            </ul>



                        </div>
                    </div>

                    {{--<div class="col-sm-6 col-md-6 col-lg-3 p-b-20">
                        <div class="size-h-1 flex-s-e m-b-18">
                            <h4 class="t1-m-3 text-uppercase cl-0">
                                Son Haberler
                            </h4>
                        </div>

                        <div class="flex-wr-s-s p-t-6 gallery-mp">
                            @foreach($footericerikler as $footericerik)

                            <a href="/haber/{{$footericerik->id}}/{{$footericerik->slug}}" class="d-block size-a-8 bg-img1 hov-overlay1 m-r-10 m-b-20" style="background-image: url(/{{$footericerik->resim}});"></a>

                            @endforeach
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
<section class="bg-0 p-t-20 p-b-20">


        <div class="row justify-content-center">

            @foreach ($kurumlogolar as $kurum)
            <div class="col-sm-4 col-lg-2 flex-c-c p-b-60">
                <a href="{{$kurum->link}}" target="_blank">
                    <img class="trans-02 max-s-full" src="/{{$kurum->logo}}" width="200"  alt="{{$kurum->kurumadi}}">
                </a>
            </div>
@endforeach

        </div>

</section>
        <div class="bg-10">
            <div class="container txt-center p-tb-15">
				<span class="t1-s-2 cl-14">
					{{$ayar->footer_yazisi}}
				</span>
            </div>
        </div>
    </footer>
