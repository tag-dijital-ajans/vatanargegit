@extends ('adminkurumsal/template')

@section('icerik')
    <div style="float:right; margin: 15px 0 5px 0;"><a href="{{route('referanslar.create')}}" class="btn btn-success">Referans Ekle</a></div>
    <div style="clear:both;"></div>
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Proje Paydaşları Yönetimi</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th width="5%">Sıra</th>
                    <th width="10%">Logo</th>
                    <th>Firma Adı</th>
                    <th>Açıklama</th>
                    <th>Görsel Linki</th>
                    <th width="5%">Düzenle</th>
                    <th width="5%">Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($referanslar as $referans)
                    <tr class="gradeX">
                        <td>{{$referans->sira}}</td>
                        <td><img src="/{{$referans->referans_gorseli}}" width="150px"> </td>
                        <td>{!! str_limit(strip_tags($referans->firma_adi),$limit=100,$end='...') !!} </td>

                        <td>{{$referans->referans_aciklama}}</td>
                        <td>{{$referans->link}}</td>

                        <td class="center"><a href="{{route('referanslar.edit', $referans->id)}}"class="btn btn-success btn-mini">Düzenle</a> </td>

                        {!! Form::model($referans,['route'=>['referanslar.destroy',$referans->id],'method'=>'DELETE']) !!}
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