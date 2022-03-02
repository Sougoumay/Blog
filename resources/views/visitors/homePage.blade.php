@extends('layouts.visitorLayouts')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="col-lg-6">
                    <h4 class="page-title"> Adress </h4>
                </div>
                <div class="col-lg-6">
                    <div class="ts-intro">
                        <address>
                            <p> Rue : {{$user->rue}}</p>
                            <p>Code Postale : {{$user->code_postale}}</p>
                            <p> Pays : {{$user->country}}</p>
                        </address>
                    </div>
                    <div class="ts-intro">
                        <address>
                            <p> E-mail : {{$user->email}} </p>
                            <p> Phone Number : +{{$user->phone_number}} </p>
                        </address>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6">
                    <h4 class="page-title">School Career</h4>
                </div>
                <div class="col-lg-6">
                    <div class="ts-intro">
                        <ol>
                            @foreach($user->academics as $academic)
                                <li>
                                    {{$academic->start_date}}-{{$academic->end_date}} : {{$academic->institute}}
                                    ({{$academic->city}}/{{$academic->country}})
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6">
                    <div class="col-lg-6">
                        <h4 class="page-title">Software</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="ts-intro">
                            <ol>
                                @foreach($user->softwares as $software)
                                    <li>
                                        {{$software->title}}
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6">
                    <div class="col-lg-6">
                        <h4 class="card-title">Hobby</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="ts-intro">
                            <ol>
                                @foreach($user->hobbys as $hobby)
                                    <li>
                                        {{$hobby->title}}
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6">
                    <div class="col-lg-6">
                        <h4 class="card-title">Language</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="ts-intro">
                            <ol>
                                @foreach($user->languages as $language)
                                    <li>
                                        {{$language->langue}} : {{$language->level}}
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
    </div>
@endsection
