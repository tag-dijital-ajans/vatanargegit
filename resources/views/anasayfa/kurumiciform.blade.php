@extends ('anasayfa.template')

@section('icerik')
    <!-- Title page -->


    <!-- Contact -->
    <section class="bg-0 p-t-95 p-b-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-6 p-b-60">
                    <h3 class="t1-m-5 cl-3 m-b-44">
                        Kurum İçi Başvuru
                    </h3>

                    <form id="contact-form" class="validate-form" method="post" action="{{route('kurumiciform.gonder')}}" name="contact">
                        <div class="m-b-15 validate-input" data-validate = "Name is required">
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="name" placeholder="Adınız Soyadınız">
                        </div>

                        <div class="m-b-15 validate-input" data-validate = "Valid email is: ex@abc.xyz">
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="sicilno" placeholder="Sicil Numaranız">
                        </div>

                        <div class="m-b-15 validate-input" data-validate = "Phone is required">
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="email" placeholder="E-Posta">
                        </div>
                        <div class="m-b-15 validate-input" data-validate = "Phone is required">
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="phone" placeholder="Telefon Numaranız">
                        </div>


                        <div class="m-b-15 validate-input" data-validate = "Phone is required">
                            <h1>Eğitim Bilgileri</h1><input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="mezun" placeholder="En Son Mezun Olduğu Yer">
                        </div>


                        <div class="m-b-30 validate-input" data-validate = "Message is required">
                            <h1>Kurum İçi Çözüm Önerisi Proje</h1><textarea class="size-a-14 t1-m-2 plh-6 cl-6 p-rl-20 p-tb-13 bo-1-rad-4 bcl-12 focus-in1" name="fkrad" placeholder="Fikir Adı"></textarea>
                        </div>


                        <div class="m-b-30 validate-input" data-validate = "Message is required">
                            <h1>Proje</h1><textarea class="size-a-14 t1-m-2 plh-6 cl-6 p-rl-20 p-tb-13 bo-1-rad-4 bcl-12 focus-in1" name="fkrozet" placeholder="Fikir Özeti"></textarea>
                        </div>

                       {{-- <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                            <strong>Başarılı!</strong> Başvurunuz Alındı Sizinle En Yakın Zamanda İletişime Geçilecektir.
                        </div>

                        <div class="alert alert-danger hidden mt-lg" id="contactError">
                            <strong>Hata!</strong> Mesajınız Gönderilirken Bir Hata Oluştu.
                            <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
                        </div>--}}
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