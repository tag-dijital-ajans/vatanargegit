@extends ('adminkurumsal/template')

@section('icerik')


    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5> Ekip Düzenle </h5>
                </div>



                <div class="widget-content nopadding">
                    {!! Form::model($ekip,(['route'=>['ekip.update',$ekip->id],'method'=>'PUT','class'=>'form-horizontal','files'=>'true'])) !!}


                    <div class="control-group">
                        <label class="control-label"> Ad Soyad</label>
                        <div class="controls">
                            <input type="text" class="span11" value="{{$ekip->ad}}" name="ad"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"> Görevi</label>
                        <div class="controls">
                           <input type="text" class="span11" name="gorev" value="{{$ekip->gorev}}"  />
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label"> Twitter Link</label>
                        <div class="controls">
                            <input type="text" class="span11" name="twitter" value="{{$ekip->twitter}}"  />
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label"> Linkedin Link</label>
                        <div class="controls">
                            <input type="text" class="span11" name="linkedin" value="{{$ekip->linkedin}}"  />
                        </div>
                    </div>


                    <div class="control-group">
                                <label class="control-label">Sıra</label>
                                <div class="controls">
                                   <input type="number" min="1" value="{{$ekip->sira}}" class="span11" name="sira" onkeyup="value=isNaN(parseFloat(value))?1:value" />
                                </div>
                            </div>

                    <div class="control-group">
                        <label class="control-label">Fotoğraf</label>
                        <div class="controls">
                            <input type="file" name="fotograf"  class="span11"  />
                            <div>
                            <img src="/{{$ekip->fotograf}}" width="150px">
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Kaydet</button>
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