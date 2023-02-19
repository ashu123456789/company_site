@extends('layout.app')

@section('content')

<div class="contact-banner LAD-banner d-flex justify-content-center align-items-center" style="background: url('{{ env('APP_CDN_URL') }}/images/lifeatdeorwine/life@deorwine-banner.webp') no-repeat,
    linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6))">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in">
                    <h1>Life At<span> Deorwine Infotech</span></h1>
                    <p>It’s not only about the work we do. It’s about how we make each day count.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="our-history my-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 our-history-left py-5 px-4">
                    <h2>Our <span>History</span></h2>
                    <p>Deorwine Infotech holds expertise in providing customized software solutions as per 
                       your requirements from Web Design and Development, Open Source Customization & Integration, 
                       Business Enterprise Solutions, UX/UI Designs, Mobile Applications to AI Chat Bot Solutions. 
                       The company has a recognized track record and happy customers all the way.</p>
                    <p>As a company, we are committed to enabling and growing our people, helping you to build a 
                       particular brand, not just a career; allowing you to learn new skills while maintaining 
                       work-life balance to excel on all fronts.</p>
                    <div class="quote-btn" data-toggle="modal" data-target="#exampleModalPreview"> <a href="javascript:void(0)">Get A Free Quote</a></div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 group-img px-0">
                    <img alt="group image" title="group image" src="{{ env('APP_CDN_URL') }}/images/lifeatdeorwine/our-history-3.webp" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="fun-moments" data-aos="fade-up">
        <div class="container">
            <div class="row pt-5 pb-4">
                <div class="col-lg-2 col-xl-1 col-md-2 moment-heading">
                     <img alt="calendar" title="calendar" src="{{asset('images/calendar.png')}}" class="img-fluid">
                     <h6>2021</h6>
                </div>
                <div class="col-xl-11 col-lg-10 col-md-10 moment-heading">
                    <p>The year 2021 has its ups and downs. But, the COVID can't stop us from having fun. Deorwine Infotech is delighted to start the year 
                        with auspicious International Women's day. As the time proceeds, we are planning to work on more delightful and fun projects. 
                        So, don't just sit in the corner, join us in this exciting venture by glancing at our celebrations.</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 moment-gallery">
                    <img alt="Diwali Celebration" title="Diwali Celebration" src="{{ env('APP_CDN_URL') }}/images/lifeatdeorwine/Diwali-2021-2.webp" class="img-fluid">
                    <div class="gallery-title d-flex justify-content-center align-items-center">
                        <h5>Diwali Celebration</h5>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 moment-gallery">
                    <img alt="Birthday Celebration" title="Birthday Celebration" src="{{ env('APP_CDN_URL') }}/images/lifeatdeorwine/birthday-celebration.webp" class="img-fluid">
                    <div class="gallery-title d-flex justify-content-center align-items-center">
                        <h5>Birthday Celebration</h5>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 moment-gallery">
                    <img alt="Holi Celebration" title="Holi Celebration" src="{{ env('APP_CDN_URL') }}/images/lifeatdeorwine/Diwali-2021-1.webp" class="img-fluid">
                    <div class="gallery-title d-flex justify-content-center align-items-center">
                        <h5>Holi Celebration</h5>
                    </div>
                </div>
            </div>
            {{--<div class="row">
                <div class="col-lg-2 col-xl-1 col-md-2 moment-heading">
                     <img alt="calendar" title="calendar" src="{{asset('images/calendar.png')}}" class="img-fluid">
                     <h6>2021</h6>
                </div>
                <div class="col-xl-11 col-lg-10 col-md-10 moment-heading">
                    <p>The year 2021 has its ups and downs. But, the COVID can't stop us from having fun. Deorwine
                        Infotech is delighted to start the year with auspicious International Women's day. As the year
                        proceeds, we are planning to work on more fun projects. So, don't just sit in the corner, join
                        us in this exciting venture by glancing at our celebrations.</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 moment-gallery">
                    <img alt="Office-Party" title="Office-Party" src="{{asset('images/Office-Party.png')}}" class="img-fluid">
                    <div class="gallery-title">
                        <h5>11th Anniversary of Deorwine Infotech</h5>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 moment-gallery">
                    <img alt="woman'sday" title="woman'sday" src="{{asset('images/womansday.png')}}" class="img-fluid">
                    <div class="gallery-title">
                        <h5>Women's day 2021</h5>
                    </div>
                </div>
            </div>--}}
            <div class="row pb-5 experience">
                <div class="col-xl-12">
                    <h3>Employee Speaks</h3>
                </div>
                <div class="col-xl-12">
                    <div class="deorwine-exp">
                        <div class="d-flex justify-content-between deorwine-exp-content">
                            <div>
                                <p>Working for this company was amazing. In my journey, I learned more than I imagined. People in this company are knowledgeable, supportive, transparent, and know what they are doing. I joined as a fresher but my opinions or thoughts were given importance, whether it be about the project or something that I wanted to learn other than my existing skills. 
                                   I have been very lucky to work in this company and thankful for the opportunity given to me. <i><b>Web Developer</b></i></p>
                                <p>It's my pleasure to work here. A great, friendly working environment. Offers an opportunity to learn advanced technology and grow your   knowledge that's good for your career. The company values your ideas and views. Great people for support. <i><b>SEO Analyst</b></i></p>
                                <p>Positive & Good environment Best training by senior and More career opportunities. <i><b>PHP Developer</b></i></p>
                                <p> Love working here! It’s great, the work-life balance is good. <i><b>Flutter Developer</b></i> </p>
                                <h4>Let's get started!</h4>
                                <div class="quote-btn"> <a href="{{ url('/') }}/career">SEARCH JOBS</a></div>
                            </div>
                            <!-- <div class="deorwine-exp-img"><img alt="referral" title="referral" src="{{asset('images/referral.png')}}"></div> -->
                        </div>
                        <div class="d-flex justify-content-between deorwine-exp-content">
                            <div>
                            <p> Good onsite opportunities, opportunities to upskill yourself, good job security, good work-life balance, diverse and inclusive work culture.Good exposure to client-facing roles and good opportunities to learn on the job. <i><b>Quality Analyst</b></i></p>
                            <p>Management and Executive staff are very helpful and approachable, great staff on all levels. Good working hours and helping work culture &   Great management. No fear policy of management and They support talent.<i><b>Wordpress Developer</b></i></p>
                            <p>Friendly environment, Work freedom, Company which Values our Ideas/Views. Freedom to learn new technologies.<i><b>Junior Android Developer</b></i></p>
                            <p> Employees are satisfied and the management employee relation are good, salaries on time. overall good company and work. <i><b>Software Developer</b></i> </p>
                                <h4>Let's get started!</h4>
                                <div class="quote-btn"> <a href="{{ url('/') }}/career">SEARCH JOBS</a></div>
                            </div>
                            <!-- <div class="deorwine-exp-img"> <img alt="referral" title="referral" src="{{asset('images/referral.png')}}"> </div> -->
                        </div>
                        <div class="d-flex justify-content-between deorwine-exp-content">
                            <div>
                            <p> Good onsite opportunities, opportunities to upskill yourself, good job security, good work-life balance, diverse and inclusive work culture.Good exposure to client-facing roles and good opportunities to learn on the job. <i><b>Quality Analyst</b></i></p>
                            <p>Management and Executive staff are very helpful and approachable, great staff on all levels. Good working hours and helping work culture &   Great management. No fear policy of management and They support talent.<i><b>Wordpress Developer</b></i></p>
                            <p>Friendly environment, Work freedom, Company which Values our Ideas/Views. Freedom to learn new technologies.<i><b>Junior Android Develope</b></i></p>
                            <p> Employees are satisfied and the management employee relation are good, salaries on time. overall good company and work. <i><b>Software Developer</b></i> </p>
                                <h4>Let's get started!</h4>
                                <div class="quote-btn"> <a href="{{ url('/') }}/career">SEARCH JOBS</a></div>
                            </div>
                            <!-- <div class="deorwine-exp-img"> <img alt="referral" title="referral" src="{{asset('images/referral.png')}}"> </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="opportunity" data-aos="fade-up">
        <div class="container">
            <div class="row py-5">
                <div class="col-xl-6 col-lg-6 col-12 opportunity-left" data-aos="fade-right" style="overflow-x:visible;">
                <h3 class="font-h2">Equal Opportunity Employer</h3>
                    <p>Deorwine Infotech is proud to be an equal occasion employer. We're committed to giving equal employment openings to 
                        all persons without regard to public origin, race, creed, color, religion, sex, marital status, citizenship status, age, 
                        stager status, or disability. Likewise, we're committed to maintaining a plant where each hand's sequestration and particular 
                        quality is admired and defended from obnoxious or threatening behavior including violence and sexual importunity. 
                        We don't tolerate any form of demarcation or importunity of our workers by any co-workers, administrators, guests, or merchandisers. 
                        This commitment extends to our programs on recruiting, advertising, hiring, placement, creation, training, transfer, stipend, benefits, 
                        termination, and all other boons, terms, and conditions of employment.</p>
                    <!-- <div class="quote-btn"> <a href="javascript:void(0)">Read our policy document</a></div> -->
                </div>
                <div class="col-xl-6 col-lg-6 col-12 opportunity-right" data-aos="fade-left">
                <h3 class="font-h2">Great People To Work With</h3>
                    <p>Our people are our biggest means and we believe in leaving no gravestone unturned in assuring their heartiness at the office, as well as at home. 
                        Our meritocratic culture and processes of regular and timely feedback are designed to ensure a warm and supportive environment for our people to work in. 
                        We encourage our people to bestow laboriously for artistic events, fests, community service enterprises, and fun at work. This allows them to come more workers, 
                        better platoon workers, and indeed better mortal beings.</p>
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
            duration: 1200,
            once: true,
        })
    </script>

    <script>
        $(document).ready(function(){
            $('.deorwine-exp').slick({
                dots: true,
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                responsive: [
                {
                    breakpoint: 768,
                    settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots:true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                    }
                }]
            });
        });

    </script>
@endpush