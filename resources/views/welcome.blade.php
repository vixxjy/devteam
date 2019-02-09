<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ secure_asset('frontend/css/style.css')}}">
    <title>St Augustines College DU</title>
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
                   <!-- <li>
                        <a href="#">Login</a>
                    </li>
                    <li>
                        <a href="#">Register</a>
                    </li>-->
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
                            <a class="uk-text-center uk-flex-wrap" href="#">
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
                        <li><a href="/gallery">gallery</a></li>
                        <li><a href="/contact">contact us</a></li>
                    </ul>

                </div>
            </nav>
        </div>
    <header class="uk-overflow-hidden">
        <div class="uk-position-relative" uk-slideshow="animation: fade; autoplay: true">

           <ul class="uk-slideshow-items">
                  @foreach($sliders as $slider)
          @php
            $styleValue = 1;
            if($loop->iteration%3 == 0){
              $styleValue = 3;
            }
            else if($loop->iteration%2 == 0){
              $styleValue = 2;
            }
            else{
              $styleValue = 1;
            }

          @endphp
        
        @if($styleValue == 1)
                <li>
                    <img src="{{url('uploads/'.$slider->image)}}" alt="" uk-cover>
                </li>
                @elseif($styleValue == 2)
                <li>
                    <img src="{{url('uploads/'.$slider->image)}}" alt="" uk-cover>
                </li>
                @elseif($styleValue == 3)
                <li>
                    <img src="{{url('uploads/'.$slider->image)}}" alt="" uk-cover>
                </li>
                @else
                <li>
                    <img src="{{url('uploads/'.$slider->image)}}" alt="" uk-cover>
                </li>
                @endif
        @endforeach
            </ul>

                   <div class="uk-position-bottom-center uk-position-small">
                <ul class="uk-thumbnav">
                    @foreach($sliders as $slider)
          @php
            $styleValue = 1;
            if($loop->iteration%3 == 0){
              $styleValue = 3;
            }
            else if($loop->iteration%2 == 0){
              $styleValue = 2;
            }
            else{
              $styleValue = 1;
            }

          @endphp
                    @if($styleValue == 1)
                    <li uk-slideshow-item="0"><a href="#"><img src="{{url('uploads/'.$slider->image)}}" width="100" alt=""></a></li>
                    @elseif($styleValue == 2)
                    <li uk-slideshow-item="1"><a href="#"><img src="{{url('uploads/'.$slider->image)}}" width="100" alt=""></a></li>
                    @elseif($styleValue == 3)
                    <li uk-slideshow-item="2"><a href="#"><img src="{{url('uploads/'.$slider->image)}}" width="100" alt=""></a></li>
                    @else
                    <li uk-slideshow-item="3"><a href="#"><img src="{{url('uploads/'.$slider->image)}}" width="100" alt=""></a></li>
                    @endif
                    @endforeach
                </ul>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover trans-out-100%" href="#"
                   uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
            </div>

        </div>
    </header>
    <main class="body">
        <div class="uk-container uk-container-small">
            <div class="uk-child-width-1-5@m cards uk-grid-small" uk-grid>
                <a href="#">
                    <div class="uk-card">
                    <img src="{{ secure_asset('frontend/img/admission.png')}}" alt="admission">
                    <span>ADMISSION</span>
                    </div>
                </a>
                <a href="#">
                    <div class="uk-card">
                    <img src="{{ secure_asset('frontend/img/calender.png')}}" alt="calender">
                    <span>CALENDER</span>
                    </div>
                </a>
                <a href="#">
                    <div class="uk-card">
                    <img src="{{ secure_asset('frontend/img/history.png')}}" alt="history">
                    <span>HISTORY</span>
                    </div>
                </a>
                <a href="#">
                    <div class="uk-card">
                    <img src="{{ secure_asset('frontend/img/gallery.png')}}" alt="gallery">
                    <span>GALLERY</span>
                    </div>
                </a>
                <a href="#">
                    <div class="uk-card">
                    <img src="{{ secure_asset('frontend/img/contact.png')}}" alt="contact">
                    <span>CONTACT</span>
                    </div>
                </a>
            </div>
        </div>
        <section class="who">
            <div class="container uk-text-center">
                <h3 class="color-sec uk-text-bold uk-margin-top uk-margin-remove-bottom">WELCOME TO ST. AUGUSTINE"S COLLEGE
                    DU</h3>
                <h2 class="col-black uk-text-bold uk-margin-remove">WHAT WE PROVIDE</h2>
                <p class="uk-width-2-3@m margin-center uk-margin-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A  asperiores doloremque eveniet libero quisquam reiciendis similique sint soluta ullam! Natus.</p>
                <div class="uk-child-width-1-2@m" uk-grid>
                    <div class="uk-padding uk-child-width-1-2@m uk-text-left bests" uk-grid>
                        <div>
                            <img src="{{ secure_asset('frontend/img/best-teach.png')}}" width="70" alt="">
                            <h5 class="uk-text-bold uk-margin-small-top">BEST TEACHERS</h5>
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, illo?</p>
                        </div>
                        <div>
                            <img src="{{ secure_asset('frontend/img/labs.png')}}" width="70" alt="">
                            <h5 class="uk-text-bold uk-margin-small-top">BEST LABS</h5>
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, illo?</p>
                        </div>
                        <div>
                            <img src="{{ secure_asset('frontend/img/env.png')}}" width="70" alt="">
                            <h5 class="uk-text-bold uk-margin-small-top">SERENE ENVIRONMENTS</h5>
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, illo?</p>
                        </div>
                        <div>
                            <img src="{{ secure_asset('frontend/img/security.png')}} " width="70" alt="">
                            <h5 class="uk-text-bold uk-margin-small-top">SECURITY</h5>
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, illo?</p>
                        </div>
                    </div>
                    <div>
                        <img class="side" src="{{ secure_asset('frontend/img/side.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="uk-grid-collaps uk-margin-large-bottom" uk-grid>
                <div class="uk-width-1-3@m uk-grid-collapse" uk-grid>
                    <div class="uk-width-1-1@m red-card card">
                        <h1 class="thought uk-text-bold">THOUGHT OF <br>THE TERM</h1>
                        @foreach($thoughtterms as $thoughtterm)
                         @if ($loop->first)
                        <h3 class="uk-text-bold uk-margin-small-top">{{ $thoughtterm->title }}</h3>
                        <p>{{ $thoughtterm->bible_quote }}<br>
                            {{ $thoughtterm->verse }}</p>
                         @endif
                        @endforeach
                    </div>
                    <div class="uk-width-1-1@m blue-card card">
                        <h1 class="thought uk-text-bold">THEME OF<br>THE WEEK</h1>
                        @foreach($thoughtweeks as $thoughtweek)
                         @if ($loop->first)
                        <h3 class="uk-text-bold uk-margin-small-top">{{ $thoughtweek->title }}</h3>
                        <p>{{ $thoughtweek->bible_quote }}<br>
                            {{ ($thoughtweek->verse) }}</p>
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="vid-card uk-width-2-3@m uk-padding-remove">
                    <a class="uk-margin-bottom" uk-toggle="target: .hideme; animation: uk-animation-fade; queued: true; duration: 300">
                        <img class="uk-width-1-1@m hideme" src="{{ secure_asset('frontend/img/whyUs.png')}}" alt="">
                    </a>
                    <iframe class="hideme"
                            src="https://www.youtube-nocookie.com/embed/YE7VzlLtp-4?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="100%" height="100%" frameborder="0" allowfullscreen uk-responsive uk-video="automute: true" hidden></iframe>
                </div>
            </div>
            <div class="n&e-updates container">
                <h2 class="uk-child-width-1-1@s uk-text-center uk-text-bold col-black news">NEWS AND EVENT</h2>
                <div class="uk-child-width-1-3@m uk-grid-match uk-grid-small uk-margin-large-bottom" uk-grid>
                   
                    <div>
                        <div class="uk-card uk-card-default">
                             @foreach($events as $event)
                            <div class="uk-card-media-top">
                                <img class="img-fit:cover" src="{{url('images/'.$event->image)}}" alt="">
                            </div>
                            <div class="uk-card-body uk-padding-small">
                                <h6 class="font-600">{{$event->title}}</h6>
                                <time datetime="2016-04-01T19:00">{{ date('F d, Y', strtotime($event->created_at)) }}</time>
                                <p>{{str_limit($event->description, 100)}}.</p>
                                <a href="{{ route('more-event', $event->id) }}" class="uk-button bg-sec col-white">Read More</a>
                            </div>
                             @endforeach
                        </div>
                    </div>
    
                </div>
            </div>

        </section>
    </main>
    <footer class="uk-flex uk-flex-middle uk-flex-center bg-black">
        <span>© 2019 St. Augustines's College Du. Jos South. All Rights Reserved.</span>
    </footer>
</div>
    <script src="{{ secure_asset('frontend/js/uikit.min.js') }}"></script>
    <script src="{{ secure_asset('frontend/js/uikit-icons.min.js') }}"></script>
</body>
</html>