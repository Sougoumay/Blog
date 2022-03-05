@extends('layouts.main_layouts')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Articles </h3>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex align-items-stretch">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Article {{$article->id}}</h5>
                                    <h1 class="card-title">{{$article->title}}</h1>
                                    <div class="align-content-around">
                                        <img weight="5%" height="5%" src="{{asset('/uploads/profile').'/'.$article->image}}"/>
                                    </div>
                                    <p class="align-content-around">{{$article->content}}</p>
                                </div>
                                <form class="forms-sample"  method="post" action="{{route('createRemark', $article->id)}}">
                                    @csrf
                                    @if($errors->any())
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li class="alert-danger">{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    <div class="form-group">
                                        <label for="exampleInputName1">Remark</label>
                                        @foreach($article->remarks as $comment)
                                            <li class="nav-item dropdown">
                                                <a href="#"  data-toggle="dropdown">
                                                    <p class="align-content-around"> {{$loop->iteration}} - {{$comment->remark}}</p>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="text-white" href="{{route('getResponseForm',$comment->id)}}">Response</a></li>
                                                    @foreach($comment->responses as $response)
                                                        <li>{{$response->answer}}</li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                        <input type="text" value ="{{old('remark')}}" name="remark" class="form-control" id="exampleInputName1" placeholder="Remark">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                </form>
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
