@extends('layout.app')

@section('content')


    <div class="career-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-12 banner-left" data-aos="zoom-in-right">
                <h1 class="font-h3">WORK WITH <span>DEORWINE</span></h1>
                    <p>We talk about new technologies and innovation more than anything else!</p>
                </div>
                <div class="col-lg-5 col-md-6 col-12 banner-right" data-aos="fade-left">
                    <img alt="Component 105" title="Component 105" src="{{ env('APP_CDN_URL') }}/images/Component105–1-min.png" class="m-auto img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-------------career-about---------------->
    <div class="career-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 career-about-left">
                    <img alt="Component 105" title="Component 105" src="{{asset('images/Group-min.png')}}" data-aos="fade-right">
                </div>
                <div class="col-lg-8 col-md-6 cl-12 about-content pl-5">
                    <div>
                        <h2>Careers <span>&#64;
                                Deorwine</span></h2>
                        <p>We aspire to get better in what we do and offer value factor to our clients. To maintain and
                            sharpen our competitive edge and stop at nothing short of excellence, we emphasize on
                            getting the right people onboard. We require passionate individuals with the hunger for
                            success and willing to be a part of the team game.</p>
                        <p>If you feel you have it in you and wish to be a part of our cohesive team, please check out
                            the current job opportunities below and apply.</p>
                    </div>
                    <div class="mt-4">
                    <h3 3 class="font-h2">Our Tech <span>Hiring Process</span></h3>
                        <p>It takes an excessive team to achieve great results. At Deorwine Infotech, it's our commitment 
                            to bring out the supreme in every team member and let every idea be heard. This is how we attack 
                            challenging projects and deliver products we can each be proud of.</p>
                        <p>We're looking for limit-pushers, passionate learners, and enthusiastic collaborators. People who 
                            can get effects done.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------career-about---------------->

    <!-- ----------positions------------------->
    <div class="positions" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center positions-heading" data-aos="zoom-in">
                <h3 class="font-h2">We Are <span>Looking</span> for the Following Positions.</h3>
                    <p>Deorwine Infotech is looking for some of the talented individuals, who have interest in solving
                        real-world business problems and challenges through mobile application and web-based solutions.
                        Being a leading mobile app development company with development center in India, Canada, and
                        Phoenix, we are developing advanced mobile and web-based app solutions for enterprises, startups
                        and businesses.</p>
                </div>
                <div class="col-lg-6">
                    <!-- Tabs nav -->
                   
                    <div class="nav flex-column nav-pills nav-pills-custom m-auto" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        @foreach ($jobs as $key=>$value)
                        <a class="nav-link py-2 shadow d-flex align-items-center d-block @if($key == 0) active @endif" id="v-pills-profile-tab"
                            data-toggle="pill" href="#v-pills-profile-{{ $value->id }}" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false">
                            <img alt="Developer" title="Developer" src="{{asset('images/web-development (2)-min.png')}}" class="px-4">
                            <h6 class="mb-0">{{ $value->title }}</h6>
                            <p class="text-center ml-auto mb-0 mr-4">{{ $value->job->opening }}</p>
                        </a>
                        @endforeach
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <!-- Tabs content -->
                    <div class="tab-content m-auto" id="v-pills-tabContent">
                    @foreach ($jobs as $key=>$value)
                        <div class="tab-pane fade shadow rounded show @if($key == 0) active @endif" id="v-pills-profile-{{ $value->id }}" role="tabpanel"
                            aria-labelledby="v-pills-profile-{{ $value->id }}">


                            <div class="requirments">
                                <div class="d-flex align-items-center mb-4">
                                <img alt="{{ $value->job->title }}" title="{{ $value->job->title }}" src="{{asset('images/bag-min.png')}}"  class="align-self-center mr-3">
                                    <h5 class="m-0">{{ $value->job->title }}</h5>
                                </div>
                                <p>No. of position: {{ $value->job->opening }}</p>
                                <p>Experience: {{ $value->job->experience }}</p>
                                <p>Location: {{ $value->job->location }}</p>
                                <p>Salary: {{ $value->job->salary }}</p>
                                <a href="{{ url('/') }}/career/{{$value->job->slug}}"><button class="btn ml-auto" type="button">Apply</button></a>
                            </div>

                            
                        </div>
                        @endforeach
                         {{--<div class="tab-pane fade shadow rounded show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="d-flex justify-content-between align-items-center requirments px-3">
                                <div>
                                    <h5>React Native Developer</h5>
                                    <img alt="React Native Developer" title="React Native Developer" src="{{asset('images/bag-min.png')}}" class="px-4">
                                    <span>&#40;2-5 Years&#41;</span>
                                </div>
                                <div>
                                    <a href="react-native-developer"><button class="btn ml-auto" type="button">Apply</button></a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center requirments px-3">
                                <div>
                                    <h5>React JS Developer</h5>
                                    <img alt="React JS Developer" title="React JS Developer" src="{{asset('images/bag-min.png')}}" class="px-4">
                                    <span>&#40;2-5 Years&#41;</span>
                                </div>
                                <div>
                                    <button class="btn ml-auto" type="button">Apply</button>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center requirments px-3">
                                <div>
                                    <h5>PHP Developer</h5>
                                    <img alt="PHP Developer" title="PHP Developer" src="{{asset('images/bag-min.png')}}">
                                    <span>&#40;2-5 Years&#41;</span>
                                </div>
                                <div>
                                    <button class="btn ml-auto" type="button">Apply</button>
                                </div>
                            </div>
                        </div>--}}

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ----------positions------------------->

    <!-- ------------our team----------------->
    <div class="our-team py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12" data-aos="zoom-in">
                <h3 class="font-h2">We <span>Love</span> Our Team</h3>
                </div>
                <div class="col-lg-3 col-md-6 col-12 team-content">
                    <img alt="Initial Interaction" title="Initial Interaction" src="{{asset('images/mail-min.png')}}">
                    <h5>Initial Interaction</h5>
                    <p class="mb-0">A one on one personal interview with the HR Manager is the first step of the selection process.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-12 team-content">
                    <img alt="Technical Interview" title="Technical Interview" src="{{asset('images/interview-min.png')}}">
                    <h5>Technical Interview</h5>
                    <p class="mb-0">It’s time to exhibit your technical skills before the Tech Expert judged on subject knowledge.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-12 team-content">
                    <img alt="Real-time Assignment" title="Real-time Assignment" src="{{asset('images/real-min.png')}}">
                    <h5>Real-Time Assignment</h5>
                    <p class="mb-0">For practical specialized assessment, you may have to answer a range of mystifications and out-of-the-box problems.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-12 team-content">
                    <img alt="Final HR Discussion" title="Final HR Discussion" src="{{asset('images/discussion-min.png')}}">
                    <h5>Final HR Discussion</h5>
                    <p class="mb-0">Once you pass the technical round, final discussions on salary, workplace ethics take place.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------our team----------------->


@include('components.testimonials')
<div id="blog-container"></div>
@endsection

@push('scripts')
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<script src="{{asset('js/aos.js')}}"></script>
    <script>
        AOS.init({
            delay: 100,
            duration: 2000,
        })
    </script>
@endpush