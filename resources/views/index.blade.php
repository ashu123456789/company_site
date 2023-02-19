@extends('layout.app')

@section('content')
{{--@include('cookieConsent::index')--}}

<div class="banner container-fluid" style="background: url('{{ env('APP_CDN_URL') }}/images/homepage/home-banner.webp') no-repeat">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12  company-title py-4">
                <div class="banner-heading pr-4">
                    <h4>#IT SOLUTION</h4>
                    <div class="banner-content">
                       <button type="button" class="btn my-3" data-toggle="modal" data-target="#exampleModalPreview">INDUSTRY SOLUTION</button>
                        <h1 class="my-3">Mobile App & Web Development</h1>
                        <p>That’s where greatest web design companies befall isolated, as they don’t know the procedure
                            that needs to be followed for developing an Industry Solution.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 banner-bottom pt-4 pb-3 px-4">
                <h4 class="mt-2"><span class="p-1">We</span> Provide Best IT Services for You</h4>
                <p>Mobile App & Web Develop | UI/UX Design | Digital Marketing</p>
            </div>
        </div>

    </div>

    <section class="about_us py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 text-center">
                   <img alt="About Us" title="About Us" src="{{ env('APP_CDN_URL') }}/images/homepage/aboutnew.webp" class="img-fluid">
                    {{--<figure>
                        <img src="images/pic02.png" alt="" class="img-fluid">
                        <figcaption>
                            <span class="d-flex align-items-baseline">
                                <h2>6</h2>
                                <p class="ml-2 mb-0">Years</p>
                            </span>
                            <h5>Experience</h5>
                        </figcaption>
                    </figure>--}}
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="about-detail p-3">
                       <a href="{{ url('/') }}/about-us"> <button class="btn">ABOUT US</button></a>
                        <h2 class="font-h1">Top Rated Mobile App Development Company</h2>
                        <p class="mt-4">Deorwine Infotech is a software consulting and product app development 
                                        company based in India. We specialize in delivering solutions and products 
                                        in customer application development, business process development. Web based 
                                        applications with success of delivering high standard of services to much different 
                                        organization for the past 7 years.</p>
                        <div class="numeric">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="num">
                                        <p class="counting"> <span class="counter-count">{{ env('COUNT_SATISFIED_CLIENT') }}</span>+</p>
                                        <p>HAPPY CLIENT</p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="num">
                                        <p class="counting"> <span class="counter-count">{{ env('COUNT_COMPLETE_PROJECT') }}</span>+</p>
                                        <p>PROJECT COMPLETED</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 d-flex align-items-center justify-content-start">
                    <div class="service-heading">
                        <h6>WE MAKE <span>CONNECTIONS</span></h6>
                        <h4 class="font-h2">Best Development Services For Your Business</h4>
                        <p class="mt-3">We are one of the best development company in India. Deorwine has always 
                            ranked high in terms of quality product, seamless delivery and on time support services. 
                            Our experts enables you with efficient, cost effective solution with quality efforts in 
                            minimum time and resources. </p>
                      {{--<a href="{{ url('/') }}/contact-us">  <button class="btn">Our Services</button></a>--}}
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="service-slide">
                        <div>
                            <div class="block p-3">
                                <h4>Mobile App <br> Development</h4>
                                <span><img alt="Mobile App Development" title="Mobile App Development" src="{{ env('APP_CDN_URL') }}/images/home_service_provide/web-maintenance.svg" class="img-fluid">
                                </span>
                                <p>Mobile applications are vital for your key audience. Our App development team can assist
                                    you with an efficient mobile app to attract more footfalls. </p>
                            </div>
                        </div>

                        <div>
                            <div class="block p-3">
                                <h4>Web <br> Development</h4>
                                <span><img alt="Web Development" title="Web Development" src="{{ env('APP_CDN_URL') }}/images/home_service_provide/web-maintenance.svg" class="img-fluid">
                                </span>
                                <p>Web Development is the first step towards establishing your business online. Let us make it 
                                   worth recognizable for your customers. </p>
                            </div>
                        </div>
                        <div>
                            <div class="block p-3">
                                <h4 class="block-w">IOT <br> Development</h4>
                                <span><img alt="IOT Development"  title="IOT Development" src="{{ env('APP_CDN_URL') }}/images/home_service_provide/graphic-design.svg" alt=""></span>
                                <p>Creating new applications to improve productivity, making life easier, Deorwine works on complete 
                                    smart iOT Solutions like smart city, smart living, etc.  </p>
                            </div>
                        </div>
                        <div>
                            <div class="block p-3">
                                <h4 class="block-w">Digital <br>Marketing</h4>
                                <span><img alt="Digital Marketing" title="Digital Marketing" src="{{ env('APP_CDN_URL') }}/images/home_service_provide/digital-market.svg" class="img-fluid">
                            </span>
                                
                                <p>Marketing on all leading social media channels and Search engines. Quite normal? Let us make a change 
                                    with quick conversions through these channels. </p>
                            </div>
                        </div>
                        
                        <div>
                            <div class="block p-3">
                                <h4 class="block-w">Graphic<br class="visible-xl"> Design</h4>
                                <span><img alt="Graphic" title="Graphic" src="{{ env('APP_CDN_URL') }}/images/home_service_provide/graphic-design.svg" class="img-fluid">
                            </span>
                                <p>Reality Check. Your Business can be engaging only if it is visually attractive and has excellent User experience. 
                                  Deorwine can deliver best site layout keeping in mind your target audience.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.portfolionew')
   
    @include('components.technology')

    <div class="solutions pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-12 m-auto text-center solution-heading">
                    <h3>Industry Wise Solutions</h3>
                    <p class="my-4 mx-auto">Regardless of which industry you have a place with, we can 
                        enable your endeavor with esteem characterizing solutions and creative way to deal with.</p>
                </div>
                <div class="col-12 service-provide">
                    <ul class= "d-flex">
                    <li>
                        <a href="{{ url('/') }}/laundry-app-development"><figure>
                            <img alt="Laundry Solution" title="Laundry Solution" src="{{ env('APP_CDN_URL') }}/images/industry_wise/washing-machine.svg">
                            <figcaption>Laundry Solution</figcaption>
                        </figure></a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}/dating-app-development"><figure>
                            <img alt="Dating Solution" title="Dating Solution" src="{{ env('APP_CDN_URL') }}/images/industry_wise/dating-app.svg">
                            <figcaption>Dating Solution</figcaption>
                        </figure></a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}/e-commerce-solution"><figure>
                        <img alt="Ecommerce Solution" title="Ecommerce Solution" src="{{ env('APP_CDN_URL') }}/images/industry_wise/online-order.svg">
                            <figcaption>Ecommerce Solution</figcaption>
                        </figure></a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}/home-services-app-solution"><figure>
                            <img alt="Home Service Provider" title="Home Service Provider" src="{{ env('APP_CDN_URL') }}/images/industry_wise/washing-machine.svg">
                            <figcaption>Home Service Provider</figcaption>
                        </figure></a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}/job-portal-app-development"><figure>
                                <img alt="Job Portal Solution" title="Job Portal Solution" src="{{ env('APP_CDN_URL') }}/images/industry_wise/recruitment.svg">
                                <figcaption>Job Portal Solution</figcaption>
                            </figure></a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}/fitness-app-development"><figure>
                                <img alt="Fitness Solution" title="Fitness Solution" src="{{ env('APP_CDN_URL') }}/images/industry_wise/dumbbell.svg">
                                <figcaption>Fitness Solution</figcaption>
                            </figure></a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}/food-ordering-app-development"><figure>
                            <img alt="Food & Restaurant" title="Food & Restaurant" src="{{ env('APP_CDN_URL') }}/images/industry_wise/tray.svg">
                            <figcaption>Food & Restaurant</figcaption>
                            </figure></a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}/real-estate-app-development"><figure>
                                <img alt="Real Estate Solution" title="Real Estate Solution" src="{{ env('APP_CDN_URL') }}/images/industry_wise/Outline.svg">
                                <figcaption>Real Estate Solution</figcaption>
                            </figure></a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}/travel-app-development"><figure>
                                <img alt="Travel PortalSolution" title="Travel PortalSolution" src="{{ env('APP_CDN_URL') }}/images/industry_wise/around.svg">
                                <figcaption>Travel Portal Solution</figcaption>
                            </figure></a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}/entertainment-industry-solution"><figure>
                            <img alt="Entertainment Solution" title="Entertainment Solution" src="{{ env('APP_CDN_URL') }}/images/industry_wise/video.svg">
                            <figcaption>Entertainment Solution</figcaption>
                        </figure></a>
                    </li>
                    
                    <li>
                           <a href="{{ url('/') }}/education-app-development"><figure>
                                <img alt="Education Solution" title="Education Solution" src="{{ env('APP_CDN_URL') }}/images/industry_wise/presentation.svg">
                                <figcaption>Education Solution</figcaption>
                            </figure></a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}/health-care-app-development"><figure>
                                <img alt="Healthcare Solution" title="Healthcare Solution" src="{{ env('APP_CDN_URL') }}/images/industry_wise/first-aid-kit.svg">
                                <figcaption>Healthcare Solution</figcaption>
                            </figure></a>
                    </li>
                    
                       
                    </ul>
                </div>
            </div>  
        </div>
    </div>

    {{--<div class="container DevOps py-5">
        <div class="row">
            <div class="col-lg-12 DevOps-heading">
                <h2>DevOps Cyc<span>le</span></h2>
                <p class="my-4">From assessment to implementation, our DevOps team standardise the app development
                    process to get better operational efficiency and improved deployment cycles. The Agile approach
                    enables enterprises reach market faster and gain competititive edge.</p>
            </div>
        </div>
        <div class="row d-flex justify-content-between my-4">
            <div class=" cycle_1">
                <div class="text-center">
                    <button class="discover">Discover</button>
                </div>
                <hr>
                <div class="dis-app m-auto">
                    <h4>01</h4>
                    <span>
                        <img src="images/coding.svg" alt="">
                    </span>
                    <p>Discover Applications</p>
                </div>
            </div>
            <div class=" cycle_2">
                <div class="text-center transform-top">
                    <button class="transform">Tranform</button>
                    <img src="images/Component 106 – 1.png" class="img-1" alt="">
                    <img src="images/Component 107 – 1.png" class="img-2" alt="">
                </div>
                <div class="d-flex justify-content-between cycle-block-one" style="margin-top: 20px;">
                    <div class="infrastructure">
                        <div class="dis-app">
                            <h4>02</h4>
                            <span>
                                <img src="images/web-development.svg" alt="">
                            </span>
                            <p>Infrastructure As Code</p>
                        </div>
                    </div>
                    <div class="automated">
                        <div class="dis-app">
                            <h4>03</h4>
                            <span>
                                <img src="images/refactor.svg" alt="">
                            </span>
                            <p>Automated Refactor Application</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" cycle_2">
                <div class="text-center transform-top">
                    <button class="transform">Cruize</button>
                    <img src="images/Component 108 – 1.png" class="img-1" alt="">
                    <img src="images/Component 109 – 1.png" class="img-2" alt="">
                </div>
                <div class="d-flex justify-content-between cycle-block-one" style="margin-top: 20px;">
                    <div class="infrastructure">
                        <div class="dis-app" id="Cruize_1">
                            <h4>04</h4>
                            <span>
                                <img src="images/shuttle.svg" alt="">
                            </span>
                            <p>Continuous Deployment</p>
                        </div>
                    </div>
                    <div class="automated">
                        <div class="dis-app" id="Cruize_2">
                            <h4>05</h4>
                            <span>
                                <img src="images/cloud-computing.svg" alt="">
                            </span>
                            <p>Cloud<br> Enablement</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}

    @include('components.devsopps')
    @include('components.testimonials')
    <div id="blog-container"></div>


@endsection
@push('scripts')
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<script src="{{asset('js/aos.js')}}"></script>
@endpush