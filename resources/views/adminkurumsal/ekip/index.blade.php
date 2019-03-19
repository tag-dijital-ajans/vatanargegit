@extends ('adminkurumsal/template')

@section('icerik')
    <div style="float:left; margin: 15px 0 5px 0;"><a href="{{route('ekip.create')}}" class="btn btn-success">Ekip Üyesi Ekle</a></div>
    <div style="clear:both;"></div>
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Ekip Yönetimi</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th width="3%">Sıra</th>
                    <th width="20%">Fotoğraf</th>
                    <th width="30%">Ad Soyad</th>
                    <th>Görevi</th>
                    <th>Twitter Linki</th>
                    <th>Linkedin Linki</th>
                    <th width="5%">Düzenle</th>
                    <th width="5%">Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ekipler as $ekip)
                    <tr class="gradeX">
                        <td>{{$ekip->sira}}</td>
                        <td><img src="/{{$ekip->fotograf}}" width="100px"></td>
                        <td>{{$ekip->ad}}</td>
                        <td>{{$ekip->gorev}}</td>
                        <td>{{$ekip->twitter}}</td>
                        <td>{{$ekip->linkedin}}</td>

                        <td class="center"><a href="{{route('ekip.edit', $ekip->id)}}"class="btn btn-success btn-mini">Düzenle</a> </td>

                        {!! Form::model($ekip,['route'=>['ekip.destroy',$ekip->id],'method'=>'DELETE']) !!}
                        <td class="center">
                            <button type="submit" onclick="return window.confirm('Silmek istediğinize eminmisiniz?');" class="btn btn-danger btn-mini">Sil</button>
                        </td>

                        {!! Form::close() !!}
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>


@endsection

@section('css')
    <link rel="stylesheet" href="/adminkurumsal/css/uniform.min.css" />
    <link rel="stylesheet" href="/adminkurumsal/css/select2.css" />

@endsection

@section('js')
    <script src="/adminkurumsal/js/excanvas.min.js"></script>
    <script src="/adminkurumsal/js/jquery.min.js"></script>
    <script src="/adminkurumsal/js/jquery.ui.custom.js"></script>
    <script src="/adminkurumsal/js/bootstrap.min.js"></script>

    <script src="/adminkurumsal/js/jquery.dataTables.min.js"></script>
    <script src="/adminkurumsal/js/matrix.tables.js"></script>
@endsection