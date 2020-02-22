@extends('layouts.app')

@section('content')

<div class="container">
  <div class="panel panel-default panel-todo jsc-todo-list">
    <div class="panel-heading">
      <h2>Todo List</h2>
    </div>
    <div class="panel-body">
      <div class="input-group text-center">
        <input type="text" class="form-control" v-model="input" placeholder="TODO入力欄" />
        <!-- enterで追加する場合 -->
      <!--     <input type="text" v-model="input" v-on:keyup.enter="addTodo" /> -->
        <span class="input-group-btn">
          <button class="btn btn-primary" v-on:click="addTodo">追加</button>
          <button class="btn btn-default" v-on:click="deleteAllTodo">削除</button>
        </span>
      </div>
      <ul class="list-group">
        <li class="list-group-item" v-for="(item, index) in elements">
          <label v-bind:class="{done: item.isChecked}" class="list-item-label">
            <input type="checkbox" class="list-item-checkbox" v-model="item.isChecked" /><span class="list-item-text">{{item.input}}</span>
          </label>
          <div class="list-item-delete" v-on:click="deleteTodo(item)">削除</div>
        </li>
      </ul>
    </div>
  </div>
</div>
    @endsection