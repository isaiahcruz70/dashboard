@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col s12">
                <div id="main" class="card">
                    <div class="card-content">
                        <span class="card-title">Task list</span>
                        <div class="row">
                        @csrf
                            <form id="task-form" action="index.php">
                                <div class="input-field col s12">
                                    <input type="text" name="task" id="task" value="">
                                    <label for="vuln">Add task</label> 
                                </div>
                                <input type="submit" value="Add Task" class="btn">
                            </form>
                        </div>                       
                    </div>
                    <div class="card-action">
                        <h5 id="task-title">Tasks</h5>
                        <div class="input-field col s12">
                            <input type="text" name="filter" id="filter" value="">
                            <label for="filter">Filter tasks</label> 
                        </div>
                        <ul class="collection"></ul>
                        <a href="#" class="clear-tasks btn black">Clear tasks</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="public/js/index.js"></script>
    @endsection