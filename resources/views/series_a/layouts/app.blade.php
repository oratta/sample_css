<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>サンプル</title>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="{{asset('css/series_a/top.css')}}" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script>
        $(function(){
            $(".header_menu-button").click(function(){
                $(".header_menu").slideToggle();
            });
        });
    </script>
</head>
<body>
<header>
    <div class="header_content">
        <div class="header_base">
            <div class="header_logo">
                <a href="{{ route('series_a.top') }}">LOGGER</a>
            </div>
            <button type="button" class="header_menu-button">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
        <nav class="header_menu">
            <ul>
                <li class="header_menu-item">
                    <a href="#">Top</a>
                </li>
                <li class="header_menu-item">
                    <a href="#">Contents</a>
                </li>
                <li class="header_menu-item">
                    <a href="#">About</a>
                </li>
                <li class="header_menu-item">
                    <a href="#">Info</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

@yield('content')

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