@extends('layouts.visitorLayouts')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-title"> Articles </h3>
            </div>
            <div class="col-lg-12">
                <div class="ts-intro">

                    @foreach($articles as $article)
                        <a href="{{route('visitor.viewArticle',$article->id)}}">
                            <h1 class="card-title">{{$article->title}}</h1>
                            <div class="align-content-around">
                                <img width="50%" height="1%" src="{{asset('/uploads/profile').'/'.$article->image}}"/>
                            </div>
                        </a>
                    @endforeach
                    {!! $articles->links() !!}

                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
            <!-- main-panel ends -->
@endsection
