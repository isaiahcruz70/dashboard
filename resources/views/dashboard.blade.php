@extends('layouts.app')

@section('content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<div class="container">
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" href="dashboard">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="request-queue">Request A Queue</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Finished Queues</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
</div>
<div class="container">
    <div class="row">
        <img class="center-block dash-logo" src="images/wpuclogo2.png" alt="wpuc logo">
    </div>
</div>
@endsection