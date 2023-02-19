@extends('layout.app')

@section('content')

<div class="thankyou-banner d-flex align-items-center ">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12 text-center text-white">
                    <h1 class="display-4">THANK <span>YOU</span>!!</h1>
                    <h4>For Consulting Us</h4>
                    <p>We hope you had a good experience</p>
                    <a href="{{ url('/') }}">Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <div class="technology-build thankyou-counter py-5" data-aos="fade-up">
        <div class="container">
            <div class="row technology-counter mobile-flex">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="tech-count-block c-one p-4" data-toggle="modal" data-target="#exampleModalCenter">
                            <p><span class="counter-count">8</span>+</p>
                            <img alt="curve" title="curve" src="{{asset('images/technology/curve.svg')}}"> 
                            <h6 class="pt-4">Years in Business</h6>
                        </div>          
                    </div>
                    
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="tech-count-block c-three p-4" data-toggle="modal" data-target="#exampleModalCenter">
                            <p><span class="counter-count">{{ env('COUNT_SATISFIED_CLIENT') }}</span>+</p>
                            <img alt="curve" title="curve" src="{{asset('images/technology/curve.svg')}}"> 
                            <h6 class="pt-4">Satisfied Clients</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="tech-count-block c-one p-4" data-toggle="modal" data-target="#exampleModalCenter">
                            <p><span class="counter-count">{{ env('COUNT_COMPLETE_PROJECT') }}</span>+</p>
                            <img alt="curve" title="curve" src="{{asset('images/technology/curve.svg')}}"> 
                            <h6 class="pt-4">Completed Projects</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12" >
                        <div class="tech-count-block c-two p-4" data-toggle="modal" data-target="#exampleModalCenter">
                            <p><span class="counter-count">{{ env('COUNT_IT_PROFESSIONALS') }}</span>+</p>
                            <img alt="curve" title="curve" src="{{asset('images/technology/curve.svg')}}"> 
                            <h6 class="pt-4">IT Professionals</h6>
                        </div>
                    </div>
                    <div class="col-12 pt-5 quote-btn text-center" data-aos="fade-right" style="overflow-x: visible" data-toggle="modal" data-target="#exampleModalPreview"> <a href="javascript:void(0)">Get A Free Quote <img alt="Right arrow" title="Right arrow" src="{{asset('images/right-arrow(2).png')}}" aria-hidden="true" class="ml-2"> </a>
                            </div>
            </div>
        </div>
    </div>

@include('components.testimonials')
<div id="blog-container"></div>
@endsection 
@push('scripts')
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<script src="{{asset('js/aos.js')}}"></script>
    <script>
        AOS.init({
            delay: 50,
            duration: 750,
        })
    </script>
@endpush