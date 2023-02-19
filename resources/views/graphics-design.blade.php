@extends('layout.app')

@section('content')

<div class="bg-services d-flex align-items-center text-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-7 my-auto d-block" data-aos="zoom-in" style="overflow-x: visible">
                <h1 class="pt-1"><img src="{{ env('APP_CDN_URL') }}/images/technology/graphic.png" class="services-image" alt="Graphic" title="Graphic"> Graphics Design</h1>
                    <p class="pt-2 pb-3">Designing graphics that are artistically made to represent your business.</p>
                    <a href="javascript:void(0)" class="btn-primary mb-5" data-toggle="modal" data-target="#exampleModalPreview">Get A Free Quote</a>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5 px-0 banner-right-img" data-aos="fade-left">
                    <img alt="Graphics Design" title="Graphics Design" src="{{ env('APP_CDN_URL') }}/images/technology/graphic-design-banner.webp" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="technology-therory pb-5" data-aos="fade-up">
        <div class="container">
            <div class="row react-col-rev">
                <div class="col-xl-6 col-lg-6 col-md-12" data-aos="fade-right">
                    <img alt="Graphics Design Company" title="Graphics Design Company" src="{{ env('APP_CDN_URL') }}/images/technology/tech-react-img.png" class="img-fluid">
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12" data-aos="fade-left" style="overflow-x: visible">
                    <h2 class="pt-1">Graphics Design <span>Company</span></h2>
                    <p class="pt-3">Deorwine Infotech, a group of professional brand instigator with the skills, desire, 
                        and knowledge to work with customers of any size. But it is "Our Results" that distinguishes us 
                        from the many other graphic design firms in India. Deorwine Infotech isn't a one-man show; it's a 
                        journey taken by our dedicated team. At Deorwine, we all have a vision and a voice, and we're all 
                        concerned about and focused on our clients. As much as feasible, we want to provide the greatest visual, 
                        web, and brand design results.</p>
                    <p class="pb-3">Graphics designing is the part that’s responsible for building the branding, identity, personality, 
                        and attraction of a company, which makes designers important to company success.</p>
                    <p class="pb-3">The company's brand represents a commitment to its customers. We want to make an unforgettable, 
                        thought-provoking, and thrilling first impression. We are specialists in this field because of our common 
                        excitement and down-to-earth approach. We employ customised planning methods and considerate considerations.</p>    
                    <a href="javascript:void(0)" class="btn-primary mb-5" data-toggle="modal" data-target="#exampleModalPreview">Get A Free Quote</a>
                </div>
            </div>
        </div>
    </div>

    <div class="web-design-services py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                <h3 class="pt-1 text-center font-h2 mb-4" data-aos="zoom-in">Graphic Design <span>Services</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-1 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Logo Design</h5>
                        <p class="mb-0">You only develop one chance to create a good first impression, so make it count. As Your company's identity is signified through a logo. A logo is an important part of every business, whether it's a startup or a large corporation. We provide personalised logo design services for startups, mid-sized businesses, and large corporations.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-2 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Designing for Social Media</h5>
                        <p class="mb-0">Our talented designers provide customised social media design solutions to help you increase your brand's visibility across different social media platforms and create a strong link with your consumers.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-3 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">UX and UI Design for Websites</h5>
                        <p class="mb-0">You may win the hearts of several new and existing audiences with our user-centered graphic design solutions. We produce amazing visual designs with the finest user experience to increase visitor engagement.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-4 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Designing a Mobile App</h5>
                        <p class="mb-0">We create appealing and user-friendly mobile app designs that provide an engaging platform for your clients and help you expand your online company.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-5 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Designing a Presentation</h5>
                        <p class="mb-0">Your regular presentation is given a professional look by our imaginative presentation designers. On your presentation slides, we create visual drawings, animations, infographics, motion graphics, and more to keep your audience's attention.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="design-cards px-3 pb-3 my-4">
                        <div class="design-icons-6 d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <h5 class="my-3">Designing an E-Book</h5>
                        <p class="mb-0">We specialise in creating quality e-books including text, audio, image, and video as well as other features. Our designers develop e-books that can be read on a variety of devices, including web browsers, Kindle, iOS, Blackberry, Sony Reader, and others.</p>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="technology-choose py-5" data-aos="fade-up">
        <div class="container">
            <div class="row react-col-rev">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <img alt="Why Choose Deorwine for Graphics Designing" title="Why Choose Deorwine for Graphics Designing" src="{{ env('APP_CDN_URL') }}/images/technology/tech-react-choose.png" class="img-fluid" data-aos="fade-right">
                    <div class="text-bg p-3 mt-3">
                        <p data-aos="zoom-in" data-aos-delay="0">Deorwine provides a high skilled development team with flexible services. And we have the reasons to choose us for your development.</p>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12">
                <h3 class="font-h2 pt-3" data-aos="zoom-in">Why Choose Deorwine for <span>Graphics Designing</span></h3>
                    <p>Upgrade your brand with graphic design that is creative, responsive, and pure for you. From a custom logo design to a comprehensive 
                        branding renovate, our graphic design skills will blow your thought.</p>
                    <ul class="pt-3">
                        <li>We present qualified graphic web designers who exceed in offering user-friendly and strong personalized graphic design services to our clients.</li>
                        <li>Our Deorwine group stays popular with the quickly evolving marketplace. They adapt and advance very quickly.</li>
                        <li>Our graphic designers are recognized for their creativity and imagination.</li>
                        <li>We provide best graphic designers to global clients on adjustable price and flexible design.</li>
                        <li>Consistently we will explain to you what we've been up to by issuing status statements.</li>
                        <li>Remove the inscrutability from execution and assured that due times will be satisfied, correspondence will be replied, and results will be achieved.</li>
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
                        <p>Convert Your App Idea Into a Profitable Business.</p>
                    </div>
                    <div class="quote-btn" data-aos="fade-right" data-toggle="modal" data-target="#exampleModalPreview"> <a href="javascript:void(0)">Get A Free Quote
                    <img alt="right-arrow" title="right-arrow" src="{{asset('images/right-arrow(2).png')}}" aria-hidden="true"></a></div>
                </div>
            </div>
        </div>
    </div>

    @include('components.service-technology')

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