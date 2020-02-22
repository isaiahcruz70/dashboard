@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/queue.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<div class="container">
  <ul class="nav nav-pills nav-fill">
    <li class="nav-item">
      <a class="nav-link" href="dashboard">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="request-queue">Request A Queue</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="finish-queues">Finished Queues</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
  </ul>
</div> 
<br>
<div class="container">
<br>
  <form action="/submit-request" method="POST">
  @csrf
    <ul class="flex-outer form-group">
      <li>
        <label for="first-name">First And Last Name</label>
        <input class="form-control" type="text" id="first-name" placeholder="Enter your first name here" name="first">
      </li>
      <li>
        <label for="business-name">Business Name</label>
        <input class="form-control" type="text" id="business-name" placeholder="Enter your business name here" name="business">
      </li>
      <li>
        <label for="email">Email</label>
        <input class="form-control" type="email" id="email" placeholder="Enter your email here" name="email">
      </li>
      <li>
      <label for="reason">Reason</label>
      <select id="reason" name="reason">
            <option value="backup">Backup</option>
            <option value="technical">Technical</option>
            <option value="hacked">Hacked</option>
        </select>

      </li>
      <li>
        <label for="phone">Phone</label>
        <input class="form-control" type="tel" id="phone" placeholder="Enter your phone here" name="phone">
      </li>
      <li>
        <label for="message">Message</label>
        <textarea class="form-control" rows="6" id="message" placeholder="Enter your message here" name="message"></textarea>
      </li>
        </ul>
     
        <!-- Trigger the modal with a button -->
  <button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Submit</button>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title thankyou">Thank You For Your Request!</h4>
      </div>
      <div class="modal-body">
        <p class="center"><h2 class="p-modal">Your request has been submitted in a queue and it will be assigned to your account representative. You will receive an email when your request is in assigned. </h2></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>
      </li>
    </ul>
  </form>
</div> 
<script src="public/js/index.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection