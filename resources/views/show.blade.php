<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Code: {{$agency->code}}</h1>
<h1>Name: {{$agency->name}}</h1>
<h1>Phone: {{$agency->phone}}</h1>
<h1>Email: {{$agency->email}}</h1>
<h1>Address: {{$agency->address}}</h1>
<h1>Manager: {{$agency->manager}}</h1>
<h1>Status: {{$agency->status}}</h1>
<a href="{{route('agency.index')}}">
    <button>Back</button>
</a>
</body>
</html>
