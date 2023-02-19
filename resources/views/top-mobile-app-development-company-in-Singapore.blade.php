@extends('layout.app')

@section('content')

    <div class="hybrid-banner d-flex align-items-center" style="background: url('https://deorwine.b-cdn.net/images/mobile_app/mobile-app -develop.jpg'),linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)) no-repeat">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 react-banner-text" data-aos="zoom-in" style="overflow-x: visible;">
                        <h1 class="font-h1">Best <span class="text-orange">Mobile App</span> Development Company in singapore</h1>
                        <a href="javascript:void(0)" class="mt-4 btn-primary d-block" data-toggle="modal" data-target="#exampleModalPreview">Get a free quote</a>
                </div>
            </div>
        </div>
    </div>

    <div class="free-consultation" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 consulting-left" data-aos="fade-right">
                    <h2>Our strategies plan for <span class="text-orange"> Mobile App Development </span> </h2>
                 <p>Our top mobile app development company works with a thorough understanding of our customer's real needs, which allows us to constructively design and develop an app with the proper usage of technology and make the rest best. Mobile Apps, we develop showcase only a part of what our mobile app development company is capable of. We know what it needs to convert your vision into reality. Having worked on various projects, we understand every app project is different and requires special attention. Thus, we consume significant time in planning and research.</p>
              <p>Mobile App Development overextended platforms allow companies a strategic advantage; one that is much required to turn ideas into app reality has a thorough way to application development. Our strategic vision in the state assures the right selection of methodologies based on reaching the definite development approach with the specific action. We understand in adopting trends that vary with time and on user's demand.</p>
                </div>
                @include('components.freeconsultation')
            </div>
        </div>
    </div>
    <div class="cms-needs on-demand-app-solution py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-12 mx-auto text-center">
                    <h3 class="font-h2 mb-3">We are expert in <span>Mobile App Technologies</span></h3>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="cms-card py-4 px-3 mt-4">
                        <img class="h-auto" alt="Android App Development" title="Android App Development" src="{{ env('APP_CDN_URL') }}/images/mobileapp-development-Singapore/apple.png">
                        <h5 class="my-3 ">Android App Development</h5>
                        <p class="mb-0">We revolve around customers through applications that are agile and integrals, affirmed agile experts develop this approach with a deft disposition for our customers to grow their business worth and return for capital contributed.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="cms-card py-4 px-3 mt-4">
                        <img class="h-auto" alt="IOS Development" title="IOS Development" src="{{ env('APP_CDN_URL') }}/images/mobileapp-development-Singapore/android.png">
                        <h5 class="my-3 ">IOS Development</h5>
                       <p class="mb-0">We rely on genuine partnership with more significant commitments for our partners to ensure that their success grows the upward ladder. It increases client visibility and believes in us working together through the years.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="cms-card py-4 px-3 mt-4">
                        <img class="h-auto" alt="Enterprises App Development" title="Enterprises App Development" src="{{ env('APP_CDN_URL') }}/images/mobileapp-development-Singapore/physics.png">
                        <h5 class="my-3 ">Enterprises App Development</h5>
                       <p class="mb-0">Our experienced team of developers, managers and analysts contributes to the accountability of our partner's crucial projects. They help to identify their vital outcomes and benefits from the blueprint they provide.</p>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <div class="technology-team py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12" data-aos="zoom-in">
                    <h3>Technologies Our <span>Mobile App Development</span> Team Works Upon</h3>
                    <p>Being a leading mobile app development agency we put emphasis on the enhancement of our
                        technological expertise. Apart from possessing strong competence in stable technologies, our
                        team of mobility experts keep exploring emerging ones parallelly. Take a look at the core
                        technologies our mobile app development team holds comprehensive expertise in:</p>
                </div>
            </div>
            <div class="row py-5 no-gutters">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <a href = "{{ url('/') }}/iphone-app-development" target="_blank"><div class="technology-team-block">
                        <img alt="IOS" title="IOS" src="{{ env('APP_CDN_URL') }}/images/apple-ico.svg">
                        <h5 class="pt-4">IOS</h5>
                    </div></a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <a href ="{{ url('/') }}/android-app-development" target="_blank"><div class="technology-team-block">
                        <img alt="Android" title="Android" src="{{ env('APP_CDN_URL') }}/images/android-ico.svg">
                        <h5 class="pt-4">Android</h5>
                    </div></a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <a href="{{ url('/') }}/react-native-app-development" target="_blank"><div class="technology-team-block">
                        <img alt="React Native" title="React Native" src="{{ env('APP_CDN_URL') }}/images/physics-ico.svg">
                        <h5 class="pt-4">React Native</h5>
                    </div></a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <div class="technology-team-block">
                        <img alt="Java" title="Java" src="{{ env('APP_CDN_URL') }}/images/java-ico.svg">
                        <h5 class="pt-4">Java</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <a href = "{{ url('/') }}/xamarin-app-development" target="_blank"><div class="technology-team-block">
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
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <div class="technology-team-block">
                        <img alt="Swift" title="Swift" src="{{ env('APP_CDN_URL') }}/images/swift-ico.svg">
                        <h5 class="pt-4">Swift</h5>
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
                        <a href="{{ url('/') }}/fitness-app-development"><figure>
                                <img alt="Fitness Solution" title="Fitness Solution" src="{{ env('APP_CDN_URL') }}/images/industry_wise/dumbbell.svg">
                                <figcaption>Fitness Solution</figcaption>
                            </figure></a>
                        </li>
                        <li>
                        <a href="{{ url('/') }}/job-portal-app-development"><figure>
                                <img alt="Job Portal Solution" title="Job Portal Solution" src="{{ env('APP_CDN_URL') }}/images/industry_wise/recruitment.svg">
                                <figcaption>Job Portal Solution</figcaption>
                            </figure></a>
                        </li>
                        <li>
                        <a href="{{ url('/') }}/home-services-app-solution"><figure>
                            <img alt="Home Service Provider" title="Home Service Provider" src="{{ env('APP_CDN_URL') }}/images/industry_wise/washing-machine.svg">
                            <figcaption>Home Service Provider</figcaption>
                        </figure></a>
                        </li>
                        <li>
                        <a href="{{ url('/') }}/dating-app-development"><figure>
                            <img alt="Dating Solution" title="Dating Solution" src="{{ env('APP_CDN_URL') }}/images/industry_wise/dating-app.svg">
                            <figcaption>Dating Solution</figcaption>
                        </figure></a>
                        </li>
                        <li>
                        <a href="{{ url('/') }}/laundry-app-development"><figure>
                            <img alt="Laundry Solution" title="Laundry Solution" src="{{ env('APP_CDN_URL') }}/images/industry_wise/washing-machine.svg">
                            <figcaption>Laundry Solution</figcaption>
                        </figure></a>
                        </li>
                        <li>
                        <a href="{{ url('/') }}/e-commerce-solution"><figure>
                        <img alt="Ecommerce Solution" title="Ecommerce Solution" src="{{ env('APP_CDN_URL') }}/images/industry_wise/online-order.svg">
                            <figcaption>Ecommerce Solution</figcaption>
                        </figure></a>
                        </li>
                        <li>
                        <a href="{{ url('/') }}/entertainment-industry-solution"><figure>
                            <img alt="Entertainment Solution" title="Entertainment Solution" src="{{ env('APP_CDN_URL') }}/images/industry_wise/video.svg">
                            <figcaption>Entertainment Solution</figcaption>
                        </figure></a>
                        </li>
                    </ul>
                </div>
            </div>  
        </div>
    </div>
    <div class="technology-team pt-5 pb-4" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12" data-aos="zoom-in">
                    <h3>We Develop Apps with <span>Agile Development Methodology</span></h3>
                    <p class="mb-0">We aspire to get better in what we do and offer value factor to our clients. To maintain and sharpen our competitive edge and stop at nothing short of excellence, we emphasize on getting the right people onboard. We require passionate individuals with the hunger for success and willing to be a part of the team game.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="technology-choose py-5" data-aos="fade-up" >
        <div class="container">
            <div class="row react-col-rev">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <img alt="Why we are the best Mobile App Development Company" title="Why we are the best Mobile App Development Company" src="images/mobileapp-development-Singapore/Presentation.png"  class="img-fluid" data-aos="fade-right">
                    <div class="text-bg p-3 mt-3">
                        <p data-aos="zoom-in" data-aos-delay="0">Deorwine provides a flexible development for our
                            customer and high skilled Developer Team.
                            And we have features of why choose us for your development.</p>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12">
                    <h3 class="font-h2 pt-3" data-aos="zoom-in">Why we are the best <span>Mobile App Development</span> Company</span></h3>
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
                    <img class="mr-4" alt="Have an App Idea?" title="Have an App Idea?" src="images/quote-vector.svg" alt="">
                    <div class="mr-auto quote-content">
                        <h4>Have an App Idea?</h4>
                        <p>Convert your app idea into a profitable business.</p>
                    </div>
                    <div class="quote-btn" data-toggle="modal" data-target="#exampleModalPreview"> <a href="javascript:void(0)">Get a free quote <img class="ml-2"
                                src="images/right-arrow(2).png" alt="right-arrow" title="right-arrow" aria-hidden="true"></a></div>
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