<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ secure_asset('frontend/css/style.css')}}">
    <title>St Augustines College DU</title>
     @yield('style')
</head>
<body>
<div class="wrapper uk-container uk-container-large">
        <nav id="topbar" class="uk-navbar-container pl-pr-container" uk-navbar>
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li>
                        <a href="#"><span class="mr-4px"
                                          uk-icon="icon: receiver; ratio: .8"></span>+98 558 547 580</a>
                    </li>
                    <li>
                        <a href="#"><span class="mr-4px"
                                          uk-icon="icon: mail; ratio: .8"></span>education@info.com</a>
                    </li>
                </ul>

            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li>
                        <a href="#" uk-icon="icon: facebook; ratio: .8"></a>
                    </li>
                    <li>
                        <a href="#" uk-icon="icon: twitter; ratio: .8"></a>
                    </li>
                    <li>
                        <a href="#" uk-icon="icon: instagram; ratio: .8"></a>
                    </li>
                    <li>
                        <a href="#" uk-icon="icon: pinterest; ratio: .8"></a>
                    </li>
                    <li>
                        <a href="#" uk-icon="icon: rss; ratio: .8"></a>
                    </li>
                   <li>
                        <a href="/signin">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
            <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo" href="#"><img src="{{ secure_asset('frontend/img/logo.png')}}" alt=""></a>
                    <ul class="uk-navbar-nav">
                        <li><a href="#" class="uk-flex-wrap">
                            <span class="name">St. Augustines College
                            Du<span class="sub-title"><br>amina discendo Crescit</span></span>
                            </a></li>
                    </ul>

                </div>
                <div class="uk-navbar-right basis-65 uk-flex-wrap uk-flex-right">

                    <ul class="uk-navbar-nav nav1">
                        <li>
                            <a class="uk-text-center uk-flex-wrap" href="#">
                                <img src="{{ secure_asset('frontend/img/admissions.png')}}" alt="" class="nav-img">
                                <span class="uk-width-1-1@s">Admissions</span>
                            </a>
                        </li>
                        <li>
                            <a class="uk-text-center uk-flex-wrap" href="https://staugustinescollegeduportal.ng/">
                                <img src="{{ secure_asset('frontend/img/portal.png')}}" alt="" class="nav-img">
                                <span class="uk-width-1-1@s">Portal</span>
                            </a>
                        </li>
                        <li>
                            <a class="uk-text-center uk-flex-wrap" href="#">
                                <img src="{{ secure_asset('frontend/img/liturgy.png')}}" alt="" class="nav-img">
                                <span class="uk-width-1-1@s">Liturgy</span>
                            </a>
                        </li>
                        <li>
                            <a class="uk-text-center uk-flex-wrap" href="#">
                                <img src="{{ secure_asset('frontend/img/school.png')}}" alt="" class="nav-img">
                                <span class="uk-width-1-1@s">School Life</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="uk-navbar-nav nav2">
                        <li><a href="/">home</a></li>
                        <li><a href="/aboutus">about us</a></li>
                        <li><a href="/admission">admission</a></li>
                        <li><a href="/academics">academics</a></li>
                        <!--<li><a href="#">prayer & liturgy</a></li>-->
                        <!--<li><a href="news.html">news</a></li>-->
                        <li><a href="/results">Results</a></li>
                        <li><a href="/contact">contact us</a></li>
                    </ul>

                </div>
            </nav>
        </div>
    
        @yield('content')
        <footer class="uk-flex uk-flex-middle uk-flex-center bg-black">
            <span>© 2019 St. Augustines's College Du. Jos South. All Rights Reserved.</span>
        </footer>
    </div>
     <script src="{{ secure_asset('frontend/js/uikit.min.js') }}"></script>
    <script src="{{ secure_asset('frontend/js/uikit-icons.min.js') }}"></script>
    @yield('script')
</body>
</html>