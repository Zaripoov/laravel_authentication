<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>A Basic HTML5 Template</title>
    <meta name="description" content="A simple HTML5 Template for new projects.">
    <meta name="author" content="SitePoint">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

</head>

<body>
<h1>Вход</h1>
<div class="container">
    <form class="" method="POST" action="{{ route('user.login') }}">
    @csrf
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        @error('email')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        @error('password')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div>
        <button type="submit" class="btn btn-primary" name="sendMe" value="1">Submit</button>
    </div>
</form>
</div>
<a href="{{route('user.registration')}}">Регистрация</a>
<script src="{{asset('js/app.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
