<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="{{ secure_asset('frontend/css/style.css')}}"> -->
    <link rel="stylesheet" href="/frontend/css/style.css">
    <title>St Augustines College DU</title>
</head>
<body>
<div class="wrapper uk-container uk-container-large">
        <nav id="topbar" class="uk-navbar-container pl-pr-container" uk-navbar>
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li>
                        <a href="#"><span class="mr-4px"
                                          uk-icon="icon: receiver; ratio: .8"></span>+234(0)7037889862, +234(0)7032665212</a>
                    </li>
                    <li>
                        <a href="#"><span class="mr-4px"
                                          uk-icon="icon: mail; ratio: .8"></span>st.augustinescollegedu@gmail.com</a>
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
                        <span class="name">ST. AUGUSTINE'S COLLEGE<br><span class="sub-title smalltext">Du, Jos-South</span>
                            <span class="sub-title italic"><br><br>
                            <span class="meaning smalltext">Anima Discendo Crescit</span><br>
                                <span class="meaning">(The Soul
                                    grows by
                                    learning)<br>
                                </span>
                            </span>
                        </span>
                            </a>
                        <span>
                                @if($errors->any())
                                    <div class="uk-alert-danger">
                                    @foreach($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach()
                                    </div>
                                @endif
                                    @if ($message = Session::get('success'))
                                    <div class="uk-alert-success">
                                        <p><b>{{ $message }}</b></p>
                                   </div>
                                @endif
                        </span>
                        </li>
                    </ul>

                </div>
                <div class="uk-navbar-right basis-65 uk-flex-wrap uk-flex-right">

                    <ul class="uk-navbar-nav nav1">
                        <li>
                            <a class="uk-text-center uk-flex-wrap" href="#modal-center-admission" uk-toggle>
                                <img src="{{ secure_asset('frontend/img/admissions.png')}}" alt="" class="nav-img">
                                <span class="uk-width-1-1@s">Application</span>
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
                                <span class="uk-width-1-1@s">Online-Payments</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="uk-navbar-nav nav2">
                        <li><a href="/">home</a></li>
                        <li><a href="/aboutus">about us</a></li>
                        <li><a href="/admission">admission</a></li>
                        <li><a href="/academics">academics</a></li>
                        <!--<li><a href="#">prayer & liturgy</a></li>-->
                        <li><a href="/downloads">Downloads</a></li>
                        <li><a href="/results">Results</a></li>
                        <li><a href="/contact">contact us</a></li>
                    </ul>

                </div>
                <a class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-flip" href="#"></a>
            </nav>
        </div>
    
        @yield('content')
        <footer class="uk-flex uk-flex-middle uk-flex-center bg-black">
            <span>© 2019 St. Augustines's College Du. Jos South. All Rights Reserved.</span>
        </footer>
    </div>
    <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar uk-flex-middle uk-flex uk-flex-center">

        <button class="uk-offcanvas-close" type="button" uk-close></button>

        <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
            <li><a href="/admission">Admissions</a></li>
            <li><a href="https://staugustinescollegeduportal.ng/">Portal</a></li>
            <li><a href="#">Liturgy</a></li>
            <li><a href="#">Online-Payments</a></li>
            <li><a href="/">home</a></li>
            <li><a href="/aboutus">about us</a></li>
            <li><a href="/admission">admission</a></li>
            <li><a href="/academics">academics</a></li>
                        <!--<li><a href="#">prayer & liturgy</a></li>-->
            <li><a href="/downloads">Downloads</a></li>
            <li><a href="/results">Results</a></li>
            <li><a href="/contact">contact us</a></li>
        </ul>

    </div>
</div>
     <script src="{{ secure_asset('frontend/js/uikit.min.js') }}"></script>
    <script src="{{ secure_asset('frontend/js/uikit-icons.min.js') }}"></script>
    @yield('script')
    
</body>
</html>