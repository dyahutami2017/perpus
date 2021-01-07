@extends('layouts.app')
@section('content')
<!-- Start your project here-->
<div style="height: 100vh">
    <div class="col-md-6">
        <p class="animated fadeIn" style="font-size:28px">Berita Perpustakaan</p>
        <hr>
        <form action="{{ url('/berita/upload') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="message">Berita</label>
                <textarea name="ket_berita" id="ket_berita" class="form-control"
                    placeholder="Masukkan berita yang ingin ditampilkan" rows=10></textarea>
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <label class="custom-file-label" id="fileLabel" for="file">Pilih Foto</label>
                    <input type="file" name="file" id="file" class="custom-file-input" >
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="form-group col-md-6 text-right">
                    <a class="btn btn-danger" href="/berita">Kembali</a>
                </div>
            </div>
        </form>
        <hr>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
<!-- End your project here-->
@endsection