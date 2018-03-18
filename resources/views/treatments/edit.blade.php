<!DOCTYPE html>
<html>
<head>
    <title>Treatment</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('treatments') }}">Treatment</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('treatments') }}">View All Tretments</a></li>
        <li><a href="{{ URL::to('treatments/create') }}">Create a Treatment</a>
    </ul>
</nav>

<h1>Edit {{ $treatment->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($treatment, array('route' => array('treatments.update', $treatment->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Descrição') }}
        {{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the Treatment!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>