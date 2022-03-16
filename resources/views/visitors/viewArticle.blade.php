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
    </div>
    </br></br>
    <div class="container">
        <div class="row">
            <div class="ts-intro">

                <form  method="post" action="{{route('visitor.createRemark', $article->id)}}">
                    @csrf
                    @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                                <li class="alert-danger">{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div>
                        <h1 >Remark</h1>
                    </div>
                    <div >
                        @foreach($comments as $comment)
                            <p> - {{$comment->remark}}</p>
                        @endforeach
                        <input type="text" value="{{old('name')}}" name="name" class="form-control" placeholder="Enter your name"/>
                        <input type="text" value ="{{old('email')}}" name="email" class="form-control" placeholder="Enter your email"/>
                        <input type="text" value="{{old('remark')}}" name="remark" class="form-control" placeholder="Remark"/>


                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>

            <!-- main-panel ends -->
@endsection
