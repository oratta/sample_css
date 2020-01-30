<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>サンプル</title>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="{{asset('css/series_a/top.css')}}" rel="stylesheet" >
</head>
<body>
<section class="conA">
    <div class="container">
        <img src="{{asset('img/series_a/logo.svg')}}" alt="">
        <h1>LOGGER</h1>
        <p>サンプルライフログ</p>
        <a href="#">ライフログを始める</a>
    </div>
</section>
</body>
</html>