@extends('layouts.visitorLayouts')
@section('main')
    <div class="row text-center">
        <div class="col-12">
            <h3 class="section-sub-title">Find Our Location</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-md-4">
            <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fas fa-map-marker-alt mr-0"></i>
          </span>
                <div class="ts-service-box-content">
                    <h4>My Adress</h4>
                    <p>{{$users->rue}} {{$users->code_postale}}, {{$users->country}}</p>
                </div>
            </div>
        </div><!-- Col 1 end -->

        <div class="col-md-4">
            <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-envelope mr-0"></i>
          </span>
                <div class="ts-service-box-content">
                    <h4>Email Us</h4>
                    <p>{{$users->email}}</p>
                </div>
            </div>
        </div><!-- Col 2 end -->

        <div class="col-md-4">
            <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-phone-square mr-0"></i>
          </span>
                <div class="ts-service-box-content">
                    <h4>Call Us</h4>
                    <p>+{{$users->phone_number}}</p>
                </div>
            </div>
        </div><!-- Col 3 end -->

    </div><!-- 1st row end -->
@endsection
