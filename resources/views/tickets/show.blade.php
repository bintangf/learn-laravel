@extends('master')
@section('title', 'View a order')
@section('content')

<!-- Sweet Alert -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
        					<h2 class="header">{!! $ticket->title !!}</h2>
        					<p> <strong>Status</strong>: {!! $ticket->status ? 'Negosiasi Order' : 'Order diproses' !!}</p>
        					<p> {!! $ticket->content !!} </p>

                    <div class="btn-group" role="group" aria-label="Basic example">
                      <p>
                        <a type="button" href="{!! action('TicketsController@edit', $ticket->slug) !!}" class="m-1 btn btn-info">Edit</a>
                      </p>
            					<form method="post" action="{!! action('TicketsController@destroy', $ticket->slug) !!}">
            						<input type="hidden" name="_token" value="{!! csrf_token() !!}">
            						<div class="form-group">
            							<div>
            								<button type="submit" onclick="return confirm('Apakah anda yakin?')" class="m-1 btn btn-warning">Delete</button>
            							</div>
            						</div>
            					</form>
                    </div>

                </div>
            </div>
            <br>

            <legend>Comment</legend>
            <div class="card">
      			   @foreach($comments as $comment)
      					<div class="list-group list-group-flush">
      						<div class="list-group-item">
      							{!! $comment->content !!}
      						</div>
      					</div>
      					@endforeach
            </div>
            <br>

    				<div class="well well bs-component">
    				      <form class="form-horizontal" method="post" action="{{url('/comment')}}">
      							@foreach($errors->all() as $error)
      							<p class="alert alert-danger">{{ $error }}</p>
      							@endforeach
      							@if(session('status'))
      							<div class="alert alert-success">
      								{{ session('status') }}
      							</div>
      							@endif
      							<input type="hidden" name="_token" value="{!! csrf_token() !!}">
      							<input type="hidden" name="post_id" value="{!! $ticket->id !!}">
      							<fieldset>
      								<legend>Reply</legend>
      								<div class="form-group">
      									<div class="col-lg-14">
      										<textarea class="form-control" rows="3" id="content"
      												  name="content"></textarea>
      									</div>
      								</div>
      								<div class="form-group">
      									<div class="col-lg-14 col-lg-offset-2">
      										<a type="button" class="btn btn-outline-primary" href="{{ URL::previous() }}">Cancel</a>
      										<button type="submit" class="btn btn-primary">Post</button>
      									</div>
      								</div>
      							</fieldset>
    				      </form>
    				</div>

        </div>
    </div>
</div>
@endsection
