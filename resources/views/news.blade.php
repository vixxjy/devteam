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

                    <p><b>Tags:</b> {{$event->tag}}</p>      
                 @endforeach
                  
                </article>

            </div>
        </main>
@endsection