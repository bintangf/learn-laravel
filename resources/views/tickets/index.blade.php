@extends('master')
@section('title', 'View all Tickets')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                  <div class = "panel panel-default">
        						<div class = "panel-heading">
        							<h2> Tickets </h2>
        						</div>
        						@if (session('status'))
        						<div class="alert alert-success">
        						{{ session('status') }}
        						</div>
        						@endif
        						@if ($tickets->isEmpty())
        						<p> There is no ticket.</p>
        						@else
        						<table class = "table">
        							<thead>
        								<tr>
        									<th>ID</th>
        									<th>Title</th>
        									<th>Status</th>
        								</tr>
        							</thead>
        							<tbody>
        							  @foreach($tickets as $ticket)
        							  <tr>
        								<td>{!! $ticket->id !!}</td>
        								<td>
        								  <a href="{!! action('TicketsController@show', $ticket->slug) !!}">{!! $ticket->title !!} </a>
        								</td>
        								<td>{!! $ticket->status ? 'Pending' : 'Answered' !!}</td>
        							  </tr>
        							  @endforeach

        							</tbody>
        						</table>
        						@endif
        					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
