@extends('master')
@section('title', 'Show a ticket')
@section('content')
  <div class="container col-md-8 col-md-offset-2">
    <div class="well well bs-component">
      <div class="content">
        <h2 class="header">{!! $ticket->title !!}</h2>
        <p><strong>Status</strong>: {!! $ticket->status ? 'Pending':'Answered' !!}</p>
        <p>{!! $ticket->content !!}</p>
      </div>
      <a href="{!! action('TicketsController@edit', $ticket->slug) !!}" class="btn btn-info pull-left">Edit</a>

      <form method="post" action="{!! action('TicketsController@destroy', $ticket->slug) !!}" onsubmit = "return confirm('Are you sure you want to delete ticket: {{ $ticket->slug }}?')"  class="pull-left">
        {{ csrf_field() }}
        <div class = "form-group">
          <div>
            <button type="submit" class="btn btn-warning">Delete</button>
          </div>
        </div>
      </form>
      <div class="clearfix"></div>
    </div>
    @foreach($comments as $comment)
      <div class="well well bs-component">
        <div class="content">
          {!! $comment->content !!}
        </div>
      </div>
    @endforeach
  </div>
  <div class="container col-md-8 col-md-offset-2">
    <div class="well well bs-component">
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif
      @foreach ($errors->all() as $error)
        <p class="alert alert-danger">{{ $error }}</p>
      @endforeach
      <form class="form-horizontal" method = "post" action="/comment" >
        <!-- <input type="hidden" name="_token" value="{!! csrf_token() !!}"> -->
        {{ csrf_field() }}
        <input type="hidden" name="post_id" value="{!! $ticket->id !!}">
        <fieldset>
          <legend>Reply</legend>
            <div class="form-group">
              <div class="col-lg-12">
              <textarea class="form-control" rows="3" id="content" name="content"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-default" type="reset">Cancel</button>
                <button type="submit" class="btn btn-primary">Post</button>
              </div>
            </div>
        </fieldset>
      </form>
    </div>
  </div>
@endsection

