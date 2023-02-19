@extends('layout.app')

@section('content')

<div class="banner-slide portfolio-banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12 my-auto d-block" data-aos="zoom-in-right" style="overflow-x: visible;">
                    <h4><img src="images/portfolio/case-study.svg" alt=""> CASE STUDY</h4>
                    <h2 class="pt-1">We Love To Make Apps That Make A Difference</h2>
                    <p class="pt-2 pb-3">Explore Why Choose Deorwine Infotech To Transform Your Business Ideas Into
                        Reality</p>
                    <a href="contact-us.php" class="btn-primary">Get A Free Quote</a>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 px-0 portfolio-banner-right">
                    <img src="images/case1.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-web-app py-5" data-aos="fade-up" data-aos-duration="1500">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12" data-aos="zoom-in">
                    <h1>Top Mobile App Development <span>Case Study</span></h1>
                    <p class="pt-2">Our mobile app development case study section covers different projects,
                        successfully handled by our experts. These projects will give you a complete idea about the
                        expertise and proficiency of our team. Here, we aim to deliver an innovative solution that
                        improves our client’s business and take it to the next level.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="case-study-section">
        <div class="container">
            <div class="row py-5">
                <div class="col-xl-6 col-lg-6 col-12 d-flex align-items-center">
                    <div class="case-study-section1 py-5 px-4">
                        <h3>Find Me A Freak</h3>
                        <h5 class="mt-3 mb-4">"Free Online Dating App for Singles"</h5>
                        <p>Find Me A Freak – the casual free online dating apps for adults! Meet new people, search singles near me feature, chat, flirt and find your perfect match.</p>
                        <div class="app-detail">
                            <p><b>Industrial Domain:</b> Dating Platform</p>
                            <p><b>Efforts:</b> 4 months (For Phase 1)</p>
                            <p><b>Deployment Time:</b> 4.5 months</p>
                            <p><b>Downloads:</b> More than 10 lacs</p>
                        </div>
                        <div class="case-icon">
                            <img src="images/apple (2).svg" alt="">
                            <img src="images/android (1).svg" alt="">
                        </div>
                        <span class="case-icon-last">
                            <img src="images/case-icon.png" alt="">
                        </span>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 section1-img text-center">
                  
                    <img alt="pic03" title="pic03" src="{{asset('images/homepage/pic03.png')}}" class="img-fluid">
                </div>
            </div>
            <div class="row py-5 case-row">
                <div class="col-xl-6 col-lg-6 col-12 d-flex align-items-center section2-img">
                    <img src="images/case2.png" alt="" class="img-fluid">
                </div>
                <div class="col-xl-6 col-lg-6 col-12">
                    <div class="case-study-section1 .case-study-section2 py-5 px-4">
                       <h3>CompareBuySave</h3>
                        <h5>We Compare Rates from Canada's Leading Providers</h5>
                        <p>We do the heavy lifting for comparing rates for you, so you don't have to. We've got the widest selection of insurance providers for visitor and super visa insurance.</p>
                        <div class="app-detail">
                            <p><b>Industrial Domain:</b> Dating Platform</p>
                            <p><b>Efforts:</b> 4 months (For Phase 1)</p>
                            <p><b>Deployment Time:</b> 4.5 months</p>
                            <p><b>Downloads:</b> More than 10 lacs</p>
                        </div>
                        <div class="case-icon">
                            <img src="images/apple (2).svg" alt="">
                        </div>
                        <span class="case-icon-last">
                            <img src="images/case-icon.png" alt="">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('components.testimonials')
@include('components.blogs')

@endsection
@push('scripts')
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<script src="{{asset('js/aos.js')}}"></script>
    <script>
        AOS.init({
            delay: 50,
            duration: 1300,
        })
        </script>

@endpush