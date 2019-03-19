@extends ('adminkurumsal/template')

@section('icerik')


    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Anasayfa Ayarları</h5>
                </div>
                <div class="widget-content nopadding">
                   {!! Form::model($ayarlar,['route'=>['anasayfaayarlar.update',1],'method'=>'PUT','files'=>'true','class'=>'form-horizontal']) !!}







                        <div class="control-group">
                            <label class="control-label"> Anasayfa Metin</label>
                            <div class="controls">
                                <textarea name="anasayfametin"> {!!$ayarlar->anasayfametin!!}</textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Anasayfa Video</label>
                            <div class="controls">
                                <input type="text" class="span11" name="anasayfavideo" value="{{$ayarlar->anasayfavideo}}" />
                            <div>Youube Video Kodu<p>https://www.youtube.com/watch?v=<strong>dOo2jWb73JY</strong></p></div>
                            </div>

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
 <script src="/adminkurumsal/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
@endsection