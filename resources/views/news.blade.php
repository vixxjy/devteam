@extends('layouts.main')

@section('content')
        <main class="body">
            <div class="container uk-margin-medium-top uk-margin-medium-bottom">
               
                <article class="uk-article">
                    <img class="img-fit:cover" src="{{url('images/'.$events->image)}}" alt=""  style="height: 450px">
                    <!--<h1 class="uk-article-title"><a class="uk-link-reset" href="">Heading</a></h1>-->

                    <p class="uk-article-meta">Written by <a href="#">{{$events->author}}</a> on {{ date('F d, Y', strtotime($events->created_at)) }}</p>

                    <p>{{$events->description}}</p>

                    <p><b>Tags:</b> {{$events->tag}}</p>      
       
                  
                </article>

            </div>
        </main>
@endsection