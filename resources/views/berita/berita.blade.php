@extends('layouts.app')
@section('content')
<!-- Start your project here-->
<div>
    <p class="animated fadeIn" style="font-size:28px">Berita Perpustakaan</p>

    <div class="card">

        <div class="card-body">
            <div class="col-lg-2">
                <a href="{{ url('/berita/tambah') }}" class="btn btn-primary btn-rounded btn-fw"><i
                        class="fa fa-plus"></i>
                    Tambah Berita</a>
            </div>
            <div class="col-md-12">
                <div class="container-fluid">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Keterangan</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($berita as $g)
                            <tr>
                                <td><img src="{{ url('/data_file/'.$g->file) }}" style="width:150px; height:150px"></td>
                                <td><div>{{$g->keterangan}}</div></td>
                                <td>
                                    <a class="btn btn-warning" href="/berita/edit/{{ $g->id }}">Edit</a>
                                    <a class="btn btn-danger" href="/berita/hapus/{{ $g->id }}">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table><br>
                    {{$berita->render("pagination::bootstrap-4")}}
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    table {
    width:500px;
    table-layout:fixed;
    }

    td div{
      width:260px;
      height:400px;
      display:inline-block ;
      word-wrap:break-word !important;  
      overflow-wrap:break-word;
      white-space:pre-line;
      -ms-word-break :break-word;
      line-height:17px;
    }

    
</style>
<!-- End your project here-->
@endsection