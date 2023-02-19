@extends('layout.app')

@section('content')

    <div class="testimonial-banner d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center" data-aos="fade-right" data-aos-duration="1000" style="overflow-x:visible">
                    <div >
                        <span class="d-flex">
                            <img alt="satisfaction" title="satisfaction" src="{{asset('images/satisfaction.png')}}" class="mr-3">
                            <div>
                                <h1>Happiest Clients</h1>
                                <h5>Highest Quality</h5>
                            </div>
                        </span>
                        <p>These success stories from across the world make us happy and encourage us to keep doing what we're doing.</p>
                        <div class="quote-btn" data-toggle="modal" data-target="#exampleModalPreview" > <a href="javascript:void(0)">Get A Free Quote<img alt="right-arrow" title="right-arrow" src="{{asset('images/right-arrow(2).png')}}" class="ml-2">
                                </a></div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 test-banner-right" data-aos="fade-left"
                    data-aos-duration="1000">
                    <img alt="Happiest Clients" title="Happiest Clients" src="{{ env('APP_CDN_URL') }}/images/testimonial.webp" class="img-fluid d-block my-3 mx-auto">
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial-section" data-aos="fade-up" data-aos-duration="700">
        <div class="container">
            <div class="row">
                <div class="col-12 testimonial-heading text-center pb-4" data-aos="zoom-in" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <h2>Delight <span>Testimonials</span></h2>
                    <p>We're pleasurable to share Success stories straight from our clients</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">

                <div class="testimonial-left" data-aos="fade-right" data-aos-duration="1000">
                        <div class="d-flex justify-content-between mb-4">
                            <span class="d-flex align-items-center">
                                <img alt="client" title="client" src="{{ env('APP_CDN_URL') }}/images/testimonials/doorserve.png" class="mr-4">
                                <span>
                                <h4 class="mb-1">Ted</h4>
                                <p class="mb-1"><i>Owner of Doorserve</i></p>
                                    <p class="usa">USA</p>
                                </span>
                            </span>
                            <!-- <img alt="Exclusion 1" title="Exclusion 1" src="{{asset('images/Exclusion 1.svg')}}"> -->

                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=4E58Rn1kFHU?autoplay=1&rel=0">
                            <img alt="Exclusion 1" title="Exclusion 1" src="{{asset('images/Exclusion 1.svg')}}"></a>


                        </div>
                        <p>I was very happy to have chosen such a great organization to help me with there-development of my mobile application. 
                           The developers at Deorwine Infotech were extremely professional and knowledgeable in reference to what we needed to accomplish 
                           for our business. I was impressed with their support and cooperation during the process of developing our mobile application. 
                           What I really liked is their quick responses to my questions and their guidance though the whole development process. I will most certainly use 
                           and recommend to any business looking to redefine their mobile presence.</p>
                    </div>

                    <div class="testimonial-left" data-aos="fade-right" data-aos-duration="1000">
                        <div class="d-flex justify-content-between mb-4">
                            <span class="d-flex align-items-center">
                                <img alt="Douglas-Laver" title="Douglas-Laver" src="{{ env('APP_CDN_URL') }}/images/testimonials/megako-app.png" class="mr-4">
                                <span>
                                <h4 class="mb-1">Toomtam</h4>
                                <p class="mb-1"><i>CEO of Megako</i></p>
                                    <p class="usa">USA</p>
                                </span>
                            </span>
                        </div>
                        <p><b class="d-block">Supportive Professional and Best Mobile App Development Team</b>
                            It has been great experience working with Deorwine Infotech and getting my 
                            Grocery app developed by them. I appreciate their support and cooperation during 
                            the development of my Mobile Application. Their end-to end project development, new 
                            features idea, and suggestion make my app best. They are very responsive and easy to 
                            communicate.</p>
                    </div>
 

                    <div class="testimonial-left" data-aos="fade-right" data-aos-duration="1000">
                        <div class="d-flex justify-content-between mb-4">
                            <span class="d-flex align-items-center">
                            <img alt="Douglas-Laver" title="Douglas-Laver" src="{{ env('APP_CDN_URL') }}/images/testimonials/find-me-freak.png" class="mr-4">
                                <span>
                                <h4 class="mb-1">Mike</h4>
                                <p class="mb-1"><i>Owner of Find Me Freak</i></p>
                                    <p class="usa">USA</p>
                                </span>
                            </span>
                        </div>
                        <p><b class="d-block">Great Mobile App Development Experience </b> What I like most about the company is that they understood my needs and provided me the best results 
                           with the requirements I had put forth. They had great pricing and excellent good faith contracting. 
                           I'm hoping to work with them for a long time and highly recommend their services.</p>
                    </div>

                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="testimonial-left" data-aos="fade-left" data-aos-duration="1000">
                        <div class="d-flex justify-content-between mb-4">
                            <span class="d-flex align-items-center">
                                <img alt="melanieluicy" title="melanieluicy" src="{{ env('APP_CDN_URL') }}/images/testimonials/melanieluicy.png" class="mr-4">
                                <span>
                                <h4 class="mb-1">Melanie Luicy</h4>
                                    <p class="usa">USA</p>
                                </span>
                            </span>
                            <!-- <img src="images/Exclusion 1.svg" alt=""> -->
                        </div>
                        <p><b class="d-block">Deorwine Are a Great Find</b>I have been working with Deorwine for 2 years so far and it has been such a great ability to working on 
                           their client's requirements. As there has nevermore been a moment when I’ve reached out to the team and 
                           wondered why they weren’t responding. They are just quick to respond to all the important information. 
                           And I am just satisfied that I got quality according to the cost.</p>
                    </div>

                    <div class="testimonial-left" data-aos="fade-left" data-aos-duration="1000">
                        <div class="d-flex justify-content-between mb-4">
                            <span class="d-flex align-items-center">
                                <img alt="philip" title="philip" src="{{ env('APP_CDN_URL') }}/images/testimonials/scottcamball.png" class="mr-4">
                                <span>
                                    <h4 class="mb-1">Scott Camball</h4>
                                    <p class="mb-1"><i>Co-founder & Director</i></p>
                                    <p class="usa">Bulgaria</p>
                                </span>
                            </span>
                            <!-- <img src="images/Exclusion 1.svg" alt=""> -->
                        </div>
                        <p><b class="d-block">Great People to Work With</b> I worked with Deorwine Infotech for the last couple years. Recently I got them to help me 
                            create a react native application. The communication was great and they always responded in a 
                            timely manner. The development and launch went smoothly. I would definately recommend them.
                        </p>
                    </div>

                    <div class="testimonial-left" data-aos="fade-left" data-aos-duration="1000">
                        <div class="d-flex justify-content-between mb-4">
                            <span class="d-flex align-items-center">
                            <img alt="prasanna" title="prasanna" src="{{ env('APP_CDN_URL') }}/images/testimonials/prasanna.png" class="mr-4">
                                <span>
                                <h4 class="mb-1">Prasanna Kirubakaran</h4>
                                <p class="mb-1"><i> Co-funder of hoppspace</i></p>
                                <p class="usa">INDIA</p>
                                </span>
                            </span>
                            <!-- <img src="images/Exclusion 1.svg" alt=""> -->
                        </div>
                        <p><b class="d-block">Creative Team</b> We have always found the Deorwine team to be very creative and the quality of the finished product excellent.
                        </p>
                    </div>

                    <div class="testimonial-left" data-aos="fade-left" data-aos-duration="1000">
                        <div class="d-flex justify-content-between mb-4">
                            <span class="d-flex align-items-center">
                                <img alt="Client" title="Client" src="{{ env('APP_CDN_URL') }}/images/testimonials/ambrigio.png" class="mr-4">
                                <span>
                                <h4 class="mb-1">Oscar</h4>
                                <p class="mb-1"><i>CEO at Ambrogio</i></p>
                                    <p class="usa">USA</p>
                                </span>
                            </span>
                               <!-- <img alt="Exclusion 1" title="Exclusion 1" src="{{asset('images/Exclusion 1.svg')}}"> -->

                               <a class="popup-youtube" href="https://www.youtube.com/watch?v=IvLSlCKTEL4">
                               <img alt="Exclusion 1" title="Exclusion 1" src="{{asset('images/Exclusion 1.svg')}}"></a>
                          


                        </div>
                        <p>I want to say to you only one thing to describe Deorwine Infotech, they are 
                           the best, they are great, they work very well. I recommended it to you this company.
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div id="blog-container"></div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<script src="{{asset('js/aos.js')}}"></script>
    <script>
        AOS.init({
        })
    </script>

<script>
$(function() {
    $('.popup-youtube').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});
</script>


@endpush