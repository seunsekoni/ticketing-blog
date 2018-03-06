@extends('master')
@section('title', 'View all Roles')
@section('content')
  <div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2> Roles </h2>
      </div>
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif
      @if($roles->isEmpty())
        <p1>There are no tickets</p1>
      @else
        <table class="table">
          <thead>
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Display Name</td>
              <td>Description</td>
              <td>Joined</td>
            </tr>
          </thead>
          <tbody>
            @foreach($roles as $role)
              <tr>
                <td><a href="#">{!! $role->id !!}</td></a>
                <td><a href="#">
                    {!! $role->name !!}</td></a>
                <td><a href="#">
                    {!! $role->display_name !!}</td></a>
                <td><a href="#">{!! $role->description !!}</td></a>
                <td><a href="#">{!! $role->created_at !!}</td></a>
              </tr>
            @endforeach
          </tbody>
        </table>
      @endif
    </div>
  </div>
@endsection