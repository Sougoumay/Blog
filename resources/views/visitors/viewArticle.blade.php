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
                </div>

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
                        <div >
                            <label for="exampleInputName1">Remark</label>
                            @foreach($comments as $comment)
                                <p> - {{$comment->remark}}</p>
                            @endforeach
                            <input type="text" value ="{{old('remark')}}" name="remark" class="form-control" id="exampleInputName1" placeholder="Remark">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

            <!-- main-panel ends -->
@endsection
