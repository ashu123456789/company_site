@extends('layout.app')

@section('content')



<div class="banner-slide hybrid-banner d-flex align-items-center" style="background: url('{{ env('APP_CDN_URL') }}/images/hybrid/hybrid.webp'),linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)) no-repeat">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 react-banner-text my-auto" data-aos="zoom-in" style="overflow-x:visible;">
                    <h3>Experience A World-Class</h3>
                    <h1>Hybrid App Development</h1>
                    <p class="py-3">Deorwine Infotech offers a wide range of world-class acknowledged hybrid app development 
                        services for our global consumers.</p>
                    <a href="javascript:void(0)" class="btn-primary" data-toggle="modal" data-target="#exampleModalPreview">Get A Free Quote</a>
                </div>
                <div class="col-lg-6 col-md-6 col-12 text-right hybrid-banner-right" data-aos="fade-left" >
                    {{--<img alt="banner-img" title="banner-img" src="{{asset('images/hybrid/banner-img.png')}}" class="img-fluid">--}}
                    
                </div>
            </div>
        </div>
    </div>

    <div class="free-consultation hybrid-app-form py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 consulting-left">
                    <h2>Hybrid App  <span>Development</span></h2>
                    <p>Our custom hybrid mobile app solutions help businesses get the most out of their IT investments and take advantage of new sales opportunities.</p>
                    <p>We benefit from cross platform application development because of our sophisticated resources and broad exposure to hybrid Platform mobile application 
                       technology. Our experienced Hybrid mobile app development team has produced the most creative range of smart applications for different mobile platforms 
                       using Titanium, PhoneGap, and Sencha HTML5-based app development technologies with the advantage of a compiled and shared code base.</p>
                    <p>Our mobile development team has adapted well to cross-platform needs and cross-platform application development, making extensive use of the most recent 
                       technological advancements in the field. Web development tools such as JavaScript, HTML5, JQuery Mobile, and CSS3 are investigated and used to generate 
                       intelligent designs that adhere to technical conventions flawlessly in this course.</p>   
                </div>
                @include('components.freeconsultation')
            </div>
        </div>
    </div>

    <div class="build-hybrid-app py-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="font-h2 mb-4 mx-auto">Build Your <span>Hybrid Mobile Apps</span> with Deorwine</h3>
                    <p class="mb-0">The infrastructure, provisioning, code development, and app administration components of Deorwine application platform are abstracted away from 
                        technical specifics. This reduces the time it takes to build mobile apps that function across devices and platforms and interface with other back-end systems 
                        and processes. These platforms, sometimes known as mobile application development platforms, include a variety of features to aid in the creation of a near-native 
                        user experience using a more efficient hybrid development strategy.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="hybrid-app-development py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 hybrid-app-development-left">
                    <h3>Hybrid App Development</h3>
                    <p class="my-3">Our highly qualified design team collaborates with Hybrid mobile app development experts to deliver value-defining results for your cross-platform application requirements. 
                        Hybrid apps are so popular because they allow developers to write only one piece of code for a mobile app while still supporting various platforms.</p>
                    <h5>Key Features:</h5>
                    <ul>
                    <li class="d-flex align-items-baseline"><i class="fa fa-check-circle mr-2" aria-hidden="true"></i><p>The capability to gathering whether or not the device is connected.</p></li>
                    <li class="d-flex align-items-baseline"><i class="fa fa-check-circle mr-2" aria-hidden="true"></i><p>Integration with the file system on the mobile device.</p></li>
                    <li class="d-flex align-items-baseline"><i class="fa fa-check-circle mr-2" aria-hidden="true"></i><p>Web-based services integration.</p></li>
                    <li class="d-flex align-items-baseline"><i class="fa fa-check-circle mr-2" aria-hidden="true"></i><p>An embedded browser that allows you to view dynamic web material more easily.</p></li>
                    </ul> 
                </div>
                <div class="col-lg-6 hybrid-app-development-right">
                    <h4>Hybrid App Development's Benefits</h4>
                    <ul>
                    <li class="d-flex align-items-baseline"><i class="fa fa-check-circle mr-2" aria-hidden="true"></i><p>It is simple to implement and utilise for web developers.</p></li>
                    <li class="d-flex align-items-baseline"><i class="fa fa-check-circle mr-2" aria-hidden="true"></i><p>Developing hybrid apps reduces the cost of development.</p></li>
                    <li class="d-flex align-items-baseline"><i class="fa fa-check-circle mr-2" aria-hidden="true"></i><p>It provides easy access to plug-ins and modules that are easy to integrate into other services or tools.</p></li>
                    <li class="d-flex align-items-baseline"><i class="fa fa-check-circle mr-2" aria-hidden="true"></i><p>It allows you to develop your software on a variety of platforms without incurring additional costs.</p></li>
                    <li class="d-flex align-items-baseline"><i class="fa fa-check-circle mr-2" aria-hidden="true"></i><p>The SQLite database for local storage has the best support.</p></li>
                    <li class="d-flex align-items-baseline"><i class="fa fa-check-circle mr-2" aria-hidden="true"></i><p>Web developers with HTML, CSS, and JavaScript skills may easily create hybrid apps.</p></li>
                    {{--<li><i class="fa fa-check-circle mr-2" aria-hidden="true"></i></li>
                    <li><i class="fa fa-check-circle mr-2" aria-hidden="true"></i></li>
                    <li><i class="fa fa-check-circle mr-2" aria-hidden="true"></i></li>
                    <li><i class="fa fa-check-circle mr-2" aria-hidden="true"></i></li>
                    <li><i class="fa fa-check-circle mr-2" aria-hidden="true"></i></li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="technology-team py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12" data-aos="zoom-in">
                    <h3>Technologies Our <span>Hybrid App Development</span> Team Works Upon</h3>
                    <p>As a prominent mobile app development company, we place a premium on improving our 
                       technological knowledge. Our team of mobility professionals not only has significant 
                       expertise in reliable technologies, but they are also constantly investigating new ones. 
                       Take a peek at the core technologies in which our mobile app development team is well-versed:</p>
                </div>
            </div>
            <div class="row py-5 no-gutters">
              
              
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
               <a href ="{{ url('/') }}/react-native-app-development" target="_blank"><div class="technology-team-block">
                        <img alt="React Native" title="React Native" src="{{ env('APP_CDN_URL') }}/images/physics-ico.svg">
                        <h5 class="pt-4">React Native</h5>
                    </div></a>
                </div>
               
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                <a href ="{{ url('/') }}/xamarin-app-development" target="_blank"><div class="technology-team-block">
                        <img alt="Xamarin" title="Xamarin" src="{{ env('APP_CDN_URL') }}/images/xamarin-ico.svg">
                        <h5 class="pt-4">Xamarin</h5>
                    </div></a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <div class="technology-team-block">
                        <img alt="Ionic" title="Ionic" src="{{ env('APP_CDN_URL') }}/images/iconic-ico.svg">
                        <h5 class="pt-4">Ionic</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                <a href ="{{ url('/') }}/flutter-app-development" target="_blank"><div class="technology-team-block">
                        <img alt="Flutter" title="Flutter" src="{{ env('APP_CDN_URL') }}/images/flutter.svg">
                        <h5 class="pt-4">Flutter</h5>
                    </div></a>
                </div>
                
            </div>
        </div>
    </div>

    @include('components.portfolionew')

    <div class="get-a-quote py-3" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 d-flex justify-content-between quote-mr">
                    <img alt="quote-vector" title="quote-vector" src="{{asset('images/quote-vector.svg')}}" class="mr-4">
                    <div class="mr-auto quote-content">
                        <h4>Have An App Idea?</h4>
                        <p>Convert Your App Idea Into a Profitable Business.</p>
                    </div>
                    <div class="quote-btn" data-toggle="modal" data-target="#exampleModalPreview"> <a href="javascript:void(0)">Get A Free Quote <img alt="right-arrow" title="right-arrow" src="{{asset('images/right-arrow(2).png')}}" class="ml-2" aria-hidden="true"></a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="top-develop-rank py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="zoom-in">
                    <h3>Top Hybrid App Development Company, <span>Accredited By</span></h3>
                </div>
            </div>
            <div class="row rank-sec">
                <div class="col-lg-12 d-flex justify-content-between rank-block-mr">
                    <div class="rank-block">
                        <img alt="Clutch" title="Clutch" src="{{ env('APP_CDN_URL') }}/images/clutch.svg">
                        <p>Recognized as Top Developers by Clutch.</p>
                    </div>
                    <div class="rank-block">
                        <img alt="GoodFirms" title="GoodFirms" src="{{ env('APP_CDN_URL') }}/images/good-firms.svg">
                        <p>Ranked as “Top App Development Company” by GoodFirms</p>
                    </div>
                    <div class="rank-block">
                        <img alt="Extract" title="Extract" src="{{ env('APP_CDN_URL') }}/images/extract.svg">
                        <p>Ranked Top Android App Development Companies 2019 by Extract</p>
                    </div>
                    <div class="rank-block">
                        <img alt="Appfutura.co" title="Appfutura.co" src="{{ env('APP_CDN_URL') }}/images/futura-logo.svg">
                        <p>Ranked Top Mobile App Solution Provider 2019 by Appfutura.co</p>
                    </div>
                    <div class="rank-block">
                        <img alt="top appcreators" title="top appcreators" src="{{ env('APP_CDN_URL') }}/images/top-app-icon.svg">
                        <p>Ranked top 10 app developers 2019 by top appcreators</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="business-solution py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12" data-aos="zoom-in">
                    <h3 class="font-h2">Customized Business <span>Solutions</span></h3>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="solution-slide">
                        <div>
                            <div class="solution-block">
                                <img alt="medical" title="medical" src="{{ env('APP_CDN_URL') }}/images/medical-sol.svg" class="img-fluid">
                                <div class="solution-title">
                                    <a href="javascript:void(0)">Healthcare & Medical Solution</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="solution-block">
                                <img alt="food" title="food" src="{{ env('APP_CDN_URL') }}/images/food-image.svg" class="img-fluid">
                                <div class="solution-title">
                                    <a href="javascript:void(0)">Restaurant & Food Delivery Solution</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="solution-block">
                                <img alt="ecommerce" title="ecommerce" src="{{ env('APP_CDN_URL') }}/images/ecommerce-image.svg" class="img-fluid">
                                <div class="solution-title">
                                    <a href="javascript:void(0)">Ecommerce & Shopping Solution</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="solution-block">
                                <img alt="fitness" title="fitness" src="{{ env('APP_CDN_URL') }}/images/fitness.svg" class="img-fluid">
                                <div class="solution-title">
                                    <a href="javascript:void(0)">Sports & Fitness Solution</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 pt-3 pb-4">
                    <div class="d-flex justify-content-center" 
                     data-aos="zoom-out" data-toggle="modal" data-target="#exampleModalPreview"> <a href="javascript:void(0)" class="btn-primary">Get
                            a free quote</a>
                    </div>
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
                            <img alt="process" title="process" src="{{ env('APP_CDN_URL') }}/images/process-1.svg" class="img-fluid">
                            <div class="process-content">
                                <h4>01</h4>
                                <img class="process-icon" alt="Requirements" title="Requirements" src="{{ env('APP_CDN_URL') }}/images/analysis.svg">
                                <img class="process-border" alt="process" title="process" src="{{asset('images/require-b.svg')}}">
                                <h5>Requirements</h5>
                            </div>
                        </div>
                        <div class="process-block">
                            <img alt="process" title="process" src="{{ env('APP_CDN_URL') }}/images/process-2.svg" class="img-fluid">
                            <div class="process-content">
                                <h4>02</h4>
                                <img alt="Designing" title="Designing" src="{{ env('APP_CDN_URL') }}/images/designing.svg" class="process-icon">
                                <img alt="designing" title="designing" src="{{asset('images/design-b.svg')}}" class="process-border">
                                <h5>Designing</h5>
                            </div>
                        </div>
                        <div class="process-block">
                            <img alt="process" title="process" src="{{ env('APP_CDN_URL') }}/images/process-3.svg" class="img-fluid">
                            <div class="process-content">
                                <h4>03</h4>
                                <img alt="Development" title="Development" src="{{ env('APP_CDN_URL') }}/images/development-ico.svg" class="process-icon">
                                <img alt="process" title="process" src="{{asset('images/develop-b.svg')}}" class="process-border">
                                <h5>Development</h5>
                            </div>
                        </div>
                        <div class="process-block">
                            <img alt="process" title="process" src="{{ env('APP_CDN_URL') }}/images/process-4.svg" class="img-fluid">
                            <div class="process-content">
                                <h4>04</h4>
                                <img alt="Testing" title="Testing" src="{{ env('APP_CDN_URL') }}/images/testing-ico.svg" class="process-icon">
                                <img alt="process" title="process" src="{{asset('images/test-b.svg')}}" class="process-border">
                                <h5>Testing</h5>
                            </div>
                        </div>
                        <div class="process-block">
                            <img alt="process" title="process" src="{{ env('APP_CDN_URL') }}/images/process-5.svg" class="img-fluid">
                            <div class="process-content">
                                <h4>05</h4>
                                <img alt="Deployment" title="Deployment" src="{{ env('APP_CDN_URL') }}/images/deployment-icon.svg" class="process-icon">
                                <img alt="process" title="process" src="{{asset('images/deploy-b.svg')}}" class="process-border">
                                <h5>Deployment</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="item-container"></div>



@include('components.testimonials')
<div id="blog-container"></div>   
   
    
@endsection
@push('scripts')

<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<script src="{{asset('js/aos.js')}}"></script>
    <script>
        AOS.init({
            delay: 50,
            duration: 1250,
        })    
    </script>
    <script src="{{asset('js/solutions.js')}}"></script>
@endpush