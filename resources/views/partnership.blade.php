@extends('layout.app')

@section('content')


<div class="partnership-banner d-flex justify-content-center align-items-center" style="background: url('{{ env('APP_CDN_URL') }}/images/partnership/partnership-bannernew.webp') no-repeat,
    linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7))">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in" style="overflow-x: visible">
                    <h1>To Move<span> Fast</span>&comma; Work Together</span></h1>
                    <p>Become a Deorwine Infotech partner to operate your own business while we take care of the delivery on us.</p>
                    <div class="quote-btn"> <a href="{{ url('/') }}/contact-us">Partner With Us</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row py-5">
            <div class="col-xl-6 col-lg-6 col-md-12 col-12 partner-business-left">
                <img alt="own-business" title="own-business" src="{{ env('APP_CDN_URL') }}/images/partnership/partnership-business.webp" class="img-fluid">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-12 partner-business-right">
                <h2>Set Up Your Own Independents<span> Business</span></h2>
                <p>You may market our company anywhere in the globe and earn a fee if you bring us sales (decided upon mutually)</p>
                <p>We will be serving you as an extension in getting the project produced.</p>
                <p>Working in combination with your process deliverables, departmental communication, and project supplies. We will be selling strong solutions that come with the freedom to adapt and integrate.</p>
                <!-- <div class="quote-btn"> <a href="#">Start Earning</a></div> -->
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-12 partner-business-right pt-5 my-4" data-aos="fade-right"
                data-aos-easing="ease-in-sine" style="overflow-x: visible">
                <h3 class="font-h2">Integrated <span>Technology</span> Suite</h3>
                <p>White-label, SaaS, custom-built, and enterprise solution combined</p>
                <p>Provide your clients with an industry-leading technology stack for any size and kind of organisation.</p>
                <p>We assist you in hiring dedicated technology developers that are focused on your demands in order to achieve your business objectives.</p>
                <!-- <div class="quote-btn"> <a href="javascript:void(0)">Start Selling</a></div> -->
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-12 partner-business-left pt-5 my-4" data-aos="fade-left"
                data-aos-easing="ease-in-sine">
                <img alt="compersive-technology" title="compersive-technology" src="{{ env('APP_CDN_URL') }}/images/partnership/compersive-technology.webp" class="img-fluid float-right">
            </div>
        </div>
    </div>
    <div class="partner-center-banner py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <div class="center-banner">
                    <h4 class="font-h2">Your Growth Is <span>Our Success</span></h4>
                        <p>Irrespective of your company standards, Deorwine Infotech can help you get the Desired results</p>
                    </div>
                    <div class="quote-btn order-1"> <a href="{{ url('/') }}/contact-us">Partner With Us</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" data-aos="fade-up">
        <div class="row py-5 partner-with-deorwine text-center">
            <div class="col-12">
            <h4 class="font-h2">Why Partner With <span>Deorwine Infotech?</span></h4>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="business-card">
                    <img alt="business-solutions" title="business-solutions" src="{{ env('APP_CDN_URL') }}/images/partner/business-solutions.png">
                    <h4>Solution For Every Business Vertical</h4>
                    <p>From on-demand food, grocery, home services & healthcare to taxi booking, we’ve got you covered.
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="business-card">
                    <img alt="technical-support" title="technical-support" src="{{ env('APP_CDN_URL') }}/images/partner/technical-support.png">
                    <h4>Dedicated 24&#42;7 Support</h4>
                    <p>Get hands-on support on both business and technical specialized issues with our experts by your side 24&#42;7
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="business-card">
                    <img alt="Selling Made" title="Selling Made" src="{{ env('APP_CDN_URL') }}/images/partner/Selling Made.png">
                    <h4>Selling Made Simpler</h4>
                    <p>Influence from our brand value & trust gained over the last 6 years, developing 5000 Apps with over 200M backing raised</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="business-card">
                    <img alt="selling-expert" title="selling-expert" src="{{ env('APP_CDN_URL') }}/images/partner/selling-expert.png">
                    <h4>Become A Selling Expert</h4>
                    <p>Get trained in the art of dealing & access to curated content aimed towards selling with our times of experience</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="business-card">
                    <img alt="web-branding" title="web-branding" src="{{ env('APP_CDN_URL') }}/images/partner/web-branding.png">
                    <h4>Get A Branded Website</h4>
                    <p>Boost your brand integrity with a substantiated ingrained website designed by our experts, simply for you</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                <div class="business-card">
                    <img alt="promotions" title="promotions" src="{{ env('APP_CDN_URL') }}/images/partner/promotions.png">
                    <h4>Co-Marketing & Promotions</h4>
                    <p>Benefit from targeted marketing & elevations for your region through common enterprise by Deorwine Infotech</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5" data-aos="fade-up">
        <div class="network" style="background: url('{{ env('APP_CDN_URL') }}/images/partnership/bg-partner.webp'), no-repeat">
            <div class="row">
                <div class="col-xl-6 col-lg-7 d-flex align-items-center network-content">
                    <div>
                    <h4 class="font-h2">Join <span>Deorwine Partnership</span> Network & Start Earning More</h4>
                        <p>We believe in using the value of business by bringing resources and plans together on a single platform.</p>
                        <!-- <div class="quote-btn" data-aos="fade-right" style="overflow-x: visible"> <a href="javascript:void(0)">Partner
                                With Us</a></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="client-partner py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 client-partner-title text-center" data-aos="zoom-in">
                    <p>clients</p>
                    <h4 class="font-h2">We&rsquo;ve Made These <span>Brands</span> Standout</h4>
                </div>
                <ul class="col-xl-12 d-flex justify-content-between mb-5">
                    <li><img alt="bounty" title="bounty" src="{{ env('APP_CDN_URL') }}/images/clients/bounty.png"></li>
                    <li><img alt="adidas" title="adidas" src="{{ env('APP_CDN_URL') }}/images/clients/adidas.png"></li>
                    <li><img alt="burger-king" title="burger-king" src="{{ env('APP_CDN_URL') }}/images/clients/burger-king.png"></li>
                    <li><img alt="fedex" title="fedex" src="{{ env('APP_CDN_URL') }}/images/clients/fedex.png"></li>
                    <li><img alt="kfc" title="kfc" src="{{ env('APP_CDN_URL') }}/images/clients/kfc.png"></li>
                    <li><img alt="fila" title="fila" src="{{ env('APP_CDN_URL') }}/images/clients/fila.png"></li>
                    <li><img alt="clorox" title="clorox" src="{{ env('APP_CDN_URL') }}/images/clients/clorox.png"></li>
                </ul>
                 <ul class="col-xl-12 d-flex justify-content-between mb-5">
                <li><img alt="bounty" title="bounty" src="{{ env('APP_CDN_URL') }}/images/clients/bounty.png"></li>
                <li><img alt="adidas" title="adidas" src="{{ env('APP_CDN_URL') }}/images/clients/adidas.png"></li>
                <li><img alt="burger-king" title="burger-king" src="{{ env('APP_CDN_URL') }}/images/clients/burger-king.png"></li>
                <li><img alt="fedex" title="fedex" src="{{ env('APP_CDN_URL') }}/images/clients/fedex.png"></li>
                <li><img alt="kfc" title="kfc" src="{{ env('APP_CDN_URL') }}/images/clients/kfc.png"></li>
                <li><img alt="fila" title="fila" src="{{ env('APP_CDN_URL') }}/images/clients/fila.png"></li>
                <li><img alt="clorox" title="clorox" src="{{ env('APP_CDN_URL') }}/images/clients/clorox.png"></li>
                </ul>
                <ul class="col-xl-12 d-flex justify-content-between">
                <li><img alt="bounty" title="bounty" src="{{ env('APP_CDN_URL') }}/images/clients/bounty.png"></li>
                <li><img alt="adidas" title="adidas" src="{{ env('APP_CDN_URL') }}/images/clients/adidas.png"></li>
                <li><img alt="burger-king" title="burger-king" src="{{ env('APP_CDN_URL') }}/images/clients/burger-king.png"></li>
                <li><img alt="fedex" title="fedex" src="{{ env('APP_CDN_URL') }}/images/clients/fedex.png"></li>
                <li><img alt="kfc" title="kfc" src="{{ env('APP_CDN_URL') }}/images/clients/kfc.png"></li>
                <li><img alt="fila" title="fila" src="{{ env('APP_CDN_URL') }}/images/clients/fila.png"></li>
                <li><img alt="clorox" title="clorox" src="{{ env('APP_CDN_URL') }}/images/clients/clorox.png"></li>
                </ul>
            </div>
        </div>
    </div>--}}

@include('components.testimonials')
<div id="blog-container"></div>
@endsection 
@push('scripts')
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<script src="{{asset('js/aos.js')}}"></script>
    <script>
        AOS.init({
            delay: 50,
            duration: 750,
        })
    </script>
@endpush