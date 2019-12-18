<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
</head>
<body>
<h2>Welcome to Auplas Web Sales, {{ Auth::user()->name }}!</h2>
<div>
You have been registered {{ Auth::user()->name }}.
</div>
</body>
</html>
