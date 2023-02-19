@extends('layout.app')

@section('content')

<div class="banner-slide mobileapp d-flex align-items-center cms-banner py-0" style="background: url('{{ env('APP_CDN_URL') }}/images/cms/cms-banner.webp') no-repeat">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7 col-12 react-banner-text my-auto" data-aos="zoom-in" style="overflow-x:visible;">
                    <h3 class="pt-0">High Quality Services</h3>
                    <h1>CMS Development Company</h1>
                    <p class="mb-0 pb-4">We have been responsible for tech-aspirants and innovation-led businesses to scale
                        and grow into big enterprises with our value-defining mobile app development services.</p>
                    <a href="javascript:void(0)" class="btn-primary" data-toggle="modal" data-target="#exampleModalPreview">Get A Free Quote</a>
                </div>
            </div>
        </div>
    </div>

    <div class="free-consultation">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 consulting-left">
                    <h2>Responsive<span> Web Design</span> <br>Services Company</h2>
                    <p>Our qualified team of mobile app development experts knows how to take up disruptive ideas and
                        turn them into impactful solutions. We can deliver your requirements with great accuracy
                        perfectly meeting your equation of cost and time. Our established processes and streamlined
                        programs sync in with the best resources and work arrangements to deliver the most empowering
                        mobile app solutions to best serve your requirements. As we attempt to bring you the most
                        eligible and practical solutions built on trending programming frameworks and platforms like
                        Flutter, Swift, React Native, Kotlin, Java, and HTML5.</p>
                    <p>As an innovation-driven app development company, we are all-equipped and sourced to work on the
                        latest versions of these technologies to build full-stack IoT, AI, ML, Blockchain, AR/VR, and
                        Cloud-powered applications on iOS, Android, and cross-platform operating systems.</p>
                </div>
                @include('components.freeconsultation')
            </div>
        </div>
    </div>

    <div class="cms-range">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 cms-range-left mb-5">
                    <h5 class="mb-0">Easying the curation and management of content-based websites for businesses of any scale.</h5>
                    <h3 class="my-3">Managing your content is now in your hands!</h3>
                    <p>As the name suggests, CMS Development is the most substantial software application which enables a user to create, edit, organize and publish the digital content benefiting a vast group of users from diverse verticals. Custom CMS Website Development, with its ingenious features like SEO friendliness, the evident bifurcation between the design and content, ease of coding, intuitive user interface, swift development process and many more makes the process of CMS web development simple and assured.</p>
                </div>
                <div class="col-lg-6 col-12 cms-range-right">
                    <h3 class="font-h3">Our range of CMS Web Development services offer</h3>
                    <ul>
                        <li class="d-flex align-items-baseline"><i class="fa fa-check-circle mr-2" aria-hidden="true"></i><p>User-friendliness</p></li>
                        <li class="d-flex align-items-baseline"><i class="fa fa-check-circle mr-2" aria-hidden="true"></i><p>The ease of maintenance</p></li>
                        <li class="d-flex align-items-baseline"><i class="fa fa-check-circle mr-2" aria-hidden="true"></i><p>Seamless integration of latest updates</p></li>
                        <li class="d-flex align-items-baseline"><i class="fa fa-check-circle mr-2" aria-hidden="true"></i><p>Cost-efficiency</p></li>
                        <li class="d-flex align-items-baseline"><i class="fa fa-check-circle mr-2" aria-hidden="true"></i><p>Scalable Functionality with numerous plugins and extensions</p></li>
                        <li class="d-flex align-items-baseline"><i class="fa fa-check-circle mr-2" aria-hidden="true"></i><p>SEO-friendly features</p></li>
                    </ul> 
                </div>
                <div class="col-lg-6">
                    <img alt="range" title="range" src="{{asset('images/cms/range.png')}}" class="img-fluid">
                </div>
                <div class="col-lg-6 cms-solution">
                    <h3 class="font-h2 mb-4">Getting your CMS solution is simpler and faster with us!</h3>
                    <p class="mb-5">As a pioneer in providing astounding and resilient end-to-end IT deliverables, we shoulder the responsibility to provide cutting- edge CMS Web Development Services to clients. We follow a result-driven model for delivering an optimized solution by the current business landscape to a client which is based on the actual feedback. Backed by the work-flow centric platform, our team of innovators has been showcasing a stellar performance in orchestrating Enterprise CMS Development solutions that are best suited for the client’s business and requirements.</p>
                    <a href="{{ url('/') }}/contact-us" class="btn-primary">Let's Grow Together</a>
                </div>
            </div>
        </div>
    </div>

    <div class="cms-needs py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="font-h2 mb-4">Custom <span>CMS Development</span> is Particularly Tailored for Your Needs</h3>
                    <p>In a world of smartphones, the essential key to captivating your audience is the content – the master of programs. Customers demand for short, brief content (Custom made), that engages users and helps them in making buying decisions is on the rise.</p>
                    <p>Users are constantly on the look-out of the great content; content that gets a higher level of exposure in social media networks and ranks highest in the Google. In order to gain good marketing strategies, content must be supported with well-designed Content Management System.</p>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="cms-card py-4 px-3 mt-4">
                        <img alt="cms" title="cms" src="{{asset('images/cms/cms4.png')}}">
                        <h6 class="my-3">WordPress Development</h6>
                        <p class="mb-0">An another important aspect of CMS. 20% of CMS based websites are powered by WordPress. Because CMS is an open source it is used for creating numerous types of websites, portals & blogs.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="cms-card py-4 px-3 mt-4">
                        <img alt="cms" title="cms" src="{{asset('images/cms/cms2.png')}}">
                        <h6 class="my-3">Drupal Development</h6>
                       <p class="mb-0">To get the most out of your Drupal Solutions we work through the whole process from design, development, maintenance, and support, to marketing and digital Strategies.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="cms-card py-4 px-3 mt-4">
                        <img alt="cms" title="cms" src="{{asset('images/cms/cms3.png')}}">
                        <h6 class="my-3">Shopify Development</h6>
                       <p class="mb-0">To get the most out of your Drupal Solutions we work through the whole process from design, development, maintenance, and support, to marketing and digital Strategies.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="cms-card py-4 px-3 mt-4">
                        <img alt="cms" title="cms" src="{{asset('images/cms/cms1.png')}}">
                        <h6 class="my-3">Magento Development</h6>
                       <p class="mb-0">To get the most out of your Drupal Solutions we work through the whole process from design, development, maintenance, and support, to marketing and digital Strategies.</p>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

    <div class="cms-web-dev py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="font-h2 mb-4">Why Choose <span>Deorwine</span> For CMS Web Development?</h3>
                    <p class="mx-auto">Our CMS development services not only solve complex problems of your business, but also deliver better standing in the market compared to your competitors. Here, we will not give you only 1 reason to hire us, but we will give 8 reasons to hire Deorwine Infotech for your CMS development needs.</p>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 cms-dev-block">
                    <span class="d-flex align-items-center justify-content-center p-3 mx-auto my-4">
                        <img alt="cms" title="cms" src="{{asset('images/cms/cms5.png')}}">
                    </span>
                    <h6 class="text-center">Easy to Setup & Manage</h6>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 cms-dev-block">
                    <span class="d-flex align-items-center justify-content-center p-3 mx-auto my-4">
                        <img alt="cms" title="cms" src="{{asset('images/cms/cms6.png')}}">
                    </span>
                    <h6 class="text-center">Free Deployment</h6>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 cms-dev-block">
                    <span class="d-flex align-items-center justify-content-center p-3 mx-auto my-4">
                        <img alt="cms" title="cms" src="{{asset('images/cms/cms7.png')}}">
                    </span>
                    <h6 class="text-center">Fixed Price</h6>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 cms-dev-block">
                    <span class="d-flex align-items-center justify-content-center p-3 mx-auto my-4">
                        <img alt="cms" title="cms" src="{{asset('images/cms/cms8.png')}}">
                    </span>
                    <h6 class="text-center">One-time Fee</h6>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 cms-dev-block">
                    <span class="d-flex align-items-center justify-content-center p-3 mx-auto my-4">
                        <img alt="cms" title="cms" src="{{asset('images/cms/cms9.png')}}">
                    </span>
                    <h6 class="text-center">8+ years of IT Exposure</h6>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 cms-dev-block">
                    <span class="d-flex align-items-center justify-content-center p-3 mx-auto my-4">
                        <img alt="cms" title="cms" src="{{asset('images/cms/cms10.png')}}">
                    </span>
                    <h6 class="text-center">Guaranteed Project Delivery</h6>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 cms-dev-block">
                    <span class="d-flex align-items-center justify-content-center p-3 mx-auto my-4">
                        <img alt="cms" title="cms" src="{{asset('images/cms/cms11.png')}}">
                    </span>
                    <h6 class="text-center">Totally Customizable</h6>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 cms-dev-block">
                    <span class="d-flex align-items-center justify-content-center p-3 mx-auto my-4">
                        <img alt="cms" title="cms" src="{{asset('images/cms/cms12.png')}}">
                    </span>
                    <h6 class="text-center">Android & iOS apps</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="get-a-quote py-3" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 d-flex justify-content-between quote-mr">
                    <img alt="quotevector" title="quotevector" src="{{asset('images/quote-vector.svg')}}" class="mr-4">
                    <div class="mr-auto quote-content">
                        <h4>Have An App Idea?</h4>
                        <p>Convert your app idea into a profitable business.</p>
                    </div>
                    <div class="quote-btn" data-toggle="modal" data-target="#exampleModalPreview"> <a href="javascript:void(0)">Get A Free Quote<img alt="rightarrow" title="rightarrow" src="{{asset('images/right-arrow(2).png')}}" class="ml-2" aria-hidden="true"></a></div>
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