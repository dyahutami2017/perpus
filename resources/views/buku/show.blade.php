@section('js')

<script type="text/javascript">

$(document).ready(function() {
    $(".users").select2();
});

</script>

<script type="text/javascript">
        function readURL() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(input).prev().attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $(".uploads").change(readURL)
            $("#f").submit(function(){
                // do ajax submit or just classic form submit
              //  alert("fake subminting")
                return false
            })
        })
        </script>
@stop

@extends('layouts.app')

@section('content')

<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Detail <b>{{$data->judul}}</b> </h4>
                      <form class="forms-sample">

                        <div class="form-group">
                            <div class="col-md-6">
                                <img width="200" height="200" @if($data->cover) src="{{ asset('images/buku/'.$data->cover) }}" @endif />
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                            <label for="judul" class="col-md-4 control-label">Judul</label>
                            <div class="col-md-6">
                                <input id="judul" type="text" class="form-control" name="judul" value="{{ $data->judul }}" readonly="">
                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('kategori') ? ' has-error' : '' }}">
                            <label for="lokasi" class="col-md-4 control-label">Kategori Buku</label>
                            <div class="col-md-6">
                            <select class="form-control" name="kategori" disabled="">
                                
                                <option value="{{$data->id}}">{{$data->kategori->jenis_kategori}}</option>
                                
                            </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('npm') ? ' has-error' : '' }}">
                            <label for="isbn" class="col-md-4 control-label">ISBN</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="isbn" value="{{ $data->isbn }}" readonly>
                                @if ($errors->has('isbn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isbn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('pengarang') ? ' has-error' : '' }}">
                            <label for="pengarang" class="col-md-4 control-label">Pengarang</label>
                            <div class="col-md-6">
                                <input id="pengarang" type="text" class="form-control" name="pengarang" value="{{ $data->pengarang }}" readonly>
                                @if ($errors->has('pengarang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pengarang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('penerbit') ? ' has-error' : '' }}">
                            <label for="penerbit" class="col-md-4 control-label">Penerbit</label>
                            <div class="col-md-6">
                                <input id="penerbit" type="text" class="form-control" name="penerbit" value="{{ $data->penerbit }}" readonly>
                                @if ($errors->has('penerbit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('penerbit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tahun_terbit') ? ' has-error' : '' }}">
                            <label for="tahun_terbit" class="col-md-4 control-label">Tahun Terbit</label>
                            <div class="col-md-6">
                                <input id="tahun_terbit" type="number" maxlength="4" class="form-control" name="tahun_terbit" value="{{ $data->tahun_terbit }}" readonly>
                                @if ($errors->has('tahun_terbit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tahun_terbit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('jumlah_buku') ? ' has-error' : '' }}">
                            <label for="jumlah_buku" class="col-md-4 control-label">Jumlah Buku</label>
                            <div class="col-md-6">
                                <input id="jumlah_buku" type="number" maxlength="4" class="form-control" name="jumlah_buku" value="{{ $data->jumlah_buku }}" readonly>
                                @if ($errors->has('jumlah_buku'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jumlah_buku') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                            <label for="deskripsi" class="col-md-4 control-label">Deskripsi</label>
                            <div class="col-md-12">
                                <input id="deskripsi" type="text" class="form-control" name="deskripsi" value="{{ old('deskripsi') }}" readonly="">
                                @if ($errors->has('deskripsi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deskripsi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lokasi') ? ' has-error' : '' }}">
                            <label for="lokasi" class="col-md-4 control-label">Lokasi</label>
                            <div class="col-md-6">
                            <select class="form-control" name="lokasi" disabled="">
                                <option value="Rak 000" {{$data->lokasi === "Rak 000" ? "selected" : ""}}>Rak 000</option>
                                <option value="Rak 100" {{$data->lokasi === "Rak 100" ? "selected" : ""}}>Rak 100</option>
                                <option value="Rak 200" {{$data->lokasi === "Rak 200" ? "selected" : ""}}>Rak 200</option>
                                <option value="Rak 300" {{$data->lokasi === "Rak 300" ? "selected" : ""}}>Rak 300</option>
                                <option value="Rak 400" {{$data->lokasi === "Rak 400" ? "selected" : ""}}>Rak 400</option>
                                <option value="Rak 500" {{$data->lokasi === "Rak 500" ? "selected" : ""}}>Rak 500</option>
                                <option value="Rak 600" {{$data->lokasi === "Rak 600" ? "selected" : ""}}>Rak 600</option>
                                <option value="Rak 700" {{$data->lokasi === "Rak 700" ? "selected" : ""}}>Rak 700</option>
                                <option value="Rak 800" {{$data->lokasi === "Rak 800" ? "selected" : ""}}>Rak 800</option>
                                <option value="Rak 900" {{$data->lokasi === "Rak 900" ? "selected" : ""}}>Rak 900</option>
                                <option value="Rak Novel/Fiksi" {{$data->lokasi === "Rak Novel/Fiksi" ? "selected" : ""}}>Rak Novel/Fiksi</option>
                                <option value="Rak Referensi" {{$data->lokasi === "Rak Referensi" ? "selected" : ""}}>Rak Referensi</option>
                                <option value="Rak Program Keahlian" {{$data->lokasi === "Rak Program Keahlian" ? "selected" : ""}}>Rak Program Keahlian</option>
                            </select>
                            </div>
                        </div>


                        <a href="{{route('buku.index')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
@endsection