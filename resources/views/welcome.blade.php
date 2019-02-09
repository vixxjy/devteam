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
                                <span class="uk-width-1-1@s">Application</span>
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
                        <li><a href="/results">Results</a></li>
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
                <a href="#modal-center-admission" uk-toggle>
                    <div class="uk-card">
                    <img src="{{ secure_asset('frontend/img/admission.png')}}" alt="admission">
                    <span>APPLICATION</span>
                    </div>
                </a>
                <a href="#">
                    <div class="uk-card">
                    <img src="{{ secure_asset('frontend/img/calender.png')}}" alt="calender">
                    <span>RESULTS</span>
                    </div>
                </a>
                <a href="#">
                    <div class="uk-card">
                    <img src="{{ secure_asset('frontend/img/history.png')}}" alt="history">
                    <span>HISTORY</span>
                    </div>
                </a>
                <a href="/gallery">
                    <div class="uk-card">
                    <img src="{{ secure_asset('frontend/img/gallery.png')}}" alt="gallery">
                    <span>GALLERY</span>
                    </div>
                </a>
                <a href="#modal-center" uk-toggle>
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
                @foreach($events as $event)
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img class="img-fit:cover" src="{{url('images/'.$event->image)}}" alt="">
                            </div>
                            <div class="uk-card-body uk-padding-small">
                                <h6 class="font-600">{{$event->title}}</h6>
                                <time datetime="2016-04-01T19:00">{{ date('F d, Y', strtotime($event->created_at)) }}</time>
                                <p>{{str_limit($event->description, 100)}}.</p>
                                <a href="{{ route('more-event', $event->id) }}" class="uk-button bg-sec col-white">Read More</a>
                            </div>
                           
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </section>
        <!-- <a class="uk-button uk-button-default" href="#modal-center" uk-toggle>Open</a> -->

            <div id="modal-center" class="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                <button class="uk-modal-close-default" type="button" uk-close></button>
                <form action="{{ route('store-message')}}" method="post">
                {{csrf_field()}}
                <fieldset class="uk-fieldset">
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
                 <legend class="uk-legend">Get In Touch </legend>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Your Names <span class="text-danger">*</span></label>
                    <input class="uk-input" type="text" placeholder="Names" name="name" required>
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Your Email<span class="text-danger">*</span></label>
                    <input class="uk-input" type="email" name="email" placeholder="Email Address" required>
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
            

                <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Your Message<span class="text-danger">*</span></label>
                    <textarea class="uk-textarea" rows="5" placeholder="Write your message" name="message" required minlength="5" maxlength="255"></textarea>
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                </div>

                    
            </fieldset>
            <button type="submit" class="uk-button bg-sec col-white">Send Message</button>
        </form>

            </div>
        </div>




     <section class="admission-modal">
     <div id="modal-center-admission" class="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                <button class="uk-modal-close-default" type="button" uk-close></button>
                <form action="{{ route('store-admission')}}" method="post">
                {{csrf_field()}}
                <fieldset class="uk-fieldset">
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
                 <legend class="uk-legend">Admission Portal</legend>
                    <div class="uk-child-width-1-2@m" uk-grid>
                        <div>
                            <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Full Name <span class="text-danger">*</span></label>
                            <input class="uk-input" type="text" placeholder="Full Name" name="name" required>
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                        </div>
                        <div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Date Of Birth <span class="text-danger">*</span></label>
                            <input class="uk-input" type="date" placeholder="Datepicker" data-uk-datepicker name="birth">
                            <span class="text-danger">{{ $errors->first('birth') }}</span>
                        </div>
                        </div>
                        <div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Gender <span class="text-danger">*</span></label>
                            <select class="uk-select" name="gender">
                                <option selected>Please select...</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                        </div>
                        </div>
                        <div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Class <span class="text-danger">*</span></label>
                            <select class="uk-select" name="class">
                                 <option selected>Please select...</option>
                                <option value="Js1">JS(One)</option>
                                <option value="Js2">JS(Two)</option>
                                <option value="Js3">JS(Three)</option>
                                <option value="sss1">SSS(one)</option>
                                <option value="sss2">SSS(Two)</option>
                                <option value="sss3">SSS(Three)</option>
                            </select>
                            <span class="text-danger">{{ $errors->first('class') }}</span>
                        </div>
                        </div>
                        <div>
                             <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Parent Full Name <span class="text-danger">*</span></label>
                            <input class="uk-input" type="text" placeholder="Parent/Gaurdian full name" name="parent" required>
                            <span class="text-danger">{{ $errors->first('parent') }}</span>
                        </div>
                        </div>
                        <div>
                        <div class="">
                            <label class="uk-form-label" for="form-stacked-text">Your Email<span class="text-danger">*</span></label>
                            <input class="uk-input" type="email" name="email" placeholder="Email Address" required>
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        </div>
                        <div>
                        <div class="">
                            <label class="uk-form-label" for="form-stacked-text">Phone No. <span class="text-danger">*</span></label>
                            <input class="uk-input" type="text" placeholder="Phone Number" name="phone" required>
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        </div>
                        </div>
                        <div>
                        <div class="">
                            <label class="uk-form-label" for="form-stacked-text">Your State<span class="text-danger">*</span></label>
                            <select class="uk-select" name="state">
                                <option selected>Please select</option>
                                <option value="Abia">Abia</option>
                                <option value="adamawa">Adamawa</option>
                                <option value="Akwa ibom">Akwa Ibom </option>
                                <option value="Anambra">Anambra</option>
                                <option value="bauchi">Bauchi</option>
                                <option value="bayelsa">Bayelsa</option>
                                <option value="benue">Benue</option>
                                <option value="borno">Borno</option>
                                <option value="cross river">Cross River</option>
                                <option value="delta">Delta</option>
                                <option value="ebonyi">Ebonyi</option>
                                <option value="edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="gombe">Gombe</option>
                                <option value="imo">Imo</option>
                                <option value="jigawa">Jigawa</option>
                                <option value="kaduna">Kaduna</option>
                                <option value="kano">Kano</option>
                                <option value="katsina">Katsina</option>
                                <option value="kebbi">Kebbi</option>
                                <option value="kwara">Kwara</option>
                                <option value="lagos">Lagos</option>
                                <option value="nassarawa">Nassarawa</option>
                                <option value="niger">Niger</option>
                                <option value="ogun">Ogun</option>
                                <option value="ondo">Ondo</option>
                                <option value="osun">Osun</option>
                                <option value="oyo">Oyo</option>
                                <option value="plateau">Plateau</option>
                                <option value="rivers">Rivers</option>
                                <option value="sokoto">Sokoto</option>
                                <option value="taraba">Taraba</option>
                                <option value="yobe">Yobe</option>
                                <option value="zamfra">Zamfra</option>
                            </select>
                            <span class="text-danger">{{ $errors->first('state') }}</span>
                        </div>
                        </div>
                        <div class="uk-width-1-1@s">
                        <div class="">
                            <label class="uk-form-label" for="form-stacked-text">Your Address <span class="text-danger">*</span></label>
                            <input class="uk-input" type="text" placeholder="Address" name="address" required>
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                        </div>
                        </div>
                    </div>    
            </fieldset>
           <div class="uk-margin text-center">
           <button type="submit" class="uk-button bg-sec col-white">Send Message</button>
           </div>
        </form>
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

