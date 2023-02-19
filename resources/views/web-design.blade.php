@extends('layout.app')

@section('content')

<div class="web-design-banner d-flex align-items-center" style="background: url('{{ env('APP_CDN_URL') }}/images/web-designing/designing-bannernew.webp') no-repeat">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-12 d-flex align-items-center" data-aos="zoom-in" style="overflow-x: visible;">
                    <div>
                        <h1 class="p-0">Expert Designers to design your Brand.</h1>
                        <h5 class="text-white">Deorwine provide always best solution for your website design make responsive and robust.</h5>
                        <a href="javascript:void(0)" class="btn-primary web-design-btn" data-toggle="modal" data-target="#exampleModalPreview">Get a free quote</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 col-12 d-flex justify-content-center align-items-center" data-aos="fade-left">
                    {{--<img alt="image" title="image" src="{{asset('images/web-designing/hero-image.png')}}" class="img-fluid">--}}
                </div>
            </div>
        </div>
    </div>

    <div class="free-consultation" >
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 consulting-left">
                    <h2>Responsive <br><span>Web Design</span> Company</h2>
                    <p>Deorwine Infotech creates your websites with the most up-to-date bootstrap technology to ensure 
                       that they are compatible with all platforms, including smartphones, iPhones, tablets, laptops, 
                       and, of course, computers. Websites automatically modify their structure to multiple screen resolutions, 
                       making them incredibly user-friendly. Apart from that, these sites have been thoroughly tested on a variety 
                       of browsers, including Google Chrome, Mozilla Firefox, Internet Explorer, Safari, and others.</p>
                    <p>"Google revealed algorithm changes that will have a "substantial impact" on mobile search results for mobile 
                        searchers around the world."</p>
                    <p><ul style="padding-left: 1rem"><li style="list-style: disc">Make your website accessible to everyone.</li>
                    <li style="list-style: disc">App to Save Time and Money.</li>
                    <li style="list-style: disc">Increased Conversion Rate by Providing Users with a Positive Experience.</li>
                    <li style="list-style: disc">It's a Google favourite.</li></ul></p>
                </div>
                @include('components.freeconsultation')
            </div>
        </div>
    </div>
    <div class="web-design-services py-5 w-100" style="background-color: #edf1f773;">
        <div class="container">
            <div class="row">
                <div class="col-12 title-design text-center" data-aos="zoom-in">
                    <h3 class="font-h2">Creative <span>Web Designing</span> Services</h3>
                    <p class="mx-auto mt-3">Web design includes disciplines in the creation and maintenance of website design. Deorwine Infotech is a 
                    leader in both creativity and innovation. Our extensive portfolio distinguishes us as the premier website design firm in Jaipur.</p>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-1 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Logo Design</h5>
                        <p class="mb-0">A forward-thinking Indian design studio that creates strong, integrated brand identities that stand out.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-2 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Website Design</h5>
                        <p class="mb-0">Make an Outstanding difference to your business, product or service with our creative web design services.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-3 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Mobile App Design</h5>
                        <p class="mb-0">Our apps stand out in the digital age because of their intuitive designs and captivating user experiences.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-4 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Animated Video</h5>
                        <p class="mb-0">We can help in creating Simple, animated videos which are required for your products and services to effectively engage your audience.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-5 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Responsive Design</h5>
                        <p class="mb-0">Deorwine can assist with the creation of highly functioning and Responsive websites that run on a variety of computers and deliver smart mobile app experiences.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-6 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Graphic Design</h5>
                        <p class="mb-0">You can rely on our designers since we create distinctive and appealing graphics for a variety of industries, including internet professionals, start-ups, medium and small enterprises, and huge corporations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="Design-Features py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 d-flex align-items-center">
                    <div class="features-left">
                        <h6>Web Design Features</h6>
                        <h3 class="font-h2 my-4">All our websites can offer a wide variety of useful features</h3>
                    </div>
                </div>
                <div class="col-lg-8 col-12 features-right">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-6 text-center">
                            <div>
                                <span class="d-flex justify-content-center align-items-center mx-auto">
                                    <img alt="Responsive design" title="Responsive design" src="{{ env('APP_CDN_URL') }}/images/web-designing/feature1.png">
                                </span>
                                <h6 class="mt-3 mb-4">Responsive design</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-6 text-center">
                            <div>
                                <span class="d-flex justify-content-center align-items-center mx-auto">
                                    <img alt="Powerful search" title="Powerful search" src="{{ env('APP_CDN_URL') }}/images/web-designing/feature-2.png">
                                </span>
                                <h6 class="mt-3 mb-4">Powerful search</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-6 text-center">
                            <div>
                                <span class="d-flex justify-content-center align-items-center mx-auto">
                                    <img alt="Cool animations" title="Cool animations" src="{{ env('APP_CDN_URL') }}/images/web-designing/feature-3.png">
                                </span>
                                <h6 class="mt-3 mb-4">Cool animations</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-6 text-center">
                            <div>
                                <span class="d-flex justify-content-center align-items-center mx-auto">
                                    <img alt="Customization" title="Customization" src="{{ env('APP_CDN_URL') }}/images/web-designing/feature-4.png">
                                </span>
                                <h6 class="mt-3 mb-4">Customization</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-6 text-center">
                                <span class="d-flex justify-content-center      align-items-center mx-auto">
                                    <img alt="SEO friendly code" title="SEO friendly code" src="{{ env('APP_CDN_URL') }}/images/web-designing/feature-5.png">
                                </span>
                            <h6 class="mt-3 mb-4">SEO friendly code</h6>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-6 text-center">
                               <span class="d-flex justify-content-center      align-items-center mx-auto">
                                    <img alt="Flexible UI" title="Flexible UI" src="{{ env('APP_CDN_URL') }}/images/web-designing/feature-6.png">
                                </span>
                            <h6 class="mt-3 mb-4">Flexible UI</h6>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-6 text-center">
                                <span class="d-flex justify-content-center      align-items-center mx-auto">
                                    <img alt="Varied layouts" title="Varied layouts" src="{{ env('APP_CDN_URL') }}/images/web-designing/feature-7.png">
                                </span>
                            <h6 class="mt-3 mb-4">Varied layouts</h6>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-6 text-center">
                                <span class="d-flex justify-content-center      align-items-center mx-auto">
                                    <img alt="Parallax" title="Parallax" src="{{ env('APP_CDN_URL') }}/images/web-designing/feature-8.png">
                                </span>
                            <h6 class="mt-3 mb-4">Parallax</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="creative-team py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-flex align-items-lg-center justify-content-md-center">
                    <img alt="creative web agency" title="creative web agency" src="{{ env('APP_CDN_URL') }}/images/web-designing/creative-web-agency.webp" class="img-fluid">
                </div>
                <div class="col-lg-7">
                    <h4>"Our <span>creative team</span> knows how to develop an attractive and highly efficient website that covers your needs and attracts clients."</h4>
                    <p class="mt-4">It's not about adding colour to your life when it comes to design. It must be strategic in order to have a significant impact. 
                        You'll need a good aesthetic setup to make your visuals stand out and assist you get more conversions.</p>
                    <p class="mt-4">This is why we've come to assist you. Deorwine is much more than a design firm. We collaborate with specialists who will dig 
                        deep and determine the best design for your company in order to help you get the most out of it. Our high-quality graphic design services 
                        will never let you down, ensuring that your company achieves the finest possible results.</p>
                    <a href="javascript:void(0)" class="btn-primary web-design-btn" data-toggle="modal" data-target="#exampleModalPreview">Get A Free Quote</a>
                </div>
            </div>
        </div>
    </div>

    <div class="technology-team py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12" data-aos="zoom-in">
                   <h3>Integrating Cutting-edge <span>Web Technologies</span></h3>
                    <p>Being a leading mobile app development agency we put prominence on the improvement of our technological expertise. Apart from having strong skill in stable 
                       technologies, our team of mobility experts keep exploring initial ones parallelly. Take a look at the core technologies our mobile app development team holds 
                       inclusive expertise in:</p>
                </div>
            </div>
            <div class="row py-5 no-gutters">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <div class="technology-team-block">
                        <img alt="HTML5" title="HTML5" src="{{ env('APP_CDN_URL') }}/images/web-designing/html.png">
                        <h5 class="pt-4">HTML5</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <div class="technology-team-block">
                        <img alt="CSS3" title="CSS3" src="{{ env('APP_CDN_URL') }}/images/web-designing/CSS3.png">
                        <h5 class="pt-4">CSS3</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <div class="technology-team-block">
                        <img alt="SASS" title="SASS" src="{{ env('APP_CDN_URL') }}/images/web-designing/sass-logo.png">
                        <h5 class="pt-4">SASS</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <div class="technology-team-block">
                        <img alt="Bootstrap" title="Bootstrap" src="{{ env('APP_CDN_URL') }}/images/web-designing/bootstrap.png">
                        <h5 class="pt-4">Bootstrap</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <div class="technology-team-block">
                        <img alt="Jquery" title="Jquery" src="{{ env('APP_CDN_URL') }}/images/web-designing/jquery.png">
                        <h5 class="pt-4">Jquery</h5>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <a href="{{ url('/') }}/angular-js-development" target="_blank"><div class="technology-team-block">
                        <img alt="Angular JS" title="Angular JS" src="{{ env('APP_CDN_URL') }}/images/web-designing/angular.png">
                        <h5 class="pt-4">Angular JS</h5>
                    </div></a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <a href="{{ url('/') }}/javascript-development" target="_blank"><div class="technology-team-block">
                        <img alt="Javascript" title="Javascript" src="{{ env('APP_CDN_URL') }}/images/web-designing/javascript.png">
                        <h5 class="pt-4">Javascript</h5>
                    </div></a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-0">
                    <a href="{{ url('/') }}/react-js-development" target="_blank"><div class="technology-team-block">
                        <img alt="React Js" title="React Js" src="{{ env('APP_CDN_URL') }}/images/web-development/physics-ico.png">
                        <h5 class="pt-4">React Js</h5>
                    </div></a>
                </div>
            </div>
        </div>
    </div>

    <div class="get-a-quote py-3" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 d-flex justify-content-between quote-mr">
                    <img alt="vector" title="vector" src="{{ env('APP_CDN_URL') }}/images/quote-vector.svg" class="mr-4">
                    <div class="mr-auto quote-content">
                        <h4>Have An App Idea?</h4>
                        <p>Convert Your App Idea Into a Profitable Business.</p>
                    </div>
                    <div class="quote-btn"> <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalPreview">Get A Free Quote <img alt="rightarrow" title="rightarrow" src="{{asset('images/right-arrow(2).png')}}" class="ml-2" aria-hidden="true"></a></div>
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
