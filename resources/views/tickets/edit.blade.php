@extends('master')
@section ('title', 'Edit a ticket')

@section('content')
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
      <form class="form-horizontal" method = "post">
        <!-- <input type="hidden" name="_token" value="{!! csrf_token() !!}"> -->
        {{ csrf_field() }}
        <fieldset>
          <legend>Edit ticket</legend>
            <div class="form-group">
              <label for="title" class="col-lg-2 control-label">Title</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{!! $ticket->title !!}">
              </div>
            </div>
            <div class="form-group">
              <label for="content" class="col-lg-2 control-label">Content</label>
              <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="content" name="content" >{!! $ticket->content !!}</textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 control-label">
                <input type="checkbox" name="status" {!! $ticket->status?"":"checked"!!} > Close this ticket?
              </label>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <a href="{!! URL::route('tickets') !!} " class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </div>
        </fieldset>
      </form>
    </div>
  </div>
          
@endsection('content')