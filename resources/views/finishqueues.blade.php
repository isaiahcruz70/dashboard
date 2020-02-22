@extends('layouts.app')

@section('content')
<h1>IM DONE!</h1>
<link href="{{ asset('css/queue.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<div class="container">
  <ul class="nav nav-pills nav-fill">
    <li class="nav-item">
      <a class="nav-link" href="dashboard">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="request-queue">Request A Queue</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="finish-queues">Finished Queues</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
  </ul>
</div> 
@endsection