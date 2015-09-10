@extends('layouts.main')


@section('content')
    <div class="flexcontainer container">

        <!--Hey there, how's it going? I'm glad that you're taking the time to look through my code, but I'm sorry to say that it isn't the best example I can offer right now, check back later and prepare to be amazed :)-->
       {{--@include('partials.intro-quote')--}}

        <h1 class="fancy">
            "How to Train a Chicken" is now out!
        </h1>
        <div class="col-xs-12 flex-center">
            <div class="col-xs-12 col-sm-8">
                <p>I'm happy to announce that my first ever children's book has been published! You can take a look on iTunes and buy yourself a copy for only $5.</p>
            </div>
        </div>
        <h3 class="fancy">
            <a href="https://itunes.apple.com/us/book/how-to-train-a-chicken/id1033429795?mt=11">Check it out!</a>
        </h3>
    </div>

    <div class="row">
        <div class="flexcontainer">
            <div class="funfacts">
                <div class="col-xs-3">
                    <i class="fa fa-headphones"></i>
                    <a href="https://www.youtube.com/watch?v=BSKimd9EX7s">
                        What I'm Listening to
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop