@extends('layouts.main_layouts')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Update User Data </h3>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample"  method="post" action="{{route('updateUserData')}}" >
                                @csrf
                                @if($errors->any())
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="alert-danger">{{$error}}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <div class="form-group">
                                    <label for="exampleInputName1">Nom</label>
                                    <input type="text" value ="{{$user->last_name}}" name="last_name" class="form-control" id="exampleInputName1" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Prenom</label>
                                    <input name="first_name" value ="{{$user->first_name}}" class="form-control" id="exampleTextarea1" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Email</label>
                                    <input type="text" name="email" value ="{{$user->email}}" class="form-control" id="exampleTextarea1" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Telephone</label>
                                    <input type="text" name="phone_number" value ="{{$user->phone_number}}" class="form-control" id="exampleTextarea1" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Rue</label>
                                    <input type="text" name="rue" value ="{{$user->rue}}" class="form-control" id="exampleTextarea1" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Code Postale</label>
                                    <input type="text" name="code_postale" value ="{{$user->code_postale}}" class="form-control" id="exampleTextarea1" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Pays</label>
                                    <input type="text" name="country" value ="{{$user->country}}" class="form-control" id="exampleTextarea1" />
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </form>
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
