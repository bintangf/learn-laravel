@extends('master')
@section('title', 'Edit a order')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
					<legend>Edit ticket</legend>
				</div>

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

        						<fieldset>
        							<div class="form-group">
        								<label for="title" class="col-lg-14 control-label">Title</label>
        								<div class="col-lg-14">
        									<input type="text" class="form-control" id="title" name="title" value="{!! $ticket->title !!}">
        								</div>
        							</div>
        							<div class="form-group">
        								<label for="content" class="col-lg-14 control-label">Content</label>
        								<div class="col-lg-14">
        									<textarea class="form-control" rows="3" id="content" name="content">{!! $ticket->content !!}</textarea>
        								</div>
        							</div>
        							<div class="form-group">
        								<label>
        									<input type="checkbox" name="status" {!! $ticket->status ? "":"checked" !!}> process this order?
        								</label>
        							</div>
        							<div class="form-group">
        								<div class="col-lg-14 col-lg-offset-14">
                          <a type="button" class="btn btn-outline-primary" href="{{ URL::previous() }}">Cancel</a>
        									<button type="submit" class="btn btn-primary">Update</button>
        								</div>
        							</div>
        						</fieldset>
        					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
