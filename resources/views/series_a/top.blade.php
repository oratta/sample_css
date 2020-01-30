<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>サンプル</title>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="{{asset('css/series_a/top.css')}}" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">
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
<section class="conB">
    <div class="container">
        <div class="text">
            <span class="mdi mdi-graph-outline icon" aria-hidden="true"></span>
            <h2>
                ライフログって何？
            </h2>
            <p>いろんなことを記録して、いろんな楽しみ方をしようよ</p>
            <a href="#">
                More...<span class="mdi mdi-arrow-right-circle" aria-hidden="true"></span>
            </a>
        </div>
        <div class="text">
            <span class="mdi mdi-alien-outline icon" aria-hidden="true"></span>
            <h2>
                エイリアンって何？
            </h2>
            <p>エイリアンって気にならない？え？ET？？ET???ってなに？</p>
            <a href="#">
                More...<span class="mdi mdi-arrow-right-circle" aria-hidden="true"></span>
            </a>
        </div>
        <div class="text">
            <span class="mdi mdi-apple-finder icon" aria-hidden="true"></span>
            <h2>
                ファインダーって？
            </h2>
            <p>このアイコンどういうデザインなの？ファインダー感ある？</p>
            <a href="#">
                More...<span class="mdi mdi-arrow-right-circle" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</section>
</body>
</html>