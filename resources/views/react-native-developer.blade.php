@extends('layout.app')

@section('content')


    <!------------banner---------------->
    <div class="detail-banner d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div data-aos="zoom-in">
                        <h1>{{$job->title}}</h1>
                        <ul>
                            <li>Position&#58; {{$job->opening}}</li>
                            <li>Experience&#58; {{$job->experience}}</li>
                            <li>Location&#58; Jaipur</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-------------------banner---------------->

    <!----------------job description----------->
    <div class="job-description">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12 descriptions">
                    <h2>Job <span>Description</span></h2>
                    <p> {{$job->description}}
                    </p>
                    <div>
                        <h5>Number of position: {{$job->opening}}</h5>
                        <p>Profile: {{$job->title}}</p>
                        <p>Experience: {{$job->experience}}</p>
                        <p>Location: {{$job->location}}</p>
                        <p>Salary: {{$job->salary}}</p>
                        <h5>Responsibilities and Duties</h5>
                    </div>
                    <ul>
                    {{$job->responsivity}}
                    </ul>
                </div>
                @include('components.serviceform')
            </div>
        </div>
    </div>
    <!----------------job description----------->

    <!---------------required-skills------------->
    @if($job->skills)
    <div class="required-skills" data-aos="fade-up" data-aos-duration="1500">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12 mt-4" data-aos="fade-right">
                    <h4>Skill Set</h4>
                    @foreach($skills as $key=>$value)
                    <ul>
                        <li>{{$value}}</li>
                    
                    </ul>
                    @endforeach
                    <h4>Qualification</h4>
                    <ul>
                        <li>{{$job->qualification}}</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 col-12 skill-logo">
                    <img src="images/Component 104 – 2-min.png" alt="" data-aos="fade-left">
                </div>
            </div>
        </div>
    </div>
    @endif
    <!---------------required-skills------------->
    <!---------------how-to-apply------------->
    <div class="how-to-apply" data-aos="fade-up" data-aos-duration="1500">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h1>How To <span>Apply</span></h1>
                    <p>
                        At Deorwine Infotech, we are enthusiastic about our people. We believe in promoting an
                        environment
                        where you will feel motivated, inspired and rewarded. We’ll approach you with respect and give
                        the
                        potential for you to grow a great career. Learn more about our interesting opportunities and
                        React
                        Native Developer jobs located in JAIPUR
                    </p>
                    <ul>
                        <h4>Step:</h4>
                        <li>Fill the form on this Page</li>
                        <li>Attach your Resume.</li>
                        <li>Submit your application and wait for the response from company.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!---------------how-to-apply------------->


@include('components.testimonials')
<div id="blog-container"></div> 
   
    
@endsection
@push('scripts')
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<script src="{{asset('js/aos.js')}}"></script>
    <script>
        AOS.init({
            delay: 50,
            duration: 1000,
        })
    </script>
@endpush