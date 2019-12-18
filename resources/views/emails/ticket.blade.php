<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
</head>
<body>
<h2>New Ticket From {{ Auth::user()->name }}!</h2>
<div>
You have a new ticket from {{ Auth::user()->name }}. The ticket id is {!! $ticket !!}!
</div>
</body>
</html>
