
<!-- Birimler -->
<section class="bg-12 p-t-92 p-b-60">
    <div class="container">
        <!-- Title section -->
        <div class="flex-col-c-c p-b-50">
            <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                Birimler
            </h3>

            <div class="size-a-2 bg-3"></div>
        </div>

        <!--  -->
        <div class="row justify-content-center">
            @foreach($services as $service)
            <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                <!-- Block2 -->
                <div class="block2 bg-img2" style="background-image: url('/{{$service->hizmet_one_cikan_foto}}');">
                    <div class="block2-content trans-04">
                        <h4 class="block2-title t1-m-1 cl-0 flex-s-c trans-04">
                            {{$service->hizmet_basligi}}
                        </h4>

                        {{--<p class="t1-s-2 cl-13 p-b-26">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, various versions have evolved over the years.
                        </p>--}}

                        <a href="/hizmet/{{$service->id}}/{{$service->slug}}" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-6 bg-0 hov-btn3 trans-02">
                            Detaylar
                        </a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>



<!--Birimler -->




    <!-- Eski Birimler -->
    {{--<section class="bg-0 p-t-20 p-b-20">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-20">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                    Birimler
                </h3>

                <div class="size-a-2 bg-3"></div>
            </div>
            <div class="row justify-content-center">
            <!--  -->
            @foreach($services as $service)

                <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                    <div class="bg-12 h-full">
                        <a href="/hizmet/{{$service->id}}/{{$service->slug}}" class="hov-img0 of-hidden bg-0">
                            <img src="/{{$service->hizmet_one_cikan_foto}}" alt="IMG" width="100" height="320" >

                        </a>

                        <div class="p-rl-30 p-t-26 p-b-20">
                            <h4 class="p-b-9">
                                <a href="/hizmet/{{$service->id}}/{{$service->slug}}" class="t1-m-1 cl-2 hov-link2 trans-02">
                                    {{$service->hizmet_basligi}}
                                </a>
                            </h4>

                            --}}{{--<p style="color: #fff;">
                                {!! $service->hizmet_icerik !!}
                            </p>--}}{{--
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>--}}

<!-- Video -->
<div class="bg-0 p-t-100 p-b-40">

        <div class="flex-wr-c-s">
	<section class="bg-0 p-t-20 p-b-20">
		<div class="container">

			<div class="size-w-1 m-rl-auto">
				<iframe width="600" height="315" float="left" src="https://www.youtube.com/embed/{{$anasayfaayar->anasayfavideo}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</section>
        </div>

</div>