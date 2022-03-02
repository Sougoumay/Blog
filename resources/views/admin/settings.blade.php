@extends('layouts.main_layouts')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="text-center">
                <img width="20%" height="1%" src="{{asset('/uploads/profile').'/'.$user->profile}}"/>
            </div>
            <div class="text-center">
                <p>{{$user->last_name}} {{$user->first_name}}</p>
                <p>{{$user->email}}</p>
                <p>+{{$user->phone_number}}</p>
                <p>{{$user->country}}</p>
                <p>{{$user->city}}</p>
                <p>{{$user->rue}} {{$user->code_postale}}</p>
            </div>
            <div class="text-center">
                <a class="btn btn-primary" href="{{route('getEditProfile')}}">Modifier le profil</a>
                <a class="btn btn-primary" href="{{route('getUpdateUserData')}}">Modifier les informations générales</a>
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
