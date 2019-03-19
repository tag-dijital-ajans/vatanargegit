@extends ('adminkurumsal/template')

@section('icerik')


    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Site Ayarları</h5>
                </div>
                <div class="widget-content nopadding">
                   {!! Form::model($ayarlar,['route'=>['ayarlar.update',1],'method'=>'PUT','files'=>'true','class'=>'form-horizontal']) !!}


                   {{-- <div class="control-group">
                        <label class="control-label">Tema Rengi </label>
                        <div class="controls">
                            <select name="temarenk" class="span11">


                                    <option  value="mavi" @if($ayarlar->temarenk=='mavi')
                                    selected
                                    @endif>Mavi</option>

                                    <option value="kirmizi" @if($ayarlar->temarenk=='kirmizi')
                                    selected
                                            @endif>Kırmızı</option>
                                    <option value="turuncu" @if($ayarlar->temarenk=='turuncu')
                                    selected
                                            @endif>Turuncu</option>
                            </select>



                        </div>
                    </div>--}}




                        <div class="control-group">
                            <label class="control-label"> Site Başlık</label>
                            <div class="controls">
                                <input type="text" class="span11" name="site_adi" value="{{$ayarlar->site_adi}}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Firma Adresi</label>
                            <div class="controls">
                                <input type="text" class="span11" name="firma_adres" value="{{$ayarlar->firma_adres}}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"> E-Mail Adresi</label>
                            <div class="controls">
                                <input type="email" class="span11" name="email" value="{{$ayarlar->email}}"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Ana Logo</label>
                            <div class="controls">
                                <input type="file" name="logo" class="span11"  />


                                <span class="help-block">jpeg,png,jpg,gif,svg|max:512kb</span>

                                <div>
                                <img width="200px" src="/{{$ayarlar->logo}}">

                                </div><button type="submit" class="btn btn-success">Logo Güncelle</button>
                            </div>

                        </div>
                        <div class="control-group">
                            <label class="control-label">Footer Logo</label>
                            <div class="controls">
                                <input type="file" name="footerlogo" class="span11"  />


                                <span class="help-block">Max.500 kb</span>

                                <div>
                                <img width="200px" src="/{{$ayarlar->footerlogo}}">
                                <div>jpeg,png,jpg,gif,svg|max:512kb</div>

                                </div><button type="submit" class="btn btn-success">Logo Güncelle</button>
                            </div>

                        </div>
                        <div class="control-group">
                             <label class="control-label">Favicon</label>
                                <div class="controls">
                                   <input type="file" name="favicon" class="span11" />

                                   <span class="help-block">Max 40x40 (px) ve 100 kb</span>
                                   <div>
                                    <img width="40px" height="40px" src="/{{$ayarlar->favicon}}">
                                   </div>
                                    <button type="submit" class="btn btn-success">Favicon Güncelle</button>
                                   </div>
                                   </div>
                        <div class="control-group">
                            <label class="control-label"> Telefon</label> {{--Veritabanından Telefon int(11) -> varchar(22) olarak değiştir--}}
                            <div class="controls">
                                <input type="number" name="telefon" value="{{$ayarlar->telefon}}" class="span11" />
                                <span class="help-block">Örn(02566125960)</span>
                             </div>
                        </div>
                     <span><strong>Metin Ayarlar</strong></span>
                    <div class="control-group">
                        <label class="control-label">Footer Logo Altı Yazı</label>
                        <div class="controls">
                            <textarea class="span11" placeholder="Google Tag Manager <head> kodu" name="tag_manager_kod">{{$ayarlar->tag_manager_kod}}</textarea>
                            {{--Input Tipi Değişti--}}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"> Google Map </label>
                        <div class="controls">
                             <input type="text" class="span11" value="{{$ayarlar->tag_manager_script}}" placeholder="Google Tag Manager <body> kodu" name="google_map">{!! $ayarlar->tag_manager_script !!}</input>

                         </div>
                    </div>




                    <div class="control-group">
                        <label class="control-label"> Footer Yazısı</label>
                        <div class="controls">
                            <input type="text" class="span11" name="footer_yazisi" value="{{$ayarlar->footer_yazisi}}" />
                            <span class="help-block">Html Kullanmayınız</span>
                        </div>
                    </div>
                    <span><strong>Sosyal Medya Hesapları - Full Profil Linklerini Giriniz</strong></span>
                    <div class="control-group">
                         <label class="control-label">Facebook</label>
                         <div class="controls">
                         <input type="text" class="span11" placeholder="https://facebook.com/kullaniciadi" name="facebook" value="{{$ayarlar->facebook}}" />

                         </div>
                     </div>
                     <div class="control-group">
                         <label class="control-label">Instagram</label>
                         <div class="controls">
                         <input type="text" class="span11" placeholder="https://instagram.com/kullaniciadi" name="instagram" value="{{$ayarlar->instagram}}" />

                         </div>
                     </div>
                     <div class="control-group">
                         <label class="control-label">Twitter</label>
                         <div class="controls">
                         <input type="text" class="span11" placeholder="https://twitter.com/kullaniciadi" name="twitter" value="{{$ayarlar->twitter}}" />

                         </div>
                     </div>
                     <div class="control-group">
                         <label class="control-label">LinkedIn</label>
                         <div class="controls">
                         <input type="text" class="span11" placeholder="Linkedin Profil Adresi" name="linkedin" value="{{$ayarlar->linkedin}}" />

                         </div>
                     </div>
                        <div class="control-group">
                         <label class="control-label">Pinterest</label>
                         <div class="controls">
                         <input type="text" class="span11" name="pinterest" value="{{$ayarlar->pinterest}}" />

                         </div>
                     </div>
                        <div class="control-group">
                         <label class="control-label">Youtube</label>
                         <div class="controls">
                         <input type="text" class="span11" name="youtube" placeholder="Kanal Adresi" value="{{$ayarlar->youtube}}" />

                         </div>
                     </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Güncelle</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>

    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection