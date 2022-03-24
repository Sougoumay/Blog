@extends('layouts.main_layouts')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 d-flex align-items-stretch">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Article {{$articles->id}}</h5>
                                    <h1 class="card-title">{{$articles->title}}</h1>
                                    <div class="align-content-around">
                                        <img weight="5%" height="5%" src="{{asset('/uploads/profile').'/'.$articles->image}}"/>
                                    </div>
                                    <p class="align-content-around">{{$articles->content}}</p>
                                </div>
                                <form class="forms-sample"  method="post" action="{{route('createRemark', $articles->id)}}">
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
                                        @foreach($articles->remarks as $comment)
                                            <li class="nav-item dropdown">
                                                <a href="#" class="text-white"  data-toggle="dropdown">
                                                    <p class="align-content-around"> {{$loop->iteration}} - {{$comment->remark}}</p>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="{{route('getResponseForm',$comment->id)}}">Response</a></li>
                                                    @foreach($comment->responses as $response)
                                                        <li>{{$response->answer}}</li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <input type="text" readonly name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" class="form-control" placeholder="Name"/>
                                        <input type="text" readonly name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" class="form-control" placeholder="Email"/>
                                        <input type="text" value ="{{old('remark')}}" name="remark" class="form-control" id="exampleInputName1" placeholder="Remark">
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                </form>
                                <br>
                                <span>
                                    @if($articles->id-1>0)
                                        <a href="{{route('findArticle',$articles->id-1)}}" class="float-left text-primary">Previous</a>
                                    @endif
                                    @if($articles->id < $counter)
                                        <a href="{{route('findArticle',$articles->id+1)}}" class="float-right text-primary">Next</a>
                                        @endif
                                </span>
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
        </div>
    </div>
            <!-- main-panel ends -->
@endsection
