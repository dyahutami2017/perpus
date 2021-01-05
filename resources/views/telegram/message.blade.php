@extends('layouts.app')
@section('content')
<!-- Start your project here-->  
  <div style="height: 100vh">
    <div class="col-md-6">
      <p class="animated fadeIn" style="font-size:28px">Pesan Pengumuman</p>
      <hr>
      <form action="{{ url('/send-message') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        <div class="form-group">
            <label for="message">Pesan</label>
            <textarea name="message" id="message" class="form-control" placeholder="Masukkan pesan yang ingin disampaikan" rows="10"></textarea>
        </div>
        <div class="form-group">
            <div class="custom-file">
                <input type ="file" name="file" id="file" class="custom-file-input">
                <label class="custom-file-label" for="file">Pilih Foto</label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <hr>
    </div>
  </div>
  <!-- End your project here-->
  @endsection