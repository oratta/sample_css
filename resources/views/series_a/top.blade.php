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
<section class="conC">
    <div class="container">
        <div class="photo"></div>
        <div class="text">
            <h2>面倒な作業は全部おまかせ</h2>
            <p>どんなに面倒くさいことも、よく考えてみてください。それって本当に面倒くさいですか？面倒くさいと思うことを面倒くさいと思っていませんか？逆に言うと、面倒くさいと思わなければ面倒くさくなくなると思いませんか？こんな事言われて、今面倒くさい気持ちですよね？</p>
            <a href="#">
                詳しい方法を確認する
                <span class="mdi mdi-arrow-right-circle" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</section>
<section class="conD">
    <div class="container">
        <div class="photo"></div>
        <div class="text">
            <h2>そろそろ疲れた？</h2>
            <p>もう3時間も作っているからそろそろ疲れてきたんじゃない？作っていると言っても環境設定に1時間近くかかったので、実際の構築時間は2時間くらいで、まだ行けるんじゃない？まだ行けるんじゃない？社畜がぁぁ！！</p>
            <a href="#">
                詳しい方法を確認する
                <span class="mdi mdi-arrow-right-circle" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</section>
<footer>
    <div class="footer_content">
        <div class="footer_info">
            <div class="footer_title">LOGGER</div>
            <div class="footer_address">〒123-456 福島県港区浜松町1-2-3</div>
            <div class="footer_url">http://hogehoge.net</div>
            <div class="footer_icon">
                <ul>
                    <li>
                        <a href="#">
                            <span class="mdi mdi-alien-outline" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="mdi mdi-alien-outline" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="mdi mdi-alien-outline" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="mdi mdi-alien-outline" aria-hidden="true"></span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="footer_menu">
            <div class="footer_menu-card">
                <div class="footer_menu-title">
                    About
                </div>
                <div class="footer_menu-item">
                    <ul>
                        <li><a href="#">Start</a></li>
                        <li><a href="#">Access</a></li>
                        <li><a href="#">Map</a></li>
                        <li><a href="#">Member</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_menu-card">
                <div class="footer_menu-title">
                    Support
                </div>
                <div class="footer_menu-item">
                    <ul>
                        <li><a href="#">Download</a></li>
                        <li><a href="#">Manual</a></li>
                        <li><a href="#">Q&A</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_menu-card">
                <div class="footer_menu-title">
                    Contents
                </div>
                <div class="footer_menu-item">
                    <ul>
                        <li><a href="#">information</a></li>
                        <li><a href="#">business</a></li>
                        <li><a href="#">profile</a></li>
                        <li><a href="#">engineer</a></li>
                        <li><a href="#">blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copyright">
        © Techne, inc. All rights reserved.
    </div>
</footer>
</body>
</html>