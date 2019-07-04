
{{-- calling layouts \ app.blade.php --}}
@extends('layouts.master')

@section('content-header')
{{--         <h1>
        Dashboard
        <small>Control panel</small>
      </h1> --}}
      <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
      <br>
@endsection

@section('content-body')

<h1>Dashboard</h1>
@endsection
@php
use App\User;
@endphp

@section('script')


{{-- <script type="text/javascript">
  window.setTimeout(function() {
  $("#berhasil").fadeTo(5000,0).slideUp(5000, function(){
      $(this).remove();
  });
  }, 1800);
</script> --}}
<script>
  document.getElementById("adminDashboard").setAttribute("class","active");
</script>
@endsection