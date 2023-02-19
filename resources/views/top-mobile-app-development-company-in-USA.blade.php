@extends('layout.app')

@section('content')

    <div class="hybrid-banner d-flex align-items-center" style="background: url('https://deorwine.b-cdn.net/images/mobile_app/mobile-app -develop.jpg'),linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)) no-repeat">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-12 react-banner-text" data-aos="zoom-in" style="overflow-x: visible;">
                        <h1 class="font-h1">Best <span class="text-orange">Mobile App</span> Development Company in USA</h1>
                        <a href="javascript:void(0)" class="mt-4 btn-primary d-block" data-toggle="modal" data-target="#exampleModalPreview">Get a free quote</a>
                </div>
            </div>
        </div>
    </div>

    <div class="free-consultation" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 consulting-left" data-aos="fade-right">
                    <h2>Mobile App <span>Development</span> Company in USA</span></h2>
                 <p>Our top mobile app development company works with a thorough understanding of our customer's real needs, which allows us to constructively design and develop an app with the proper usage of technology and make the rest best. Mobile Apps, we develop showcase only a part of what our mobile app development company is capable of. We know what it needs to convert your vision into reality. Having worked on various projects, we understand every app project is different and requires special attention. Thus, we consume significant time in planning and research.</p>
              <p>Mobile App Development overextended platforms allow companies a strategic advantage; one that is much required to turn ideas into app reality has a thorough way to application development. Our strategic vision in the state assures the right selection of methodologies based on reaching the definite development approach with the specific action. We understand in adopting trends that vary with time and on user's demand.</p>
                </div>
                @include('components.freeconsultation')
            </div>
        </div>
    </div>
    <div class="container mobile-tabs py-5" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-11 col-12 text-center m-auto">
                <h3 class="font-h2 font-weight-bold">Our strategies plan for <span>Mobile App Development</span></h3>
                <p class="mt-4">The success of an industry mobile app depends on some things. Being the organizer, you need to examine all of these features before going to the developers for your goals project of business app development. In this section, we'll share with you how you can get the right mobile app development strategy to drive your business.</p>
            </div>
            <div class="col-lg-6 col-12 mt-4">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="d-flex align-items-center nav-link mb-4 px-3 py-3 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <img class="mr-3" src="{{ env('APP_CDN_URL') }}/images/mobileApp-development-USA/icon5.png" alt="What is the purpose of your mobile application?" title="What is the purpose of your mobile application?">    
                    <span class="d-block font-weight-bold">What is the purpose of your mobile application?</span>
                    </a>
                    <a class="d-flex align-items-center nav-link mb-4 px-3 py-3" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <img class="mr-3" src="{{ env('APP_CDN_URL') }}/images/mobileApp-development-USA/icon4.png" alt="What your app will perform?" title="What your app will perform?">    
                    <span class="d-block font-weight-bold">What your app will perform?</span>
                    </a>
                    <a class="d-flex align-items-center nav-link mb-4 px-3 py-3" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <img class="mr-3" src="{{ env('APP_CDN_URL') }}/images/mobileApp-development-USA/icon3.png" alt="Which platform will target mobile users?" title="Which platform will target mobile users?">    
                        <span class="d-block font-weight-bold">Which platform will target mobile users?</span>
                    </a>
                    <a class="d-flex align-items-center nav-link mb-4 px-3 py-3" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <img class="mr-3" src="{{ env('APP_CDN_URL') }}/images/mobileApp-development-USA/icon2.png" alt="What will get your app apart from all competitors’ applications?" title="What will get your app apart from all competitors’ applications?">    
                    <span class="d-block font-weight-bold">What will get your app apart from all competitors’ applications?</span>
                    </a>
                    <a class="d-flex align-items-center nav-link mb-0 px-3 py-3" id="v-pills-settings-tab1" data-toggle="pill" href="#v-pills-settings1" role="tab" aria-controls="v-pills-settings1" aria-selected="false">
                        <img class="mr-3" src="{{ env('APP_CDN_URL') }}/images/mobileApp-development-USA/icon1.png" alt="Who are the primary users of your app?" title="Who are the primary users of your app?">
                    <span class="d-block font-weight-bold">Who are the primary users of your app?</span></a>
                    </div>
            </div>
            <div class="col-lg-6 col-12 mt-4">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade bg-white show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h4 class="mb-4 d-flex align-items-center font-weight-bold">
                        <img class="mr-3" src="{{ env('APP_CDN_URL') }}/images/mobileApp-development-USA/icon6.png" alt="What is the purpose of your mobile application?" title="What is the purpose of your mobile application?">    
                        What is the purpose of your mobile application?</h4>
                        <p>All successful apps started with the aim of addressing some kinds of problems for their users. Sometimes the users of the app are even not conscious of their issues until the app helps themunderstand there was an alternative. You must have set out the aim of solving a possible issue. By knowing your target users, you will be able to recognize target users.</p>
                    </div>
                    
                    <div class="tab-pane fade bg-white" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h4 class="mb-4 d-flex align-items-center font-weight-bold">
                        <img class="mr-3" src="{{ env('APP_CDN_URL') }}/images/mobileApp-development-USA/icon6.png" alt="What is the purpose of your mobile application?" title="What is the purpose of your mobile application?">    
                        What is the purpose of your mobile application?</h4>
                        <p>All successful apps started with the aim of addressing some kinds of problems for their users. Sometimes the users of the app are even not conscious of their issues until the app helps themunderstand there was an alternative. You must have set out the aim of solving a possible issue. By knowing your target users, you will be able to recognize target users.</p>
                    </div>
                    
                    <div class="tab-pane fade bg-white" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h4 class="mb-4 d-flex align-items-center font-weight-bold"> <img class="mr-3" src="{{ env('APP_CDN_URL') }}/images/mobileApp-development-USA/icon6.png" alt="What is the purpose of your mobile application?" title="What is the purpose of your mobile application?"> What is the purpose of your mobile application?</h4>
                        <p>All successful apps started with the aim of addressing some kinds of problems for their users. Sometimes the users of the app are even not conscious of their issues until the app helps themunderstand there was an alternative. You must have set out the aim of solving a possible issue. By knowing your target users, you will be able to recognize target users.</p>
                    </div>
                    
                    <div class="tab-pane fade bg-white" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h4 class="mb-4 d-flex align-items-center font-weight-bold">
                        <img class="mr-3" alt="What is the purpose of your mobile application?" title="What is the purpose of your mobile application?" src="{{ env('APP_CDN_URL') }}/images/mobileApp-development-USA/icon6.png">
                        What is the purpose of your mobile application?</h4>
                        <p>All successful apps started with the aim of addressing some kinds of problems for their users. Sometimes the users of the app are even not conscious of their issues until the app helps themunderstand there was an alternative. You must have set out the aim of solving a possible issue. By knowing your target users, you will be able to recognize target users.</p>
                    </div>
                    <div class="tab-pane fade bg-white" id="v-pills-settings1" role="tabpanel" aria-labelledby="v-pills-settings-tab1">
                        <h4 class="mb-4 d-flex align-items-center font-weight-bold">
                        <img class="mr-3" alt="What is the purpose of your mobile application?" title="What is the purpose of your mobile application?" src="{{ env('APP_CDN_URL') }}/images/mobileApp-development-USA/icon6.png">    
                        What is the purpose of your mobile application?</h4>
                        <p>All successful apps started with the aim of addressing some kinds of problems for their users. Sometimes the users of the app are even not conscious of their issues until the app helps themunderstand there was an alternative. You must have set out the aim of solving a possible issue. By knowing your target users, you will be able to recognize target users.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="web-design-services py-5 w-100" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 title-design text-center">
                    <h3 class="font-h2">Our <span>Services</span></h3>
                    <p class="mx-auto mt-3">Web design includes disciplines in the creation and maintenance of website design. 3iLogics, a responsive web designing company always fulfill the needs of clients like responsive web design service. We serve the development and designing.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-1 web-design-usa-1 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">IOS Development</h5>
                        <p class="mb-0">Benefit from our iOS expertise to develop great solutions that enhance collaboration and productivity. It's with the making of custom applications for</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-2 web-design-usa-2 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Android Development</h5>
                        <p class="mb-0">In this quickly growing Android app industry, Deorwine Infotech is a leading Android app development company that develops custom Android applications</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-3 web-design-usa-3 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">React Native Development</h5>
                        <p class="mb-0">React Native development allows businesses to accelerate the process of developing apps across different platforms, recognition of the opportunity</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-4 web-design-usa-4 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Ionic App Development</h5>
                        <p class="mb-0">We implement coding best works by adhering to the guidelines of various mobile operating systems. With a focus on modernization and excellence</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-5 web-design-usa-5 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Phone Gap Development</h5>
                        <p class="mb-0">Going on the full potential of open- source app technologies, we dedicatedly work to develop robust mobile apps for cross-platforms on PhoneGap.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-6 web-design-usa-6 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Graphic Design</h5>
                        <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-app-dev-usa py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-12 text-center m-auto">
                    <h3 class="font-h2 font-weight-bold mb-0">Why Choose Us for <span>Mobile App Development</span></h3>
                    <p class="my-4">We’re a friendly, extremely experienced team of Mobile App Development and IT professionals dedicated towards our clients to achieve their desired outcome. We apply our creative and technical knowledge to deliver the perfect solution. We can convey complicated information in an easy-to-understand form and grow on resolving complex technical challenges.</p>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="text-dev-block p-4">
                        <div class="text-dev">
                            <h5 class="text-orange font-weight-bold">Dedicated Team</h5>
                            <p class="mb-4 text-white">Your project will be handled by a dedicated team of motivated developers who collectively work towards success for your business.</p>
                        </div>
                        <div class="text-dev">
                            <h5 class="text-orange font-weight-bold">Enterprise Experience</h5>
                            <p class="mb-4 text-white">Various industry experience delivered to each of your projects.</p>
                        </div>
                        <div class="text-dev">
                            <h5 class="text-orange font-weight-bold">Global Deployment</h5>
                            <p class="mb-4 text-white">Deploy your product section-ally in your business's city or globally.</p>
                        </div>
                        <div class="text-dev">
                            <h5 class="text-orange font-weight-bold">Project Delivery</h5>
                            <p class="mb-4 text-white">Ensure successful project delivery with your project lead with a systematic approach for a bug free deployment.</p>
                        </div>
                        <div class="text-dev">
                            <h5 class="text-orange font-weight-bold">Product Innovation</h5>
                            <p class="mb-4 text-white">Cutting-edge innovation in IoT, Blockchain, etc.</p>
                        </div>
                        <div class="text-dev">
                            <h5 class="text-orange font-weight-bold">End-to-end Mobile Development</h5>
                            <p class="mb-0 text-white">We provide the strategy and experience, products for every platform, design innovative interfaces tailored to satisfy your needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-12 m-auto d-flex justify-content-center align-items-center">
                <img class="img-fluid" alt="Why Choose Us for Mobile App Development" title="Why Choose Us for Mobile App Development" src="{{ env('APP_CDN_URL') }}/images/mobileApp-development-USA/mobile-dev.png"> 
                </div>
            </div>
        </div>
    </div>
    <div class="get-a-quote py-3" data-aos="fade-up" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 d-flex justify-content-between quote-mr">
                    <img class="mr-4" alt="Have an App Idea?" title="Have an App Idea?" src="{{ env('APP_CDN_URL') }}/images/quote-vector.svg" alt="">
                    <div class="mr-auto quote-content">
                        <h4>Have an App Idea?</h4>
                        <p>Convert your app idea into a profitable business.</p>
                    </div>
                    <div class="quote-btn" data-toggle="modal" data-target="#exampleModalPreview"> <a href="javascript:void(0)">Get a free quote <img class="ml-2"
                          alt="Arrow" title="Arrow" src="images/right-arrow(2).png" aria-hidden="true"></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="development-process py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="zoom-in">
                <h3 class="font-h2">Mobile App Development <span>Process</span></h3>
                    <p class="pt-2">Use Deorwine Reusable Components to reach market faster, greater advantage over the
                        competition and be future ready</p>
                </div>
                <div class="col-lg-12">
                    <div class="process-section d-flex justify-content-between">
                        <div class="process-block">
                            <img alt="Requirements" title="Requirements" src="{{ env('APP_CDN_URL') }}/images/process-1.svg" class="img-fluid">
                            <div class="process-content">
                                <h4>01</h4>
                                <img alt="Requirements" title="Requirements" src="{{ env('APP_CDN_URL') }}/images/analysis.svg" class="process-icon">
                                <img alt="require" title="require" src="{{asset('images/require-b.svg')}}" class="process-border">
                                <h5>Requirements</h5>
                            </div>
                        </div>
                        <div class="process-block">
                            <img alt="Designing" title="Designing" src="{{ env('APP_CDN_URL') }}/images/process-2.svg" class="img-fluid">
                            <div class="process-content">
                                <h4>02</h4>
                                <img alt="Designing" title="Designing" src="{{ env('APP_CDN_URL') }}/images/designing.svg" class="process-icon">
                                <img alt="design-b" title="design-b" src="{{asset('images/design-b.svg')}}" class="process-border">
                                <h5>Designing</h5>
                            </div>
                        </div>
                        <div class="process-block">
                            <img alt="Development" title="Development" src="{{ env('APP_CDN_URL') }}/images/process-3.svg" class="img-fluid">
                            <div class="process-content">
                                <h4>03</h4>
                                <img alt="Development" title="Development" src="{{ env('APP_CDN_URL') }}/images/development-ico.svg" class="process-icon">
                                <img alt="develop-b" title="develop-b" src="{{asset('images/develop-b.svg')}}" class="process-border">
                                <h5>Development</h5>
                            </div>
                        </div>
                        <div class="process-block">
                            <img alt="Testing" title="Testing" src="{{ env('APP_CDN_URL') }}/images/process-4.svg" class="img-fluid">
                            <div class="process-content">
                                <h4>04</h4>
                                <img alt="Testing" title="Testing" src="{{ env('APP_CDN_URL') }}/images/testing-ico.svg" class="process-icon">
                                <img alt="test-b" title="test-b" src="{{asset('images/test-b.svg')}}" class="process-border">
                                <h5>Testing</h5>
                            </div>
                        </div>
                        <div class="process-block">
                            <img alt="Deployment" title="Deployment" src="{{ env('APP_CDN_URL') }}/images/process-5.svg" class="img-fluid">
                            <div class="process-content">
                                <h4>05</h4>
                                <img alt="Deployment" title="Deployment" src="{{ env('APP_CDN_URL') }}/images/deployment-icon.svg" class="process-icon">
                                <img alt="deploy-b" title="deploy-b" src="{{asset('images/deploy-b.svg')}}" class="process-border">
                                <h5>Deployment</h5>
                            </div>
                        </div>
                    </div>
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
   
@endpush