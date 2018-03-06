@extends('master')
@section('title', 'View all Users')
@section('content')
  <div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2> Users </h2>
      </div>
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif
      @if($users->isEmpty())
        <p1>There are no tickets</p1>
      @else
        <table class="table">
          <thead>
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Email</td>
              <td>Joined</td>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
              <tr>
                <td><a href="#">{!! $user->id !!}</td></a>
                <td><a href="{!! action('Admin\UsersController@edit', $user->id) !!}">
                    {!! $user->name !!}</td></a>
                <td><a href="#">
                    {!! $user->email !!}</td></a>
                <td><a href="#">{!! $user->created_at !!}</td></a>
              </tr>
            @endforeach
          </tbody>
        </table>
      @endif
    </div>
  </div>
@endsection