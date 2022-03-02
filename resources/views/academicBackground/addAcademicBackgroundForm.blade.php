@extends('layouts.main_layouts')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Add School Career </h3>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample"  method="post" action="{{route('addAcademicBackground')}}" enctype="multipart/form-data">
                                @csrf
                                @if($errors->any())
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="alert-danger">{{$error}}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <div class="form-group">
                                    <label for="exampleInputName1">Start_date</label>
                                    <input type="text" value ="{{old('start_date')}}" name="start_date" class="form-control" id="exampleInputName1" placeholder="Put just the year">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">End_date</label>
                                    <input type="text" value ="{{old('end_date')}}" name="end_date" class="form-control" id="exampleInputName1" placeholder="Put just the year">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Institute</label>
                                    <input type="institute" value ="{{old('institute')}}" name="institute" class="form-control" id="exampleInputName1" placeholder="The name of the institute of your formation">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Country</label>
                                    <input type="text" value ="{{old('country')}}" name="country" class="form-control" id="exampleInputName1" placeholder="The country of the institute">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">City</label>
                                    <input type="text" value ="{{old('city')}}" name="city" class="form-control" id="exampleInputName1" placeholder="The city of the institute">
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
