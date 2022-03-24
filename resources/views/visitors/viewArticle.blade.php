@extends('layouts.visitorLayouts')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ts-intro">
                    <h1>{{$article->title}}</h1>
                    <p>
                        <img src="{{asset('/uploads/profile').'/'.$article->image}}"/>
                    </p>
                    <p >{{$article->content}}</p>
                    <h1><p>Publie : {{$article->created_at}}</p></h1>
                </div>
        </div>
    </div>
    </br></br>
    <div class="col-md-12">
        <form  method="post" action="{{route('visitor.createRemark', $article->id)}}">
            @csrf
            <div class="row">
                @if($errors->any())
                    <ol>
                        @foreach($errors->all() as $error)
                            <li class="alert-danger">{{$error}}</li>
                        @endforeach
                    </ol>
                @endif
                <div>
                    <h1 >Remark</h1>
                    @foreach($comments as $comment)
                        <p> - {{$comment->remark}}</p>
                    @endforeach
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" value="{{old('name')}}" name="name" class="form-control" placeholder="Enter your name"/>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" value ="{{old('email')}}" name="email" class="form-control" placeholder="Enter your email"/>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Comment</label>
                        <input type="text" value="{{old('remark')}}" name="remark" class="form-control" placeholder="Remark"/>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </div>
        </form>
        <br>
        <div class="row">
            @if($article->id-1>0)
                <a href="{{route('visitor.viewArticle',$article->id-1)}}" class="float-left text-primary">Previous</a>
            @endif
            @if($article->id < $counter)
                <a href="{{route('visitor.viewArticle',$article->id+1)}}" class="float-right text-primary">Next</a>
            @endif
        </div>
    </div>

            <!-- main-panel ends -->
@endsection
