@extends('layouts.app')
@section('content')

<!-- Start your project here-->  
  <div style="height: 100vh">
    <div class="col-md-6">
      <p class="animated fadeIn text-muted">Send Image to Telegram Channel</p>
      <hr>
      <form action="{{ url('/store-photo') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <div class="custom-file">
                <input type="file" id="file" name="file" class="custom-file-input">
                <label class="custom-file-label" for="file">Choose file</label>
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