@extends('layouts.visitorLayouts')
@section('main')
    <div class="banner-carousel-item" style="background-image:url(assets1/images/slider-main/bg.jpg)">
        <div class="slider-content">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12 text-center">
                        <h1>
                            Bienvenue sur le blog personnel de
                        </h1>
                        <h1>
                            HAMID SOUGOUMA ALi
                        </h1>
                        <h1>
                            Etudiant en informatique qui se met a votre service
                        </h1>
                        <h1>
                            Vous trouverez sur ce blog des articles scientifiques d'actualite
                        </h1>
                        <p data-animation-in="slideInLeft" data-duration-in="1.2">
                            <a href="{{route('visitor.allArticle')}}" class="slider btn btn-primary">Our Posts</a>
                            <a href="{{route('visitor.contact')}}" class="slider btn btn-primary border">Contact Now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
