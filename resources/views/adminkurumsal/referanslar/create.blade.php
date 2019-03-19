@extends ('adminkurumsal/template')

@section('icerik')


    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5> Referans Ekle</h5>
                </div>



                <div class="widget-content nopadding">
                    {!! Form::open(['route'=>'referanslar.store','method'=>'POST','class'=>'form-horizontal','files'=>'true']) !!}




                    <div class="control-group">
                        <label class="control-label"> Referans adı</label>
                        <div class="controls">
                            <input type="text" class="span11" name="referans_adi"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"> Firma Adı</label>
                        <div class="controls">
                            <input type="text" class="span11" name="firma_adi"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"> Referans Açıklama</label>
                        <div class="controls">
                            <input type="text" class="span11" name="referans_aciklama"  />
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label"> Görsel Linki</label>
                        <div class="controls">
                            <input type="text" class="span11" name="link" placeholder="http kullanınız" />
                        </div>
                    </div>


                     <div class="control-group">
                                                    <label class="control-label"> Sıra</label>
                                                    <div class="controls">
                                                    <input type="number" class="span11" name="sira" onkeyup="value=isNaN(parseFloat(value))?1:value"  />
                                                    </div>
                                                </div>

                    <div class="control-group">
                        <label class="control-label"> Referans  Fotoğrafı</label>
                        <div class="controls">
                            <input type="file" name="referans_gorseli"  class="span11"  />
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Referans  Ekle</button>
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