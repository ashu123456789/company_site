@extends('layout.app')

@section('content')

    <div class="bg-services d-flex align-items-center text-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-7 my-auto d-block" data-aos="zoom-in" style="overflow-x: visible">
                <h1 class="pt-1"><img src="{{ env('APP_CDN_URL') }}/images/technology/iot.png" alt="deveops" title="devops" class="services-image"> Devops Services</h1>
                    <p class="pt-2 pb-3">Boost your company's ability to produce high-volume software solutions with DevOps Solutions, expect to see seamless collaboration,
                        continuous delivery, a frictionless system, and the quickest time to market.</p>
                    <a href="javascript:void(0)" class="btn-primary mb-5" data-toggle="modal" data-target="#exampleModalPreview">Get A Free Quote</a>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5 px-0 banner-right-img text-center" data-aos="fade-left">
                    <img alt="Devops" title="Devops" src="{{asset('images/technology/devops-banner.png')}}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="technology-therory pb-5" data-aos="fade-up">
        <div class="container">
            <div class="row react-col-rev">
                <div class="col-xl-6 col-lg-6 col-md-12" data-aos="fade-right">
                    <img alt="Top–Notch DevOps Services" title="Top–Notch DevOps Services" src="{{asset('images/technology/tech-react-img.png')}}" class="img-fluid">
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12" data-aos="fade-left" style="overflow-x: visible">
                    <h2 class="pt-1">Top–Notch DevOps <span>Services</span></h2>
                    <p class="pt-3">Businesses seek accelerated solutions designed with an agile software development
                        approach as technology disruption is a continual urge. The heart of this strategy is continuous
                        integration and seamless delivery. The most difficult task is to create an environment that encourages
                        collaboration and integration. DevOps, which combines developers and operations, is the solution because
                        it allows for improved communication, collaboration, and automation between software developers and IT operations specialists.
                        Faster development and deployment of apps, goods, and services result from enhanced workflow.</p>
                    <p class="pb-3">Deorwine Infotech, a DevOps Solution Provider provides dependable DevOps solutions that ensure software-driven
                        innovation is delivered quickly. These tools improve communication and collaboration while also removing software development
                        bottlenecks. They are intended to fill in the gaps between software development and implementation.</p>
                    <a href="javascript:void(0)" class="btn-primary mb-5" data-toggle="modal" data-target="#exampleModalPreview">Get A Free Quote</a>
                </div>
            </div>
        </div>
    </div>

    <div class="technology-services py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                <h3 class="pt-1 text-center font-h2" data-aos="zoom-in">Services offered by <span>us</span></h3>
                </div>
            </div>
            <div class="row pt-5 web-design-services">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-1 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">DevOps Consulting</h5>
                        <p class="mb-0">Take advantage of our DevOps consulting services to reduce your product's time to market.
                            We give extensive consultations and help on your DevOps needs, including DevOps evaluation, DevOps automation, and DevOps administration.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-2 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Infrastructure Automation</h5>
                        <p class="mb-0">By eliminating human work, our IT and software infrastructure automation services help businesses speed their IT operations.
                            Without any further work on your part, our infrastructure automation services guarantee scalability. Your infrastructure can be simply versioned and tested.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-3 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Configuration Management in DevOps</h5>
                        <p class="mb-0">You can give a comprehensive toolkit for faster issue determination and enhanced agility to utilise superior service quality with our configuration devops consulting services.
                            Our devops consultants have worked in lean environments before.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-4 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Continuous Deployment And Delivery</h5>
                        <p class="mb-0">Our DevOps professionals provide continuous development and delivery services, as well as software and solutions for writing, testing, and releasing high-quality code in a secure manner,
                            using a variety of tools. Throughout testing and quality assurance, we keep a close eye on your project.</p>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <div class="technology-choose py-5" data-aos="fade-up">
        <div class="container">
            <div class="row react-col-rev">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <img alt="tech-react-choose" title="tech-react-choose" src="{{asset('images/technology/tech-react-choose.png')}}" class="img-fluid" data-aos="fade-right">
                    <div class="text-bg p-3 mt-3">
                        <p data-aos="zoom-in" data-aos-delay="0">Deorwine provides a flexible development for our
                            customer and high skilled Developer Team.
                            And we have features of why choose us for your development.</p>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12">
                <h3 class="font-h2 pt-3" data-aos="zoom-in">Why Choose Deorwine for <span>Devops Development</span></h3>
                    <ul class="pt-3">
                        <li>We are also specialized in developing React based front end applications and in special, we
                            have produced a challenging React application.</li>
                        <li>We specialize in servicing advanced JavaScript-based web & mobile applications.</li>
                        <li>We provide complete document, Wireframes, SRS, and method applied.</li>
                        <li>On-time project delivery executed and experienced a kit of developers.</li>
                        <li>We have extremely talented Top Web Development Company in USA who are specialists in
                            building the best quality application for your product.</li>
                        <li>We are specialists in developing applications in React.js, AngularJS, Node.js</li>
                        <li>An experienced and experienced set of developers.</li>
                        <li>100% Support & Maintenance.</li>
                        <li>IT Consultancy manually and remotely.</li>
                        <li>High Skilled Developer Team and Management Team to manage your queries.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="get-a-quote py-3" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 d-flex justify-content-between quote-mr">
                    <img alt="quote-vector" title="quote-vector" src="{{asset('images/quote-vector.svg')}}" class = "mr-4">
                    <div class="mr-auto quote-content" data-aos="zoom-in">
                        <h4>Have An App Idea?</h4>
                        <p>Convert your app idea into a profitable business.</p>
                    </div>
                    <div class="quote-btn" data-aos="fade-right" data-toggle="modal" data-target="#exampleModalPreview"> <a href="javascript:void(0)">Get A Free Quote
                    <img alt="right-arrow" title="right-arrow" src="{{asset('images/right-arrow(2).png')}}" aria-hidden="true"></a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="technology-develop-process py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-12 col-md-12" data-aos="zoom-in">
                <h3  class="font-h2 text-center">Development <span>Process</span></h3>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-xl-12 col-lg-12 col-md-12 d-flex justify-content-between mobile-flex">

                    <div class="develop-process-block">
                        <img alt="develop-process" title="develop-process" src="{{asset('images/technology/develop-process-1.svg')}}" class="block-first-img">
                        <div class="develop-process-content">
                            <img alt="analytics" title="analytics" src="{{asset('images/technology/analytics.svg')}}">
                            <h5>Analytics</h5>
                        </div>
                    </div>
                    <div class="process-block-top">
                        <img alt="develop-process" title="develop-process" src="{{asset('images/technology/develop-process-2.svg')}}" class="block-first-img">
                        <div class="develop-process-content">
                            <img alt="creative" title="creative" src="{{asset('images/technology/creative-ico.svg')}}">
                            <h5>Creative</h5>
                        </div>
                    </div>
                    <div class="develop-process-block">
                    <img alt="develop-process" title="develop-process" src="{{asset('images/technology/develop-process-3.svg')}}" class="block-first-img">
                        <div class="develop-process-content">
                            <img alt="idea" title="idea" src="{{asset('images/technology/idea-ico.svg')}}">
                            <h5>Idea</h5>
                        </div>
                    </div>
                    <div class="process-block-top">
                        <img alt="develop-process" title="develop-process" src="{{asset('images/technology/develop-process-4.svg')}}" class="block-first-img">
                        <div class="develop-process-content">
                            <img alt="strategy" title="strategy" src="{{asset('images/technology/strategy-ico.svg')}}">
                            <h5>Strategy</h5>
                        </div>
                    </div>
                    <div class="develop-process-block">
                        <img alt="develop-process" title="develop-process" src="{{asset('images/technology/develop-process-5.svg')}}" class="block-first-img">
                        <div class="develop-process-content">
                            <img alt="planning" title="planning" src="{{asset('images/technology/planning-ico.svg')}}">
                            <h5>Planning</h5>
                        </div>
                    </div>
                    <div class="process-block-top">
                        <img alt="develop-process" title="develop-process" src="{{asset('images/technology/develop-process-6.svg')}}" class="block-first-img">
                        <div class="develop-process-content">
                            <img alt="production" title="production" src="{{asset('images/technology/production-ico.svg')}}">
                            <h5>Production</h5>
                        </div>
                    </div>
                    <div class="develop-process-block">
                        <img alt="develop-process" title="develop-process" src="{{asset('images/technology/develop-process-7.svg')}}" class="block-first-img">
                        <div class="develop-process-content">
                            <img alt="success" title="success" src="{{asset('images/technology/success-ico.svg')}}">
                            <h5>Success</h5>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>



    <div class="technology-build py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12">
                    <h4>We use smart <span>technologies</span> to build smarter Applications</h4>
                    <p class="py-3">We Help You Achieve Outstanding Business Results & Gain Competitive Advantage</p>
                    <div class="quote-btn" data-aos="fade-right" data-toggle="modal" data-target="#exampleModalPreview" style="overflow-x: visible"> <a href="javascript:void(0)">Get A Free Quote
                                <img alt="right-arrow" title="right-arrow" src="{{asset('images/right-arrow(2).png')}}" aria-hidden="true" class="ml-2"></a></div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="technology-counter d-flex justify-content-between mobile-flex">
                        <div class="tech-count-block c-one px-3 py-4">
                            <p><span class="counter-count">8</span>+</p>
                            <img alt="curve" title="curve" src="{{asset('images/technology/curve.svg')}}">
                            <h6 class="pt-3">Years in Business</h6>
                        </div>
                        <div class="tech-count-block c-two px-3 py-4">
                            <p><span class="counter-count">{{ env('COUNT_IT_PROFESSIONALS') }}</span>+</p>
                            <img alt="curve" title="curve" src="{{asset('images/technology/curve.svg')}}">
                            <h6 class="pt-3">IT Professionals</h6>
                        </div>
                        <div class="tech-count-block c-three px-3 py-4">
                            <p><span class="counter-count">{{ env('COUNT_SATISFIED_CLIENT') }}</span>+</p>
                            <img alt="curve" title="curve" src="{{asset('images/technology/curve.svg')}}">
                            <h6 class="pt-3">Satisfied Clients</h6>
                        </div>
                        <div class="tech-count-block c-one px-3 py-4">
                            <p><span class="counter-count">{{ env('COUNT_COMPLETE_PROJECT') }}</span>+</p>
                            <img alt="curve" title="curve" src="{{asset('images/technology/curve.svg')}}">
                            <h6 class="pt-3">Completed Projects</h6>
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
    <script>
        AOS.init({
            delay: 50,
            duration: 1300,
        })
    </script>
@endpush
