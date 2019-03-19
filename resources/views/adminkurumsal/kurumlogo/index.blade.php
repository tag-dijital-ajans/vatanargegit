@extends ('adminkurumsal/template')

@section('icerik')
    <div style="float:left; margin: 15px 0 5px 0;"><a href="{{route('kurum.create')}}" class="btn btn-success">Kurum Ekle</a></div>
    <div style="clear:both;"></div>
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Referans Yönetimi</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th width="5%">Sıra</th>
                    <th width="15%">Logo</th>
                    <th>Kurum Adı</th>
                    <th>Açıklama</th>
                    <th>Logo Link</th>
                    <th width="5%">Düzenle</th>
                    <th width="5%">Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($kurumlar as $kurum)
                    <tr class="gradeX">
                        <td>{{$kurum->sira}}</td>
                        <td><img src="/{{$kurum->logo}}" width="150px"></td>
                        <td>{{$kurum->kurumadi}}</td>
                        <td>{{$kurum->aciklama}}</td>
                        <td>{{$kurum->link}}</td>


                        <td class="center"><a href="{{route('kurum.edit', $kurum->id)}}"class="btn btn-success btn-mini">Düzenle</a> </td>

                        {!! Form::model($kurum,['route'=>['kurum.destroy',$kurum->id],'method'=>'DELETE']) !!}
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