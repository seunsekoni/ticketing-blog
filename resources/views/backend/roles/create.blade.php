@extends('master')
@section ('title', 'New Role')

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
          <legend>Create a new role</legend>
            <div class="form-group">
              <label for="name" class="col-lg-2 control-label">Name</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
              </div>
            </div>
            <div class="form-group">
              <label for="display_name" class="col-lg-2 control-label">Display Name</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="display_name" placeholder="Display Name" name="display_name">
              </div>
            </div>
            <div class="form-group">
              <label for="description" class="col-lg-2 control-label">Description</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="description" placeholder="Description" name="description">
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
        </fieldset>
      </form>
    </div>
  </div>
          
@endsection('content')