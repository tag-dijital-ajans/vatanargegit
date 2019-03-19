<!-- Slide -->
<section class="slider">
    <div class="rev_slider_wrapper fullwidthbanner-container">
        <div id="rev_slider_1" class="rev_slider fullwidthabanner" data-version="5.4.5" style="display:none">
            <ul>
                <!-- Slide 1 -->@foreach($sliders as $slider)
                <li data-transition="slidingoverlayhorizontal">

                    <img src="{{$slider->slider_resmi}}" alt="IMG-SLIDE" class="rev-slidebg">

                    <h2 class="tp-caption tp-resizeme caption-1 text-uppercase"
                        data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:left;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-visibility="['on', 'on', 'on', 'on']"

                        data-fontsize="['48', '48', '48', '38']"
                        data-lineheight="['58', '58', '58', '58']"
                        data-color="['#FFF']"
                        data-textAlign="['center', 'center', 'center', 'center']"

                        data-x="['center']"
                        data-y="['center']"
                        data-hoffset="['0', '0', '0', '0']"
                        data-voffset="['-83', '-83', '-83', '-93']"

                        data-width="['1200','992','768','480']"
                        data-height="['auto', 'auto', 'auto', 'auto']"
                        data-whitespace="['normal']"

                        data-paddingtop="[0, 0, 0, 0]"
                        data-paddingright="[15, 15, 15, 15]"
                        data-paddingbottom="[0, 0, 0, 0]"
                        data-paddingleft="[15, 15, 15, 15]"

                        data-basealign="slide"
                        data-responsive_offset="off"
                    >{{$slider->metin1}}</h2>

                    <p class="tp-caption tp-resizeme caption-2"
                       data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                       data-visibility="['on', 'on', 'on', 'on']"

                       data-fontsize="['30', '30', '30', '25']"
                       data-lineheight="['39', '39', '39', '39']"
                       data-color="['#FFF']"
                       data-textAlign="['center', 'center', 'center', 'center']"

                       data-x="['center']"
                       data-y="['center']"
                       data-hoffset="['0', '0', '0', '0']"
                       data-voffset="['-13', '-13', '-13', '-13']"

                       data-width="['1200','992','768','480']"
                       data-height="['auto', 'auto', 'auto', 'auto']"
                       data-whitespace="['normal']"

                       data-paddingtop="[0, 0, 0, 0]"
                       data-paddingright="[15, 15, 15, 15]"
                       data-paddingbottom="[0, 0, 0, 0]"
                       data-paddingleft="[15, 15, 15, 15]"

                       data-basealign="slide"
                       data-responsive_offset="off"
                    >
                        {{$slider->metin2}}
                       {{-- Başarınızın Arkasında Duruyoruz--}}
                    </p>

                    <div class="tp-caption tp-resizeme caption-3 flex-wr-c-c d-flex"
                         data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-x="['center']"
                         data-y="['center']"
                         data-hoffset="['0', '0', '0', '0']"
                         data-voffset="['88', '88', '88', '88']"

                         data-width="['1200','992','768','480']"
                         data-height="['auto']"

                         data-paddingtop="[0, 0, 0, 0]"
                         data-paddingright="[10, 10, 10, 10]"
                         data-paddingbottom="[0, 0, 0, 0]"
                         data-paddingleft="[10, 10, 10, 10]"

                         data-basealign="slide"
                         data-responsive_offset="off"
                    >
                        <a href="{{$slider->buton_linki}}" class="btn2 flex-c-c">
                            {{$slider->buton_metni}}
                        </a>

                        {{--<a href="http://127.0.0.1:8000/sayfa/4/hakkimizda" class="btn2 flex-c-c">
                            {{$slider->buton_linki}}
                        </a>--}}
                    </div>

                </li>
            @endforeach

            </ul>
        </div>
    </div>
</section>
