@extends('layouts.main_layouts')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Add A New Language </h3>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample"  method="post" action="{{route('addLanguage')}}" enctype="multipart/form-data">
                                @csrf
                                @if($errors->any())
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="alert-danger">{{$error}}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <div class="form-group">
                                    <label for="exampleInputName1">Langue</label>
                                    <input type="text" value ="{{old('langue')}}" name="langue" class="form-control" id="exampleInputName1" placeholder="The language that you speak">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName2">Level</label>
                                    <input type="text" value ="{{old('level')}}" name="level" class="form-control" id="exampleInputName2" placeholder="Put the level of this language">
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
