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
        <div class="col-md-12">
            <h3 class="column-title">We love to hear</h3>
            <!-- contact form works with formspree.io  -->
            <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
            <form id="contact-form" action="{{route('visitor.sendEmail')}}" method="get" role="form">
                <div class="error-container"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email"
                                   required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Subject</label>
                            <input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control form-control-message" name="body" id="message" placeholder="" rows="10"
                              required></textarea>
                </div>
                <div class="text-right"><br>
                    <button class="btn btn-primary solid blank" type="submit">Send Message</button>
                </div>
            </form>
        </div>

    </div><!-- 1st row end -->
@endsection
