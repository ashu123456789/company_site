@extends('layout.app')

@section('content')

<div class="hybrid-banner d-flex align-items-center"  style="background: url('{{ env('APP_CDN_URL') }}/images/mobile_app/mobile-app -develop.jpg'),linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)) no-repeat">
        <div class="container">
            <div class="row">
                <div class="react-banner-text col-xl-7 col-lg-7 col-md-6 d-flex align-items-center justify-content-center" data-aos="zoom-in" style="overflow-x:visible;">
                    <div>
                        <h3>Learn More About Our World-Class Mobile App Development Services.</h3>
                        <h1>Mobile App Development</h1>
                        <p class="py-3">We specialise in customising, creating, designing, testing, and delivering Android and iOS mobile apps around the world. Transform your company into a high-performing 
                            application that is simple to use for your target audience.</p>
                        <a href="javascript:void(0)" class="btn-primary" data-toggle="modal" data-target="#exampleModalPreview">Get A Free Quote</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 d-flex align-items-center" data-aos="fade-left" style="overflow-x:visible;">
                   {{--<img alt="mobile-app-banner" title="mobile-app-banner" src="{{asset('images/mobile_app/mobile-app.png')}}" class="img-fluid">--}}
                </div>
            </div>
        </div>
    </div>

    <div class="free-consultation">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 consulting-left">
                    <h2>Best Mobile App <br><span>Development Company</span></h2>
                    <p>Our qualified mobile app development team knows how to take revolutionary ideas and convert them into effective solutions. 
                       We can precisely match your cost and time equation by delivering your requirements with exceptional precision. 
                       Our well-established methods and simplified programmers work in tandem with the greatest resources and work 
                       arrangements to provide the most empowering mobile app solutions to meet your needs. As we endeavour to provide you with 
                       the most appropriate and practical solutions based on popular programming frameworks and platforms such as Flutter, Swift, 
                       React Native, Kotlin, Java, HTML5 and more.</p>
                    <p>We are fully equipped and sourced to work on the most recent versions of these technologies to construct full-stack IoT, AI, 
                       ML, Blockchain, AR/VR, and Cloud-powered apps on iOS, Android, and cross-platform operating systems as an innovation-driven 
                       app development firm.</p>
                </div>
                @include('components.freeconsultation')
            </div>
        </div>
    </div>

    <div class="mobile-platform" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <h4 data-aos="zoom-in">All Leading <span>Mobile App Platforms Covered!</span></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="d-flex justify-content-between flex-wrap develop-platform pt-4">
                        <div class="platform-block">
                            <img alt="IOS App Development" title="IOS App Development" src="{{ env('APP_CDN_URL') }}/images/apple.svg" class="mr-3">
                            <p>IOS App Development</p>
                        </div>
                        <div class="platform-block">
                            <img alt="Android App Development" title="Android App Development" src="{{ env('APP_CDN_URL') }}/images/android-logo.svg" class="mr-3">
                            <p>Android App Development</p>
                        </div>
                        <div class="platform-block">
                            <img alt="Hybrid App Development" title="Hybrid App Development" src="{{ env('APP_CDN_URL') }}/images/physics.svg" class="mr-3">
                            <p>Hybrid App Development</p>
                        </div>
                        <div class="platform-block">
                            <img alt="React Native App Development" title="React Native App Development" src="{{ env('APP_CDN_URL') }}/images/global.svg" class="mr-3">
                            <p>React Native App Development</p>
                        </div>
                        <div class="platform-block">
                            <img alt="Flutter App Development" title="Flutter App Development" src="{{ env('APP_CDN_URL') }}/images/windows.svg" class="mr-3">
                            <p>Flutter App Development</p>
                        </div>
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
                    <p>As a prominent mobile app development company, we place a premium on improving 
                       our technological knowledge. Our team of mobility professionals not only has 
                       significant expertise in reliable technologies, but they are also constantly 
                       investigating new ones. Let us go through the core technologies our mobile app 
                       development team holds comprehensive expertise in:</p>
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

    @include('components.portfolionew')

    <div class="get-a-quote py-3" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 d-flex justify-content-between quote-mr">
                    <img alt="quote-vector" title="quote-vector" src="{{asset('images/quote-vector.svg')}}">
                    <div class="mr-auto quote-content">
                        <h4>Have An App Idea?</h4>
                        <p>Convert Your App Idea Into a Profitable Business.</p>
                    </div>
                    <div class="quote-btn" data-toggle="modal" data-target="#exampleModalPreview"> <a href="javascript:void(0)">Get A Free Quote<img alt="right-arrow" title="right-arrow" src="{{asset('images/right-arrow(2).png')}}" class="ml-2" aria-hidden="true"></a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="top-develop-rank py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="zoom-in">
                    <h3>Top Mobile App Development Company, <span>Accredited By</span></h3>
                </div>
            </div>
            <div class="row rank-sec">
                <div class="col-lg-12 d-flex justify-content-between rank-block-mr">
                    <div class="rank-block">
                        <img alt="clutch" title="clutch" src="{{ env('APP_CDN_URL') }}/images/clutch.svg">
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
                        <img alt="Appfutura" title="Appfutura" src="{{ env('APP_CDN_URL') }}/images/futura-logo.svg">
                        <p>Ranked Top Mobile App Solution Provider 2019 by Appfutura.co</p>
                    </div>
                    <div class="rank-block">
                        <img alt="appcreators" title="appcreators" src="{{ env('APP_CDN_URL') }}/images/top-app-icon.svg">
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
                                <img alt="Healthcare & Medical Solution" title="Healthcare & Medical Solution" src="{{ env('APP_CDN_URL') }}/images/medical-sol.svg" class="img-fluid">
                                <div class="solution-title">
                                    <a href="{{ url('/') }}/health-care-app-development" >Healthcare & Medical Solution</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="solution-block">
                                <img alt="Restaurant & Food Delivery Solution" title="Restaurant & Food Delivery Solution" src="{{ env('APP_CDN_URL') }}/images/food-image.svg" class="img-fluid">
                                <div class="solution-title">
                                    <a href="{{ url('/') }}/food-ordering-app-development" >Restaurant & Food Delivery Solution</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="solution-block">
                                <img alt="Ecommerce & Shopping Solution" title="Ecommerce & Shopping Solution" src="{{ env('APP_CDN_URL') }}/images/ecommerce-image.svg" class="img-fluid">
                                <div class="solution-title">
                                    <a href="{{ url('/') }}/e-commerce-solution">Ecommerce & Shopping Solution</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="solution-block">
                                <img alt="Sports & Fitness Solution" title="Sports & Fitness Solution" src="{{ env('APP_CDN_URL') }}/images/fitness.svg" class="img-fluid">
                                <div class="solution-title">
                                    <a href="{{ url('/') }}/fitness-app-development" >Sports & Fitness Solution</a>
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

    <div class="mobile-development-faq py-5" data-aos="fade-up">
        <div class="container">
            <div class="text-center pb-4" data-aos="zoom-in">
            <h3 class="font-h2">Frequently Asked <span>Questions</span></h3>
            </div>
            <div id="accordion" class="accordion">
                <div class="card mb-0 custom-card">
                    <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                        <a class="card-title">How much does it cost to develop a mobile app?</a>
                    </div>
                    <div id="collapseOne" class="card-body collapse" data-parent="#accordion">
                        <p>
                            Apart from possessing strong competence in stable technologies, our team of mobility
                            experts keep exploring emerging ones parallelly.
                        </p>
                    </div>
                    <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                        href="#collapseTwo">
                        <a class="card-title">How many hours does it take to develop an app?</a>
                    </div>
                    <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                        <p>
                            Apart from possessing strong competence in stable technologies, our team of mobility
                            experts keep exploring emerging ones parallelly.
                        </p>
                    </div>
                    <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                        href="#collapseThree">
                        <a class="card-title">Will you provide documentation for my solution or mobile app development?
                            Do I own the code?</a>
                    </div>
                    <div id="collapseThree" class="card-body collapse" data-parent="#accordion">
                        <p>
                            Apart from possessing strong competence in stable technologies, our team of mobility
                            experts keep exploring emerging ones parallelly.
                        </p>
                    </div>
                    <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                        href="#collapseFour">
                        <a class="card-title">What are the different features that you have integrated into the mobile
                            apps developed by you?</a>
                    </div>
                    <div id="collapseFour" class="card-body collapse" data-parent="#accordion">
                        <p>
                            Apart from possessing strong competence in stable technologies, our team of mobility
                            experts keep exploring emerging ones parallelly.
                        </p>
                    </div>
                    <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
                        href="#collapseFive">
                        <a class="card-title">What are the security measures you take to keep the app secure and
                            stable?</a>
                    </div>
                    <div id="collapseFive" class="card-body collapse" data-parent="#accordion">
                        <p>
                            Apart from possessing strong competence in stable technologies, our team of mobility
                            experts keep exploring emerging ones parallelly.
                        </p>
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
            duration: 1250,
        })
    </script>
@endpush