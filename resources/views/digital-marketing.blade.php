@extends('layout.app')

@section('content')


<div class="banner-slide marketing-banner d-flex align-items-center w-100" style="background: url('{{ env('APP_CDN_URL') }}/images/digital-marketing/digital-marketing-banner1.webp'),linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));">
        <div class="container">
            <div class="row align-items-center">
                <div class="react-banner-text col-xl-6 col-lg-6 col-md-6 col-12 my-auto" data-aos="zoom-in" style="overflow-x: visible;">
                    <h3 class="p-0">Digital Footprint</h3>
                    <h1><span>Digital Marketing</span> Services</h1>
                    <p class="mt-3 mb-4">We offer comprehensive internet marketing services to bring digital metamorphosis to your business</p>
                    <a href="javascript:void(0)" class="btn-primary mt-3 d-block text-center" data-toggle="modal" data-target="#exampleModalPreview">Get A Free Quote</a>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-aos="fade-left">
                    {{--<img alt="digital" title="digital" src="{{asset('images/digital-marketing/digital-marketing-banner.png')}}" class="img-fluid">--}}
                </div>
            </div>
        </div>
    </div>

    <div class="free-consultation">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 consulting-left">
                    <h2>Developing A <span>Marketing Strategy</span></h2>
                    <p>Turn your bespoke business strategy into real-time success, allowing your customers to stay with you 
                        and tell the world about the wonders of your business, while growing and living longer and more reliable.</p>
                    <p>No one succeeds in company by counting just on one-dimensional marketing to announce their products. 
                        Yes, you may see benefits in the short term, but it'll bring you a lot of currency in the long run. 
                        As a result, you must give your company with a platform to show its services online, where billions of 
                        people are eager to be served. It's delicate to work on one's digital marketing requirements without a thorough grasp. 
                        Do not be concerned! Simply contact Deorwine, and they will give you with the topmost digital marketing services that may 
                        drastically transfigure your fortunes in a short period of time.</p>
                    <p>Our SEO Team constantly works on the enhancement & rearmost trends in SEO Field according to Google Guidelines and Search Machine Algorithms. 
                        We've a close watch on your website ranking & our SEO team achieves & maintain ranking throughout the service.</p>  
                    <p>Get to see what you're paying for, as we certify a complete transparent process with no arbitrary assurances.</p> 
                    <p>Perfect- tune your elevations with biweekly reviews & yearly reports to ameliorate client continuance value and productivity.</p>   
                </div>
                @include('components.freeconsultation')
            </div>
        </div>
    </div>

    {{--<div class="container about_us" data-aos="fade-up">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-12">
                <a href="{{ url('/') }}/about-us" class="d-block p-3 mb-4"><h5 class="text-white mb-0 text-center">About Us</h5></a>
                <h4 class="font-h2">We Help Our Digital Marketing And <span>SEO Development.</span></h4>
                <p class="mt-4">Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
                <ul>
                    <li><i class="fa fa-check-circle mr-2" aria-hidden="true"></i>Mattis effic iturut magna pelle ntesque sit</li>
                    <li><i class="fa fa-check-circle mr-2" aria-hidden="true"></i>Fusce enim nulla mollis eu metus in sagittis fringilla</li>
                    <li><i class="fa fa-check-circle mr-2" aria-hidden="true"></i>Sagittis enim nulla mollis eu metus in fringilla</li>
                </ul> 
            </div>
            <div class="col-xl-7 col-lg-7 col-12 d-flex about-us-right">
                <div class="about_us-1 text-center m-3 px-2 d-flex align-items-center">
                    <div>
                        <img alt="icon1" title="icon1" src="{{asset('images/digital-marketing/icon1.png')}}">
                        <h5 class="my-4">Online Marketing</h5>
                        <p class="mb-0">Design must be functional, and futionality must translated into, and futionality must translated into.</p>
                    </div>
                </div>
                <div class="about_us-1 text-center m-3 px-2 d-flex align-items-center">
                    <div>
                        <img alt="icon2" title="icon2" src="{{asset('images/digital-marketing/icon2.png')}}">
                        <h5 class="my-4">Data Analysis</h5>
                        <p>Design must be functional, and futionality must translated into, and futionality must translated into.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row about_us_icon my-4">
            <div class="col-xl-3 col-lg-3 col-6 text-center my-3">
                <img alt="icon3" title="icon3" src="{{asset('images/digital-marketing/icon3.png')}}">
                <p class="counting font-h1 my-2"> <span class="counter-count">{{ env('COUNT_COMPLETE_PROJECT') }}</span></p>
                <h5>Project Done</h5>
            </div>
            <div class="col-xl-3 col-lg-3 col-6 text-center my-3">
                <img alt="icon4" title="icon4" src="{{asset('images/digital-marketing/icon4.png')}}">
                <p class="counting font-h1 my-2"> <span class="counter-count">{{ env('COUNT_SATISFACTION') }}</span>%</p>
                <h5>Success Rate</h5>
            </div>
            <div class="col-xl-3 col-lg-3 col-6 text-center my-3">
                <img alt="icon5" title="icon5" src="{{asset('images/digital-marketing/icon5.png')}}">
                <p class="counting font-h1 my-2"> <span class="counter-count">1365</span></p>
                <h5>Awards</h5>
            </div>
            <div class="col-xl-3 col-lg-3 col-6 text-center my-3">
                <img alt="icon6" title="icon6" src="{{asset('images/digital-marketing/icon6.png')}}">
                <p class="counting font-h1 my-2"> <span class="counter-count">{{ env('COUNT_SATISFIED_CLIENT') }}</span></p>
                <h5>Happy Clients</h5>
            </div>
        </div>
    </div>--}}

    <div class="marketing-providers w-100 py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12" data-aos="fade-right">
                    <div class="d-flex">
                        <div class="div1 text-white py-5 text-center">
                            <h3 class="font-h2" >83%</h3><h6>Increase in Traffic</h6>
                        </div>
                        <div class="div2 py-5 px-3 text-center">
                            <h3 class="text-white font-h2">1#</h3><h6 class="text-white">On the keyword “mobile app development company” in Dubai</h6>
                        </div>
                    </div>
                    <p class="my-4">One of the leading providers of IT, consulting, & business process outsourcing services across the globe.</p>
                    <a href="{{ url('/') }}/contact-us" class="d-block py-2 text-white text-center">Get Started</a>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 d-flex align-items-center justify-content-center" data-aos="fade-left">
                    <img alt="screen" title="screen" src="{{asset('images/digital-marketing/screen.png')}}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="why-choose-us py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-12 why-choose-us-left">
                    <h3>Why <span> Choose Us?</span></h3>
                    <p class="my-3">We Help To Drive Measurable Growth For Your Business</p>
                    <ul>
                        <li><i class="fa fa-caret-right mr-1" aria-hidden="true"></i>No Set-Up Fee Required</li>
                        <li><i class="fa fa-caret-right mr-1" aria-hidden="true"></i>Data & Analytics Driven Approach</li>
                        <li><i class="fa fa-caret-right mr-1" aria-hidden="true"></i>Personal Audit & Competitor Analysis</li>
                        <li><i class="fa fa-caret-right mr-1" aria-hidden="true"></i>Monthly Marketing Roadmaps</li>
                    </ul>
                    <img alt="screen2" title="screen2" src="{{asset('images/digital-marketing/screen2.png')}}" class="img-fluid">
                </div>
                <div class="col-xl-7 col-lg-7 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="digital-blocks py-4 px-4 text-white mt-5">
                                <img alt="icon16" title="icon16" src="{{asset('images/digital-marketing/icon16.png')}}">
                                <h5 class="my-3">100% <br> Transparency</h5>
                                <p class="mb-0">Get to see what you are paying for, as we certify a complete transparent process with no random assurances.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="digital-blocks digital-blocks-even py-4 px-4 text-white ">
                                <img alt="icon17" title="icon17" src="{{asset('images/digital-marketing/icon17.png')}}">
                                <h5 class="my-3">Campaign <br> Optimization</h5>
                                <p class="mb-0">Perfect-tune your promotions with biweekly reviews & monthly reports to improve customer lifetime value and productivity.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="digital-blocks py-4 px-4 text-white mt-5">
                                <img alt="icon18" title="icon18" src="{{asset('images/digital-marketing/icon18.png')}}">
                                <h5 class="my-3">Dedicated Project <br> Manager</h5>
                                <p class="mb-0">We have a cohesive group of Certified Digital Marketing Professionals at that have the aptitude and knowledge to meet your digital marketing requirements.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="digital-blocks digital-blocks-even digital-block-odd py-4 px-4 text-white">
                                <img alt="icon19" title="icon19" src="{{asset('images/digital-marketing/icon19.png')}}">
                                <h5 class="my-3">Flexible <br> Pricing</h5>
                                <p class="mb-0">We create digital marketing plans that are tailored to your budget to guarantee you get the most bang for your buck.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-services py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in">
                    <h3 class="font-h2">Our<span> Services</span></h3>
                    <h5 class="mt-2">Our Best Digital Marketing Services</h5>
                </div>
            </div>
            <div class="row our-services-shade">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="text-center mt-5">
                        <img alt="Digital Marketing" title="Digital Marketing" src="{{ env('APP_CDN_URL') }}/images/digital-marketing/icon7.png">
                        <h5 class="my-4">Digital Marketing</h5>
                        <p class="mb-0 mx-auto">After assessing what your company needs for growth on various internet platforms we can appropriately plan Digital Marketing Strategies.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="text-center mt-5">
                        <img alt="Content Marketing" title="Content Marketing" src="{{ env('APP_CDN_URL') }}/images/digital-marketing/icon8.png">
                        <h5 class="my-4">Content Marketing</h5>
                        <p class="mb-0 mx-auto">We create a spectrum of B2B content sections, using a spectrum of different performance methods, including Articles, News Pieces, Infographics, How-to-Guides, 
                        Videos, etc., also provide additional content and communication mechanisms for our customers. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="text-center mt-5">
                        <img alt="Market Analysis" title="Market Analysis" src="{{ env('APP_CDN_URL') }}/images/digital-marketing/icon9.png">
                        <h5 class="my-4">Market Analysis</h5>
                        <p class="mb-0 mx-auto">Conservative market analysis around your function and sections of services for getting local competitors spending in PPC marketing. 
                            We dissect hunt terms, regularly search volumes, target earnings, and pretensions depending on the business.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="text-center mt-5">
                        <img alt="Email Marketing" title="Email Marketing" src="{{ env('APP_CDN_URL') }}/images/digital-marketing/icon10.png">
                        <h5 class="my-4">Email Marketing</h5>
                        <p class="mb-0 mx-auto">We specialize in designing interactive and powerful email templates using high-level programming techniques. Deorwine Infotech provides the best email marketing 
                        services to our customers based on their requirements.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="text-center mt-5">
                        <img alt="Link Building" title="Link Building" src="{{ env('APP_CDN_URL') }}/images/digital-marketing/icon11.png">
                        <h5 class="my-4">Link Building</h5>
                        <p class="mb-0 mx-auto">Well link building is vital because it is a main factor in how Google ranks web pages Remember, link structure is authoritative in achieving high organic hunt rankings.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="text-center mt-5">
                        <img alt="Quick Support" title="Quick Support" src="{{ env('APP_CDN_URL') }}/images/digital-marketing/icon12.png">
                        <h5 class="my-4">Quick Support</h5>
                        <p class="mb-0 mx-auto">We truly believe that every organization needs more than just great tech or an extra helping hand to make their goals a reality.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="best-seo about_us py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 best-seo-left d-flex align-items-lg-center">
                    <img alt="We’ve proved to be best in Digital marketing" title="We’ve proved to be best in Digital marketing" src="{{ env('APP_CDN_URL') }}/images/digital-marketing/screen3.png" class="img-fluid">
                </div>
                <div class="col-lg-6 col-12 mt-4 best-seo-right">
                <h4 class="font-h2">We’ve proved to be best in  <span>Digital marketing</span></h4>
                <p class="mt-4 mb-1">We understand how critical it is to have a marketing strategy in place, whether you're a little business, 
                    a major multinational, or anywhere in between. Our "marketers" enjoy getting to know your company so that you may think of 
                    us as an extension of your own team, but with a thorough understanding of "how" and "where" to market it.</p>
                <ul>
                    <li><i class="fa fa-check-circle mr-2" aria-hidden="true"></i>Achieving More Targeted customer.</li>
                    <li><i class="fa fa-check-circle mr-2" aria-hidden="true"></i>High Conversion Rate.</li>
                    <li><i class="fa fa-check-circle mr-2" aria-hidden="true"></i>High ROI at Lower Cost.</li>
                    <li><i class="fa fa-check-circle mr-2" aria-hidden="true"></i>Enables Outdoing Competitors.</li>
                    <li><i class="fa fa-check-circle mr-2" aria-hidden="true"></i>Helps You Enhance You CRM.</li>
                    <li><i class="fa fa-check-circle mr-2" aria-hidden="true"></i>Allow for Efficient Tracking For Future Campaigns.</li>
                    <li><i class="fa fa-check-circle mr-2" aria-hidden="true"></i>You Can Reach Global Being Local.</li>
                </ul> 
                </div>
            </div>
        </div>
    </div>

    <div class="our-work py-5"data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in">
                    <h3 class="font-h2">Our <span>Work</span></h3>
                    <h5>Three Step For Starting Working Process</h5>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="work-block work-block-1 p-5 d-flex align-items-center justify-content-center mx-auto mt-5 mb-4">
                        <img alt="Research Project" title="Research Project" src="{{ env('APP_CDN_URL') }}/images/digital-marketing/icon13.png" class="m-auto d-block">
                    </div>
                    <div class="text-center">
                        <h4 class="mb-3">Research Project</h4>
                        <p>In this phase we do kind of architectural analysis and background check and plan for the process and the way we need to reuse effects.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="work-block work-block-2 p-5 d-flex align-items-center justify-content-center mx-auto mt-5 mb-4">
                        <img alt="Targeting" title="Targeting" src="{{ env('APP_CDN_URL') }}/images/digital-marketing/icon14.png" class="m-auto d-block">
                    </div>
                    <div class="text-center">
                        <h4 class="mb-3">Targeting</h4>
                        <p>Targeting forte clients who are looking for your products or your services.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="work-block work-block-3 p-5 d-flex align-items-center justify-content-center mx-auto mt-5 mb-4">
                        <img alt="Result" title="Result" src="{{ env('APP_CDN_URL') }}/images/digital-marketing/icon15.png" class="m-auto d-block">
                    </div>
                    <div class="text-center">
                        <h4 class="mb-3">Result</h4>
                        <p>As the Phrase says ‘you reep what you sow’, so the result will be exceptional the way it is planned and implemented.</p>
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