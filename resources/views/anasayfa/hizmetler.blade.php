@extends ('anasayfa.template')

@section('icerik')

    <!-- Title page -->
    <section class="bg-img1 kit-overlay1" style="background-image: url(/anasayfa/images/bg-07.jpg);">
        <div class="container size-h-3 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1  cl-0 txt-center m-b-25">
                Birimler
            </h2>

            <div class="flex-wr-c-c">
                <a href="{{route('anasayfa')}}" class="breadcrumb-item">
                    Anasayfa
                </a>

                <span class="breadcrumb-item">
					Birimler
				</span>
            </div>
        </div>
    </section>
    <section class="bg-0 p-t-92 p-b-60">
        <div class="container">
            <!-- Title section -->

            <div class="row justify-content-center">
                @foreach($hizmetler as $service)
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





@endsection

@section('css')

@endsection

@section('js')

@endsection