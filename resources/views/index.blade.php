@extends('layouts.main_layouts')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 d-flex align-items-stretch">
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Adress</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <address>
                                                <p>{{$user->rue}}</p>
                                                <p>{{$user->code_postale}}</p>
                                                <p>{{$user->country}}</p>
                                            </address>
                                        </div>
                                        <div class="col-md-6">
                                            <address class="text-primary">
                                                <p class="font-weight-bold"> E-mail </p>
                                                <p class="mb-2"> {{$user->email}} </p>
                                                <p class="font-weight-bold"> Phone Number </p>
                                                <p class="mb-2"> +{{$user->phone_number}} </p>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">School Career</h4>
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
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Software</h4>
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
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Hobby</h4>
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
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Hobby</h4>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user->hobbys as $hobby)
                                            <tr>
                                                <td>{{$hobby->title}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary">Primary</button>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Language</h4>
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
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Language</h4>
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Langage</th>
                                            <th>Level</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user->languages as $language)
                                            <tr>
                                                <td>{{$language->langue}}</td>
                                                <td>{{$language->level}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary">Primary</button>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
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
