@extends('layouts.visitorLayouts')
@section('main')
    <div class="container">
        <div class="col-lg-12">
            <h3 class="page-title"> Articles </h3>
        </div>
        <div class="row align-items-start">
            @foreach($articles as $article)
                <div class="col-4">
                            <a href="{{route('visitor.viewArticle',$article->id)}}">
                                <div class="align-content-around">
                                    <img width="50%" height="1%" src="{{asset('/uploads/profile').'/'.$article->image}}"/>
                                </div>
                                <br>
                            </a>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {!! $articles->links() !!}
        </div>
        <!-- content-wrapper ends -->
    </div>
            <!-- main-panel ends -->
@endsection
