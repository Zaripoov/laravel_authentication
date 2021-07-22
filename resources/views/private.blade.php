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

</head>

<body>
<h1>Это приватная страница</h1>
<p>Сюда попадают только аутентифицированные пользователи</p>
<p><a href="{{ route('user.logout') }}" >Выход</a></p>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
