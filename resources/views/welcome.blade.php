@extends('layouts.main')

@section('content')
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
                    <img src="frontend/img/admission.png" alt="admission">
                    <span>ADMISSION</span>
                    </div>
                </a>
                <a href="#">
                    <div class="uk-card">
                    <img src="frontend/img/calender.png" alt="calender">
                    <span>CALENDER</span>
                    </div>
                </a>
                <a href="#">
                    <div class="uk-card">
                    <img src="frontend/img/history.png" alt="history">
                    <span>HISTORY</span>
                    </div>
                </a>
                <a href="/gallery">
                    <div class="uk-card">
                    <img src="frontend/img/gallery.png" alt="gallery">
                    <span>GALLERY</span>
                    </div>
                </a>
                <a href="#">
                    <div class="uk-card">
                    <img src="frontend/img/contact.png" alt="contact">
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
                            <img src="frontend/img/best-teach.png" width="70" alt="">
                            <h5 class="uk-text-bold uk-margin-small-top">BEST TEACHERS</h5>
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, illo?</p>
                        </div>
                        <div>
                            <img src="frontend/img/labs.png" width="70" alt="">
                            <h5 class="uk-text-bold uk-margin-small-top">BEST LABS</h5>
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, illo?</p>
                        </div>
                        <div>
                            <img src="frontend/img/env.png" width="70" alt="">
                            <h5 class="uk-text-bold uk-margin-small-top">SERENE ENVIRONMENTS</h5>
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, illo?</p>
                        </div>
                        <div>
                            <img src="frontend/img/security.png " width="70" alt="">
                            <h5 class="uk-text-bold uk-margin-small-top">SECURITY</h5>
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, illo?</p>
                        </div>
                    </div>
                    <div>
                        <img src="frontend/img/students.png" alt="">
                    </div>
                </div>
            </div>
            <div class="uk-grid-collaps uk-margin-large-bottom" uk-grid>
               
                <div class="uk-width-1-3@m uk-grid-collapse" uk-grid>
                     @foreach($thoughtterms -> $thoughtterm()->orderBy('created_at', 'desc')->take(1)->get() as $thoughtterm)
                    <div class="uk-width-1-1@m red-card card">
                        <h1 class="thought uk-text-bold">THOUGHT OF <br>THE TERM</h1>
                        <h3 class="thought uk-text-bold">{{ $thoughtterm->title }}</h3>
                        <p>"{{ $thoughtterm->bible_quote }}"<br>{{ $thoughtterm->verse }}</p>
                    </div>
                    @endforeach
                     @foreach($thoughtweeks -> $thoughtweek()->orderBy('created_at', 'desc')->take(1)->get() as $thoughtweek)
                    <div class="uk-width-1-1@m blue-card card">
                        <h1 class="thought uk-text-bold">THEME OF<br>THE WEEK</h1>
                        <h3 class="thought uk-text-bold">{{ $thoughtweek->title }}</h3>
                        <p>"{{ $thoughtweek->bible_quote }}"<br>{{ $thoughtweek->verse }}</p>
                    </div>
                </div>
                @endforeach
                <div class="vid-card uk-width-2-3@m uk-padding-remove">
                    <a class="uk-margin-bottom" uk-toggle="target: .hideme; animation: uk-animation-fade; queued: true; duration: 300">
                        <img class="uk-width-1-1@m hideme" src="frontend/img/whyUs.png" alt="">
                    </a>
                    <iframe class="hideme"
                            src="https://www.youtube-nocookie.com/embed/YE7VzlLtp-4?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="100%" height="100%" frameborder="0" allowfullscreen uk-responsive uk-video="automute: true" hidden></iframe>
                </div>
            </div>
            <div class="n&e-updates container">
                <h2 class="uk-child-width-1-1@s uk-text-center uk-text-bold col-black news">NEWS AND EVENT UPDATES</h2>
                <div class="uk-child-width-1-4@m uk-grid-match uk-grid-small uk-margin-large-bottom" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="frontend/img/news1.png" alt="">
                            </div>
                            <div class="uk-card-body uk-padding-small">
                                <h6 class="font-600">Cultural Day / Ground Breaking</h6>
                                <time datetime="2016-04-01T19:00">April 01, 2016</time>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                <a href="#" class="uk-button bg-sec col-white">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="frontend/img/news2.png" alt="">
                            </div>
                            <div class="uk-card-body uk-padding-small">
                                <h6 class="font-600">Interview of Prospective Students</h6>
                                <time datetime="2016-04-01T19:00">April 01, 2016</time>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                <a href="#" class="uk-button bg-sec col-white">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="frontend/img/news3.png" alt="">
                            </div>
                            <div class="uk-card-body uk-padding-small">
                                <h6 class="font-600">Combined with a handful</h6>
                                <time datetime="2016-04-01T19:00">April 01, 2016</time>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                <a href="#" class="uk-button bg-sec col-white">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="frontend/img/news4.png" alt="">
                            </div>
                            <div class="uk-card-body uk-padding-small">
                                <h6 class="font-600">Combined with a handful</h6>
                                <time datetime="2016-04-01T19:00">April 01, 2016</time>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                <a href="#" class="uk-button bg-sec col-white">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
@endsection