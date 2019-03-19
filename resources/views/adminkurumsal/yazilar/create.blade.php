
@extends('adminkurumsal/template')
@section('icerik')

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>İçerik Ekle</h5>
                </div>

                <div class="widget-content nopadding">
                    {!! Form::open(['route'=>'yazilar.store','method'=>'POST','class'=>'form-horizontal','files'=>'true']) !!}

                    <div class="control-group">
                        <label class="control-label">Kategori Seçin</label>
                        <div class="controls">
                            <select name="kategori" class="span11">

                                @foreach($kategoriler as $kategori)

                                    <option value="{{$kategori->id}}">{{$kategori->kategori_baslik}}</option>


                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">İçerik Başlık</label>
                        <div class="controls">
                            <input type="text" class="span11" name="baslik"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">İçerik Açıklama</label>
                        <div class="controls">
                            <textarea name="icerik" class="span11"></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">İçerik Resmi</label>
                        <div class="controls">
                            <input type="file" class="span11" name="resim"/>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">İçerik Ekle</button>
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

{{--
@extends ('adminkurumsal/template')

@section('icerik')


    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>İçerik  Ekle</h5>
                </div>



                <div class="widget-content nopadding">
                    {!! Form::open(['route'=>'yazilar.store','method'=>'POST','class'=>'form-horizontal','files'=>'true']) !!}


                    <div class="control-group">
                        <label class="control-label"> Blog Seçin</label>
                        <div class="controls">
                            <select name="blog" class="span11">

                                <option value="" selected> Blog Seçin</option>
                                @foreach($bloglar as $blog)

                                    <option value="{{$blog->id}}">{{$blog->blog_adi}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"> İçerik Başlık</label>
                        <div class="controls">
                            <input type="text" class="span11" name="baslik"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">İçerik Açıklama</label>
                        <div class="controls">
                            <textarea name="icerik" class="span11"></textarea>
                         </div>
                    </div>



                    <div class="control-group">
                        <label class="control-label">İçerik İçin Öne Çıkan Foto Ekle</label>
                        <div class="controls">
                            <input type="file" name="resim"  class="span11"  />
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">İçerik Ekle</button>
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
@endsection--}}
