@extends ('anasayfa.template')

@section('icerik')
    <!-- Title page -->
    <section class="bg-img1 kit-overlay1" style="background-image: url(/anasayfa/images/bg-05.jpg);">
        <div class="container size-h-3 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1  cl-0 txt-center m-b-25">
                Kurum İçi Başvuru
            </h2>

            <div class="flex-wr-c-c">
                <a href="/iletisim" class="breadcrumb-item">
                    Anasayfa
                </a>

                <span class="breadcrumb-item">
					 Kurum içi başvuru
				</span>
            </div>
        </div>
    </section>



    <section class="bg-0 p-t-95 p-b-40">
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (\Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-6 p-b-60">
                    <h3 class="t1-m-5 cl-3 m-b-44">
                        Kurum İçi Başvuru
                    </h3>

                    <form id="contact-form" class="validate-form" method="post" action="{{route('kurumiciform.gonder')}}" name="contact">
                        {{csrf_field()}}
                        <div class="m-b-15 validate-input" >
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="name" placeholder="Adınız Soyadınız" required>
                        </div>

                        <div class="m-b-15 validate-input" >
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="sicilno" placeholder="Sicil Numaranız" required>
                        </div>

                        <div class="m-b-15 validate-input" >
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="email" placeholder="E-Posta" required>
                        </div>
                        <div class="m-b-15 validate-input" >
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="phone" placeholder="Telefon Numaranız" required>
                        </div>


                        <div class="m-b-15 validate-input" >
                            <h1>Eğitim Bilgileri</h1><input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="mezun" placeholder="En Son Mezun Olduğu Yer" required>
                        </div>


                        <div class="m-b-30 validate-input" >
                            <h1>Kurum İçi Çözüm Önerisi Proje</h1><textarea class="size-a-14 t1-m-2 plh-6 cl-6 p-rl-20 p-tb-13 bo-1-rad-4 bcl-12 focus-in1" name="fkrad" placeholder="Fikir Adı" required></textarea>
                        </div>


                        <div class="m-b-30 validate-input" >
                            <h1>Proje</h1><textarea class="size-a-14 t1-m-2 plh-6 cl-6 p-rl-20 p-tb-13 bo-1-rad-4 bcl-12 focus-in1" name="fkrozet" placeholder="Fikir Özeti" required></textarea>
                        </div>


                        <button  id="yer2" class="size-a-15 flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 p-rl-15">
                            Başvur
                        </button>

                    </form>
                </div>


            </div>
        </div>
    </section>
@endsection

@section('css')

@endsection

@section('js')

@endsection