@extends('master')
@section('title', 'Create a order')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Submit a new order, {{ Auth::user()->name }}</div>

                <div class="card-body">
                  <form class="form-horizontal" method="post">
                    @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                    @if (session('status'))
                    <div class="alert alert-success">
                    {{ session('status') }}
                    </div>
                    @endif
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                  <div class = "form-group">
                      <label for = "title" class = "col-lg-14 control-label">Title</label>
                      <div class = "col-lg-14">
                          <input type = "text" class = "form-control" id = "title" placeholder = "Title" name = "title">
                      </div>
                  </div>
                  <div class = "form-group">
                      <label for = "content" class = "col-lg-14 control-label">Content</label>
                      <div class = "col-lg-14">
                          <textarea class = "form-control" rows = "3" id = "content" placeholder = "Content" name = "content"></textarea>
                          <span class = "help-block">Feel free to ask us any question.</span>
                      </div>
                  </div>
                  <div class = "form-group">
                      <div class = "col-lg-14 col-lg-offset-14">
                          <a type="button" class="btn btn-outline-primary" href="{{ URL::previous() }}">Cancel</a>
                          <button type = "submit" class = "btn btn-primary">Submit</button>
                      </div>
                  </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
