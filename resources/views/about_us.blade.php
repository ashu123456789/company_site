@extends('layout.app')

@section('content')

 <!-- -------------about-banner---------->
    <div class="contact-banner about_us_banner d-flex justify-content-center align-items-center" style="background:  url('{{ env('APP_CDN_URL') }}/images/about_us/contact-banner.webp'),
    linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5))">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    <h1>EXPLORE MORE ABOUT <span>DEORWINE</span></h1>
                    <p>WE ARE SPECIALIZED IN MOBILE APP DEVELOPMENT.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- -------------about-banner---------->
    <!-- -------------about-it-solutions---------->
    <div class="about-it-solutions py-5" data-aos="fade-up" data-aos-duration="700">
        <div class="container">
            <div class="row">  
                <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12 left-sidebar">
                <h3>Best <span>IT-Solutions</span> Company Near The World</h3>
                    <p>We grow from an incipiency Web Development Company to the Top Information technology company, feeding to the IT needs of numerous big brands.
                       To be more precise, we're digital natives with a pioneering approach to Web Development, E-commerce solutions, Web Designing, Software Development, 
                       Software Consulting, Digital Marketing, Graphic Designing, Mobile App Development, and the rest of the IT solutions.
                    </p>
                    <div class="row pt-4 left-sidebar-tabs">
                        <div class="col-xl-4 col-lg-5 col-md-12">
                            <!-- Tabs nav -->
                            <div class="nav flex-column nav-pills m-auto about-nav-pills" id="v-pills-tab"
                                role="tablist" aria-orientation="vertical">
                                <a class="nav-link shadow active d-flex align-items-center" id="v-pills-home-tab"
                                    data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">
                                    <img alt="Question" title="Question" src="{{asset('images/question.png')}}" class="pr-2">
                                    <h6 class="mb-0">What We Do</h6>
                                </a>

                                <a class="nav-link shadow d-flex align-items-center" id="v-pills-profile-tab"
                                    data-toggle="pill" href="#v-pills-profile" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">
                                    <img alt="Target" title="Target" src="{{asset('images/target.png')}}" class="pr-2">
                                    <h6 class="mb-0">Our Mission</h6>
                                </a>

                                <a class="nav-link shadow d-flex align-items-center" id="v-pills-messages-tab"
                                    data-toggle="pill" href="#v-pills-messages" role="tab"
                                    aria-controls="v-pills-messages" aria-selected="false">
                                    <img alt="Vision" title="Vision" src="{{asset('images/vision.png')}}" class="pr-2">
                                    <h6 class="mb-0">Our Vision</h6>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-12 right-sidebar-tabs">
                            <!-- Tabs content -->
                            <div class="tab-content m-auto" id="v-pills-tabContent">
                                <div class="tab-pane fade shadow rounded show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <div>
                                        <h6>Our talented teams craft the best code and design amazing user
                                            experiences
                                            for our clients.</h6>
                                        <p>We grow from a startup Web Development Company to Best Information technology company, catering 
                                            the IT needs of many big brands. To be more precise we are digital natives with a pioneering approach 
                                            to E-commerce Solutions, Web Development, Web Designing, Software Development, Software Consulting, Digital Marketing, 
                                            Mobile App Development, Graphic Designing and rest IT solutions.</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade shadow rounded" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    <div>
                                
                                        <p> Deorwine is committed in providing high standard solutions with leading technical solutions to our client by:</p>
                                        <ul style="padding-left: 1rem">
                                            <li style="list-style: disc">Understanding the customer's IT requirements and business process involved.</li>
                                            <li style="list-style: disc">Keeping our programmers updated with latest technology with proper training.</li>
                                            <li style="list-style: disc">Maintaining the code quality by ensuring testing at each development phase.</li>
                                            <li style="list-style: disc">Ensuring customer satisfaction in maintaining professional services.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade shadow rounded" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab">
                                    <div>
                                        
                                        <p>Deorwine's vision is more into evaluating customer's business Goals, exploring business value and unlocking strategies to provide a complete IT Solution with advanced and updated technologies to our valuable clients.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-1 col-md-12 col-sm-12 right-sidebar">
                    <figure>
                        <img alt="Best IT-Solutions Company Near The World" title="Best IT-Solutions Company Near The World" src="{{ env('APP_CDN_URL') }}/images/about_us/about-right.webp" class="img-fluid">
                        <figcaption data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="800"
                            data-aos-duration="1000">
                            <h3>8</h3><br>
                            <p>Years of Experience</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- -------------about-it-solutions---------->
    <div class="best-fact" data-aos="fade-up" data-aos-duration="700">
        <div class="container pt-5 pb-4">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 best-fact-h1">
                <h2 data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <span>BEST</span> FACTS OF OUR COMPANY
                    </h2>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 best-fact-p">
                    <p data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">We are proud when a combination of new technologies, commitment, team’s knowledge, and 
                        business ideas of our clients results in products with a global reach.</p>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 satisfied-client">
                    <p class="counting"> <span class="counter-count">{{ env('COUNT_SATISFIED_CLIENT') }}</span></p>
                    <h4>Satisfied Clients</h4>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 satisfied-client">
                    <p class="counting"> <span class="counter-count">{{ env('COUNT_COMPLETE_PROJECT') }}</span></p>
                    <h4>Completed Projects</h4>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 satisfied-client">
                    <p class="counting"> <span class="counter-count">{{ env('COUNT_SATISFACTION') }}</span>%</p>
                    <h4>Satisfaction Rate</h4>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 satisfied-client">
                    <p class="counting"> <span class="counter-count">{{ env('COUNT_IT_PROFESSIONALS') }}</span></p>
                    <h4>IT Professionals</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="image-section py-5" data-aos="fade-up" data-aos-duration="700">
        <div class="container">
            <div class="row margin-tb">
                <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
                    <img alt="People" title="People" src="{{ env('APP_CDN_URL') }}/images/about_us/pic101.webp">
                </div>
                <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 d-flex align-items-center">
                    <div class="section-content" data-aos="fade-left" data-aos-duration="1000">
                        <h4>People</h4>
                        <h6>"Our Company is our Family. Our priority is to meet every employee as a family part."
                        </h6>
                        <p>A family covers of respect, openness, and aptness to help each other. Deorwine is such a
                            place where these key elements are implanted in each and every employee. Apart from the
                            technical advantages, our work environment is a combination of humor and friendly.</p>
                    </div>
                </div>
            </div>
            <div class="row margin-tb section-content_1">
                <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 d-flex align-items-center">
                    <div class="section-content" data-aos="fade-right" data-aos-duration="1000">
                        <h4>Development</h4>
                        <h6>"With our active participation in international conferences, we are into organizing several career-boosting courses, internship programs and hands-on workshops."</h6>
                        <p>The internet is broad and is constantly changing now and then. The internet has accustomed us
                            to use technology in many ways. It has acted as a fuel to our vehicle of driving deeply into
                            knowledge and polishing our skills.</p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12" style="z-index: -1;">
                    <img alt="Development" title="Development" src="{{ env('APP_CDN_URL') }}/images/about_us/pic102.webp">
                </div>
            </div>
            <div class="row margin-tb">
                <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
                    <img alt="Development" title="Development" src="{{ env('APP_CDN_URL') }}/images/about_us/pic103.webp">
                </div>
                <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 d-flex align-items-center">
                    <div class="section-content" data-aos="fade-left" data-aos-duration="1000">
                        <h4>Development</h4>
                        <h6>"With our active participation in international conferences, we are into organizing various
                            career-boosting courses, hands-on workshops, and internship programs."</h6>
                        <p>The internet is broad and is constantly changing now and then. The internet has accustomed us
                            to use technology in many ways. It has acted as a fuel to our vehicle of driving deeply into
                            knowledge and polishing our skills.</p>
                    </div>
                </div>
            </div>
            <div class="row margin-tb section-content_1">
                <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 d-flex align-items-center">
                    <div class="section-content" data-aos="fade-right" data-aos-duration="1000">
                        <h4>Flexibility</h4>
                        <h6>"We fleetly acclimatize to dynamic circumstances and changing conditions. The many organizational 
                            processes are only then to streamline everyday work."</h6>
                        <p>Each of us has different goals and values. At Deorwine, we create a flexible workplace,
                            respecting the priorities and expectations of both our employees and our clients.</p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12" style="z-index: -1;">
                    <img alt="Flexibility" title="Flexibility" src="{{ env('APP_CDN_URL') }}/images/about_us/pic104.webp">
                </div>
            </div>
            <div class="row margin-tb ">
                <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
                    <img alt="Fun and Rewarding Place to Work" title="Fun and Rewarding Place to Work" src="{{ env('APP_CDN_URL') }}/images/about_us/pic105.webp">
                </div>
                <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 d-flex align-items-center">
                    <div class="section-content" data-aos="fade-left" data-aos-duration="1000">
                        <h4>Fun and Rewarding Place to Work</h4>
                        <p>We consider in building a team of people with different backgrounds, different experiences
                            and unique points of view—reflecting the communities where we exist and work. The Deorwine
                            team is our largest asset, so we invest in the growth and development of our team members
                            and leaders and have fun in all we do. We’re devoted to building a team that does the best
                            thing for our communities, our shareholders and, above all, our guests.</p>
                    </div>
                </div>
            </div>
            <div class="row margin-tb section-content_1">
                <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 d-flex align-items-center">
                    <div class="section-content" data-aos="fade-right" data-aos-duration="1000">
                        <h4>Spirit for Design & Passion for Innovation</h4>
                        <p>Good design runs beyond the surface. When design really runs, it satisfies a need, simplifies
                            your experience and makes you feel great. Whether it’s helping designer creating a smarter
                            prescription bottle to help your mind, we’re dedicated to making much design accessible and
                            affordable to all.</p>
                        <h6>“Success is getting ourselves useful in the world, precious to the community, helping in boosting 
                            in the position of humanity, so conducting ourselves that when we go the world will be somewhat greater 
                            of our having lived the fleeting measure of our lives."</h6>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12" style="z-index: -1;">
                    <img alt="Spirit for Design & Passion for innovation" title="Spirit for Design & Passion for innovation" src="{{ env('APP_CDN_URL') }}/images/about_us/pic106.webp">
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
        })
    </script>
@endpush