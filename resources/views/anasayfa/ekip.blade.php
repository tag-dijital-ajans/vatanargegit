@extends('anasayfa/template')

@section('icerik')
<!-- Title page -->
	<section class="bg-img1 kit-overlay1" style="background-image: url(images/bg-05.jpg);">
		<div class="container size-h-3 p-tb-15 flex-col-c-c">
			<h2 class="t1-b-1  cl-0 txt-center m-b-10">
				Proje Ekibi
			</h2>

			<div class="flex-wr-c-c">
				<a href="{{route('anasayfa')}}" class="breadcrumb-item">
					Anasayfa
				</a>

				<span class="breadcrumb-item">
					Proje Ekibi
				</span>
			</div>
		</div>
	</section>

<!-- Team -->
	<section class="bg-0 p-t-92 p-b-52">
		<div class="container">
			<!-- Title section -->
			{{--<div class="flex-col-c-c p-b-50">
				<h3 class="t1-b-1 cl-3 txt-center m-b-11">
					Meet Our Team
				</h3>

				<div class="size-a-2 bg-3"></div>
			</div>--}}

			<!--  -->
			<div class="row justify-content-center">

				@foreach($ekipler as $ekip)
				<div class="col-sm-6 col-md-5 col-lg-3 p-b-40">
					<div>
						<div class="wrap-pic-w pos-relative">
							@if($ekip->fotograf)
							<img src="/{{$ekip->fotograf}}" alt="IMG">
							@else
								<img src="/uploads/personicon.png" alt="IMG">
								@endif

							<div class="s-full ab-t-l flex-wr-c-c p-tb-30 hov-2">
								<a href="{{$ekip->twitter}}" target="_blank" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
									<i class="fa fa-twitter"></i>
								</a>


								<a href="{{$ekip->linkedin}}" target="_blank" class="flex-c-c size-a-7 borad-50per bg-0 fs-16 cl-11 hov-btn3 m-all-5 hov-2-1">
									<i class="fa fa-linkedin"></i>
								</a>


							</div>


						</div>

						<div class="flex-col-c-c p-t-28">
							<a href="#" class="t1-m-1 text-uppercase cl-3 txt-center hov-link2 trans-02 m-b-5">
								{{$ekip->ad}}
							</a>

							<span class="t1-s-5 cl-6 txt-center">
								{{$ekip->gorev}}
							</span>
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



