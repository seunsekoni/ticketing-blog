@extends('master')
@section('title', 'View all Tickets')
@section('content')
  <div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2> Tickets </h2>
      </div>
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif
      @if($tickets->isEmpty())
        <p1>There are no tickets</p1>
      @else
        <table class="table">
          <thead>
            <tr>
              <td>ID</td>
              <td>Title</td>
              <td>Status</td>
            </tr>
          </thead>
          <tbody>
            @foreach($tickets as $ticket)
              <tr>
                <td><a href="{!! action('TicketsController@show', $ticket->slug) !!}">{!! $ticket->id !!}</td></a>
                <td><a href="{!! action('TicketsController@show', $ticket->slug) !!}">
                    {!! $ticket->title !!}</td></a>
                <td><a href="{!! action('TicketsController@show', $ticket->slug) !!}">
                    {!! $ticket->status ? 'Pending' : 'Answered' !!}</td></a>
              </tr>
            @endforeach
          </tbody>
        </table>
      @endif
    </div>
  </div>
@endsection