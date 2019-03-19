@extends ('adminkurumsal/template')

@section('icerik')
    <div style="float:right; margin: 15px 0 5px 0;"><a href="{{route('kategori.create')}}" class="btn btn-success">Kategori Ekle</a></div>
    <div style="clear:both;"></div>
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Kategori Yönetimi</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Kategori</th>

                    <th>Kategori Açıklama</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
                </thead>
                <tbody>
                @foreach($kategoriler as $kategori)
                <tr class="gradeX">
                    <td>{{$kategori->kategori_baslik}}</td>
                    <td>{{$kategori->kategori_aciklama}}</td>
                    <td class="center"><a href="{{route('kategori.edit', $kategori->id)}}"class="btn btn-success btn-mini">Düzenle</a> </td>

                    @if($kategori->id == '1')
                    <td>Silinemez</td>
                    @else
                    {!! Form::model($kategori,['route'=>['kategori.destroy',$kategori->id],'method'=>'DELETE']) !!}
                    <td class="center">
                        <button type="submit" onclick="return window.confirm('Silmek istediğinize eminmisiniz?');" class="btn btn-danger btn-mini">Sil</button>
                    </td>

                    {!! Form::close() !!}
                    @endif
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