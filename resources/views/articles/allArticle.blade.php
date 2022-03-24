@extends('layouts.main_layouts')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
            </div>
            <div class="row">
                <div class="col-md-12 d-flex align-items-stretch">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Articles</h5>
                                    <u1>
                                        @foreach($articles as $article)
                                            <a href="{{route('viewArticle',$article->slug)}}">
                                                <li>
                                                    <h1 class="card-title">{{$article->title}}</h1>
                                                    <img width="5%" height="5%" src="{{asset('/uploads/profile').'/'.$article->image}}"/>
                                                </li>
                                            </a>
                                        @endforeach
                                    </u1>

                                </div>
                                <div class="d-flex justify-content-center">
                                    {!! $articles->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2022</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
@endsection
