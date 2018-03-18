<!DOCTYPE html>
<html>
<head>
    <title>Show Blade</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('treatments') }}">Treatment</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('treatments') }}">View All Treatments</a></li>
        <li><a href="{{ URL::to('treatments/create') }}">Create a Treatment</a>
    </ul>
</nav>

<h1>Showing {{ $treatment->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $treatment->name }}</h2>
        <p>
            <strong>Descrição:</strong> {{ $treatment->description }}<br>
        </p>
    </div>

</div>
</body>
</html>