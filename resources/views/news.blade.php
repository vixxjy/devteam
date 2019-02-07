@extends('layouts.main')

@section('content')
        <main class="body">
            <div class="container uk-margin-medium-top uk-margin-medium-bottom">
                @foreach($events as $event)
                <article class="uk-article">
                    <img class="img-fit:cover" src="{{url('images/'.$event->image)}}" alt="">
                    <!--<h1 class="uk-article-title"><a class="uk-link-reset" href="">Heading</a></h1>-->

                    <p class="uk-article-meta">Written by <a href="#">{{$event->author}}</a> on {{ date('F d, Y', strtotime($event->created_at)) }}</p>

                    <p>{{$event->description}}</p>

                    <p>{{$event->tag}}</p>      
                 @endforeach
                    <h4 class="uk-text-bold">PARTICIPATION /CONTRIBUTION CAN BE MADE THROUGH THE FOLLOWING CHANNELS:</h4>
                    
                    <h4>1. <em>Special Donations:</em></h4>
                    <p>You can immortalize your name /Business name by sponsoring certain parts of the building through these special contributions:</p>
                    <ul class="uk-list uk-list-bullet">
                        <li>Platinum Donor:=   N1,000,000</li>
                        <li>Gold Donor: =          N500,000</li>
                        <li>Silver Donor =          N250,000</li>
                        <li>Bronze Donor =       N100,000</li>
                    </ul>
                    <h4>2. <em>Physical Presence and Endorsement</em></h4>
                    <p>Your physical presence will also be highly encouraging for both the students as well as the Management of St. Augustine’s College Du. Kindly squeeze 24th March into your timeline. You can’t afford to miss this day.</p>
                </article>
                <article class="uk-article">
                    <img class="img-fit:cover" src="frontend/img/academics.jpg" alt="">
                    <!--<h1 class="uk-article-title"><a class="uk-link-reset" href="">Heading</a></h1>-->

                    <p class="uk-article-meta">Written by <a href="#">st augustine</a> on April 10, 2017</p>
                    <p>Dear Prospective Parents, </p>
                    <p>Thanks for choosing St. Augustine’s College Du, for your child/Ward.  Please be informed that the Interview for all SUCCESSFUL Candidates comes up on Saturday 17th March, 2018. Time 9:00am Prompt.</p>
                </article>

            </div>
            @end
        </main>
@endsection