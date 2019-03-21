<!-- Header desktop -->
<nav class="container-header-desktop">
    <div class="top-bar">
        <div class="content-topbar container flex-sb-c h-full">
            <div class="size-w-0 flex-wr-s-c">
                <div class="t1-s-1 cl-13 m-r-50">
							<span class="fs-16 m-r-6">
								<i class="fa fa-home" aria-hidden="true"></i>
							</span>
                    <span>{{$ayar->firma_adres}}</span>
                </div>

                <div class="t1-s-1 cl-13 m-r-50">
							<span class="fs-16 m-r-6">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</span>
                    <span><a class="t1-s-2 cl-13 hov-link2 trans-02" href="tel:{{$ayar->telefon}}">{{$ayar->telefon}}</a></span>
                </div>


            </div>

            <div class="text-nowrap">
                @if($ayar->facebook)
                <a href="{{$ayar->facebook}}" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                    <i class="fa fa-facebook-official"></i>
                </a>
                @endif
                @if($ayar->twitter)
                <a href="{{$ayar->twitter}}" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                    <i class="fa fa-twitter"></i>
                </a>
                @endif
                @if($ayar->pinterest)
                <a href="{{$ayar->pinterest}}" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                    <i class="fa fa-pinterest"></i>
                </a>
                @endif
                @if($ayar->instagram)
                <a href="{{$ayar->instagram}}" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                    <i class="fa fa-instagram"></i>
                </a>
                @endif
                @if($ayar->linkedin)
                <a href="{{$ayar->linkedin}}" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                    <i class="fa fa-linkedin"></i>
                </a>
                @endif
                @if($ayar->youtube)
                 <a href="{{$ayar->youtube}}" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                                    <i class="fa fa-youtube"></i>
                                </a>
                                @endif
            </div>
        </div>
    </div>

    <div class="wrap-menu-desktop">
        <div class="limiter-menu-desktop container">
            <!-- Logo desktop -->
            <div class="logo" >
                <a href="{{route('anasayfa')}}"><img  src="/{{$ayar->logo}}" alt="LOGO" ></a>
            </div>

            <!-- Menu desktop -->
            <div class="menu-desktop">
                <ul class="main-menu respon-sub-menu">
                    @foreach($menuler as $menu)
                        <li>

                            @if($menu->sayfa_id == 0)
                        <a href="{{$menu->ozel_url}}">{{$menu->menu_baslik}}</a>

                            @else
                        <a href="/sayfa/{{$menu->sayfa_id}}/{{$menu->slug}}">{{$menu->menu_baslik}}</a>
                            @endif
                        @if($menu->altmenusu->count())
                        <ul class="sub-menu">
                            @foreach($menu->altmenusu as $altmenu)

                                @if ($altmenu->sayfa_id == 0)
                                    <li><a href="{{$altmenu->ozel_url}}">{{$altmenu->menu_baslik}}</a></li>
                                    @else
                            <li><a href="/sayfa/{{$altmenu->sayfa_id}}/{{$altmenu->slug}}">{{$altmenu->menu_baslik}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                        @endif

                    </li>

                    @endforeach

                        <li>
                            <a href="{{route('duyurular.goster')}}">Duyuru ve Etkinlikler</a>
                        </li>
                    <li>
                        <a href="{{route('iletisim.formu')}}">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Header Mobile -->
<nav class="container-header-mobile">
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="/"><img src="/{{$ayar->logo}}" alt="LOGO"></a>
        </div>


        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
        </div>
    </div>

    <div class="menu-mobile">
        <ul class="top-bar-m p-l-20 p-tb-8">
            <li>
                <div class="t1-s-1 cl-5 p-tb-3">
							<span class="fs-16 m-r-6">
								<i class="fa fa-home" aria-hidden="true"></i>
							</span>
                    <span>{{$ayar->firma_adres}}</span>
                </div>
            </li>

            <li>
                <div class="t1-s-1 cl-5 p-tb-3">
							<span class="fs-16 m-r-6">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</span>
                    <span>{{$ayar->telefon}}</span>
                </div>
            </li>



            <li>
                <div>
                    <a href="{{$ayar->facebook}}" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                        <i class="fa fa-facebook-official"></i>
                    </a>

                    <a href="{{$ayar->twitter}}" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a href="{{$ayar->instagram}}" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a href="{{$ayar->linkedin}}" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                        <i class="fa fa-linkedin"></i>
                    </a>

                    <a href="{{$ayar->youtube}}" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                        <i class="fa fa-youtube"></i>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
