@extends('admin.layout.Topbar')

<link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

@section('back-button')
    <div class="back-btn">
        <span class="mr-4 d-none d-lg-inline text-gray-600 small"><a href="{{route('admin.dashboard')}}"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0c63e4" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
          </svg></a></span>
    </div>
@endsection



@section('profile-body')
<div class="card container m-5 p-3">
    <div class="row">
      <div class="col-sm p-2">
        <img src="{{asset('img/undraw_posting_photo.svg')}}" alt="" width="550" height="550">
      </div>
      <div class="col-sm">
        <form action="">
            <label for="pro_name">User name</label>
            <input type="text" class="input-group" id="pro_name">
            <label for="pro_name">Email</label>
            <input type="text" class="input-group" id="pro_name">
            <label for="pro_name">Password</label>
            <input type="text" class="input-group" id="pro_name">
        </form>
      </div>
    </div>
  </div>
@endsection

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- End of Topbar -->
