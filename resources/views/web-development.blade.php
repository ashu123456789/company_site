@extends('layout.app')

@section('content')

<div class="web-dev-banner banner-slide" style="background: url('{{ env('APP_CDN_URL') }}/images/web-development/web-developmentnew.webp'),linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.2))">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-12 react-banner-text my-auto" data-aos="zoom-in" style="overflow:visible;">
                    <h3>Experience A World-Class</h3>
                    <h1>Custom Web Development Service</h1>
                    <p class="py-3">We have been responsible for tech-aspirants and innovation-led businesses to scale and grow into big enterprises with our value-defining mobile app development services.</p>
                    <div class="quote-btn" data-toggle="modal" data-target="#exampleModalPreview"> <a href="javascript:void(0)">Get A Free Quote</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="free-consultation">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 consulting-left">
                    <h2>Best Web <span>Development Company</span></h2>
                    <p>We are innovative and we're techno-savvy. We create expert solutions to present your commercial enterprise a sturdy on-line presence. 
                        The innovative internet designers and programmers at Deorwine Infotech concentrate on practical eCommerce Web Development, Web Portal Development, 
                        Business Application Development, CMS Development, and Responsive Web Design Services. With large understanding in programming languages like PHP 
                        Web Development, Java Development, in addition to new technology like Node.JS, Angular.JS, Laravel, React JS, Python and lots of more, our professional 
                        internet builders provide you at par functionalities for serving your commercial enterprise's rationale higher - via intranet and internet. </p>
                    <p>Our custom enhancement offerings have produced enormous capability for interactive communication, succinct reporting, faultless documentation, elevated productivity, 
                        higher transparency, and escalating commercial enterprise technique efficiency.</p>
                </div>
                @include('components.freeconsultation')
            </div>
        </div>
    </div>
    <div class="web-design-services py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <h3 class="pt-1 text-center font-h2 pb-4" data-aos="zoom-in">Web Development <span>Services</span></h3>
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-1 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Custom Web Development</h5>
                        <p class="mb-0">With our customised Web Development results, we've helped organisations achieve a high-profit model in their specialised fields. 
                            Because they do not have to deal with the comity enterprises that come with mobile app development, custom web apps are easier to shape to the design's conditions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-2 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Enterprise Development</h5>
                        <p class="mb-0">The creation of an enterprise web app or software attempts to increase productivity and business functionality. A well-developed web app or software serves as a tool or result that enables organisations to produce solid and effective ways and processes.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-3 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Technology Consulting</h5>
                        <p class="mb-0">Our complete business analysis aids in the tracking of an organization's progress. We examine your present company issues, prospects, 
                            and numerous benefits that might aid in your overall expansion.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-4 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Web Portal Development</h5>
                        <p class="mb-0">Both front-end and back-end development is included in our bespoke web development services. Our inventors are equal to the task of perfecting a being app or designing an enterprise solution.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-5 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">E-commerce Solutions</h5>
                        <p class="mb-0">Deorwine offers skilled ecommerce development services that may help you grow your business. In order to do this, we offer business specific e-commerce web design and development services to all kind of businesses. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-6 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Cross-platform Apps</h5>
                        <p class="mb-0">We have the necessary know-how to provide outcomes, whether it's developing HTML5 cross-platform apps or utilising any other technology. We also provide tried-and-tested engagement approaches that are adaptable.</p>
                    </div>
                </div>

                
            </div>
        </div>
    </div>

    @include('components.portfolionew')

    <div class="technology-team web-dev-team py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12" data-aos="zoom-in">
                    <h3>Technologies Our <span>Web Development</span> Team Works Upon</h3>
                    <p>Being a leading mobile app development agency we put emphasis on the enhancement of our
                        technological expertise. Apart from possessing strong competence in stable technologies, our
                        team of mobility experts keep exploring emerging ones parallelly. Take a look at the core
                        technologies our mobile app development team holds comprehensive expertise in:</p>
                </div>
            </div>
            <div class="row py-5 no-gutters">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <a href="{{ url('/') }}/laravel-development" target="_blank"><div class="technology-team-block">
                        <img alt="Laravel" title="Laravel" src="{{ env('APP_CDN_URL') }}/images/web-development/laravel.png">
                        <h5 class="pt-4">Laravel</h5></a>
                    </div></a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <a href="{{ url('/') }}/react-js-development" target="_blank"><div class="technology-team-block">
                        <img alt="React Js" title="React Js" src="{{ env('APP_CDN_URL') }}/images/web-development/physics-ico.png">
                        <h5 class="pt-4">React Js</h5>
                    </div></a>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <a href="{{ url('/') }}/nodejs-development" target="_blank"><div class="technology-team-block">
                        <img alt="Node JS" title="Node JS" src="{{ env('APP_CDN_URL') }}/images/web-development/node.png">
                        <h5 class="pt-4">Node JS</h5>
                    </div></a>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <a href="{{ url('/') }}/angular-js-development" target="_blank"><div class="technology-team-block">
                        <img alt="Angular Js" title="Angular Js" src="{{ env('APP_CDN_URL') }}/images/g10.webp">
                        <h5 class="pt-4">Angular Js</h5>
                    </div></a>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <a href="{{ url('/') }}/python-development" target="_blank"><div class="technology-team-block">
                        <img alt="Python" title="Python" src="{{ env('APP_CDN_URL') }}/images/web-development/python.png">
                        <h5 class="pt-4">Python</h5>
                    </div></a>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <a href="{{ url('/') }}/golang-web-development" target="_blank"><div class="technology-team-block">
                        <img alt="Golang" title="Golang" src="{{ env('APP_CDN_URL') }}/images/web-development/golang.png">
                        <h5 class="pt-4">Golang</h5>
                    </div></a>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <a href="{{ url('/') }}/codeigniter-development" target="_blank"><div class="technology-team-block">
                        <img alt="Codeigniter" title="Codeigniter" src="{{ env('APP_CDN_URL') }}/images/web-development/codeigniter.png">
                        <h5 class="pt-4">Codeigniter</h5>
                    </div></a>
                </div>
        
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <a href="{{ url('/') }}/php-development" target="_blank"><div class="technology-team-block">
                        <img alt="PHP" title="PHP" src="{{ env('APP_CDN_URL') }}/images/web-development/php.png">
                        <h5 class="pt-4">PHP</h5>
                    </div></a>
                </div>
                
            </div>
        </div>
    </div>
    <div class="choose-deorwine py-5">
    @include('components.choose-deorwine')
    </div>  

    <div class="get-a-quote py-3" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 d-flex justify-content-between quote-mr">
                    <img alt="quote-vector" title="quote-vector" src="{{asset('images/quote-vector.svg')}}">
                    <div class="mr-auto quote-content">
                        <h4>Have An App Idea?</h4>
                        <p>Convert Your App Idea Into a Profitable Business.</p>
                    </div>
                    <div class="quote-btn" data-toggle="modal" data-target="#exampleModalPreview"> <a href="javascript:void(0)">Get A Free Quote<img class="ml-2" alt="right-arrow" title="right-arrow" src="{{asset('images/right-arrow(2).png')}}" aria-hidden="true"></a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="top-develop-rank py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="zoom-in">
                    <h3 class="font-h2">Top Web Application Development Company, <span>Accredited By</span></h3>
                </div>
            </div>
            <div class="row rank-sec">
                <div class="col-lg-12 d-flex justify-content-between rank-block-mr">
                    <div class="rank-block">
                        <img alt="clutch" title="clutch" src="{{ env('APP_CDN_URL') }}/images/clutch.svg">
                        <p>Recognized as Top Developers by Clutch.</p>
                    </div>
                    <div class="rank-block">
                        <img alt="good-firms" title="good-firms" src="{{ env('APP_CDN_URL') }}/images/good-firms.svg">
                        <p>Ranked as “Top App Development Company” by GoodFirms</p>
                    </div>
                    <div class="rank-block">
                        <img alt="extract" title="extract" src="{{ env('APP_CDN_URL') }}/images/extract.svg">
                        <p>Ranked Top Android App Development Companies 2019 by Extract</p>
                    </div>
                    <div class="rank-block">
                        <img alt="futura-logo" title="futura-logo" src="{{ env('APP_CDN_URL') }}/images/futura-logo.svg">
                        <p>Ranked Top Mobile App Solution Provider 2019 by Appfutura.co</p>
                    </div>
                    <div class="rank-block">
                        <img alt="top-app-icon" title="top-app-icon" src="{{ env('APP_CDN_URL') }}/images/top-app-icon.svg">
                        <p>Ranked top 10 app developers 2019 by top appcreators</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="development-process py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="zoom-in">
                    <h3 class="font-h2">Web Development <span>Process</span></h3>
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
                                <img alt="require-b" title="require-b" src="{{asset('images/require-b.svg')}}" class="process-border">
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

    <div id="item-container"></div>


@include('components.testimonials')
<div id="blog-container"></div>  
   
    
@endsection
@push('scripts')

<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/solutions.js')}}"></script>
    <script>
        AOS.init({
            delay: 50,
            duration: 1250,
        })
        $('.counter-count').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {

                //chnage count up speed here
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
       
    </script>
@endpush