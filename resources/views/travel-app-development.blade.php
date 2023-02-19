@extends('layout.app')

@section('content')

    <div class="solution-app-dev-banner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/travel/travel-banner.webp'),linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5))">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in" style="overflow-x: visible;">
                    <h1>TRAVEL APP DEVELOPMENT</h1>
                    <p>MAKING YOUR JOURNEY TO HAPPINESS AND GIMPS UNSHAKABLE COMPLETE SOURCES</p>
                    <div class="quote-btn" data-toggle="modal" data-target="#exampleModalPreview"> <a href="javascript:void(0)">Get A Free Quote</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="free-consultation solution-app-consultation py-5">
        <div class="container">
            <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <div class="solution-consultaion-left">
                    <h3 class="font-h3">On Demand <span>Travel App</span> Development Solutions</h3>
                        <p>Web and Mobile travel solutions are valuable tools for planning vacations and business trips. 
                           Travelers use apps to book their flights and hotel rooms, take travel advice, and meet local 
                           guides for memorable adventures. We assist you smoothly enter the digital travel industry.</p>

                        <p>Deorwine Infotech is the top Tours & Travel Mobile App Development Company to implement solutions 
                           like how to become a travel agent, how to travel the world. Hotels reserving, Flight reserving system, 
                           Trip insurance, airline tickets, indeed give holiday packages according to rainfall, rearmost trip news & 
                           information and global trip, etc. An efficient provide travel app solutions can work out the intact schedule 
                           that you want to plan an international trip or a short trip within a country for your vacations/holidays/weekend, 
                           etc. We offer higher travel app development services. We have great experience in targeted marketing and personalized 
                           service by native apps to attract new customers and preserve the existing ones. Our travel app developers’ team has the 
                           skill and experience to develop mobile apps for the travel industry.</p>
                    </div>
                </div>

                @include('components.quote') 

            </div>
        </div>
    </div>
    <div class="solution-service-section pb-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12">
                    <img alt="Travel App" title="Travel App" src="{{env('APP_CDN_URL') }}/images/solutions/travel/travel-vector.webp" class="img-fluid">
                </div>
                <div class="col-xl-6 col-lg-6 col-12 solution-right">
                    <h3 class="mb-4 font-h2" ><span>Let Your Customers </span>Experience With Some Real-Time Travelling Apps</h3>
                    <p>Deorwine is one of the most popular mobile app development businesses. We continue to invest in cutting-edge technology in the travel 
                        business in order to meet demand. Not only are there internet booking systems everywhere, but we're also helping to build a dedicated 
                        travel sector by providing our services. The most promising travel solution delivers worldwide includes designing, development, 
                        and implementation.
                    </p>
                    <p>Through a specialised travel app, we provide you with a full travel business solution for your travel firm. We give your consumers with 
                       a great experience for your travel agency as an app design firm. It helps your company keep its present client base while also attracting 
                       a particular audience of people who are searching for a fantastic travel service to make their trip plans and performances more enjoyable.</p>
                    
                   
                </div>
            </div>
        </div>
    </div>
    @include('components.business-model')
    <div class="solution-app-features py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in">
                <h3 class="font-h2">On-demand <span>Travel App</span> Features</h3>
                    <p>On Demand Travel App Development. Deorwine Infotech is a reputed travel app development company providing on-demand travel mobile app and same day travel mobile app development for iPhone & Android.</p>
                </div>
                <div class="app-features-tabs">
                    <ul id="tabs" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="app-features"><a href="#all" class="active" role="tab" data-toggle="tab">Customer App</a></li>
                        <li role="presentation" class="app-features"><a href="#online" role="tab" data-toggle="tab">Advance Feature</a></li>
                        <li role="presentation" class="app-features"><a href="#AdminPanel" role="tab" data-toggle="tab">Admin Panel</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active show" id="all">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Social Login" title="Social Login" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/login.png">
                                        <h5>Social Login</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Profile Setup" title="Profile Setup" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/search-ad.png">
                                        <h5>Profile Setup</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Schedule A Trip" title="Schedule A Trip" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/Measurements.png">
                                        <h5>Schedule A Trip</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Push Notifications" title="Push Notifications" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/schedule.png">
                                        <h5>Push Notifications</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Search And Filters" title="Search And Filters" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/track.png">
                                        <h5>Search And Filters</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Navigation And Geolocation" title="Navigation And Geolocation" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/tracking.png">
                                        <h5>Navigation And Geolocation</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Travel Ticket Booking Method" title="Travel Ticket Booking Method" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Travel Ticket Booking Method</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Air Ticket Booking" title="Air Ticket Booking" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/ordre-history.png">
                                        <h5>Air Ticket Booking</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Holiday & Tour Packages" title="Holiday & Tour Packages" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/sms-notification.png">
                                        <h5>Holiday & Tour Packages</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Notifications" title="Notifications" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Notifications</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Payment Gateway Integration" title="Payment Gateway Integration" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Payment Gateway Integration</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Messaging Channels" title="Messaging Channels" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Messaging Channels</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Reviews & Rating" title="Reviews & Rating" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Reviews & Rating</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Hotel, Car & Bus Booking" title="Hotel, Car & Bus Booking" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Hotel, Car & Bus Booking</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="online">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Instant Availability" title="Instant Availability" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/login.png">
                                        <h5>Instant Availability</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="All-In-One Collaboration" title="All-In-One Collaboration" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/search-ad.png">
                                        <h5>All-In-One Collaboration</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="A Dedicated Platform" title="A Dedicated Platform" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/Measurements.png">
                                        <h5>A Dedicated Platform</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Better Looking And More Sophisticated" title="Better Looking And More Sophisticated" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/schedule.png">
                                        <h5>Better Looking And More Sophisticated</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Make Money" title="Make Money" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/track.png">
                                        <h5>Make Money</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Review & Rating To Customer" title="Review & Rating To Customer" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/tracking.png">
                                        <h5>Review & Rating To Customer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Transportation" title="Transportation" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Transportation</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Emergency Services" title="Emergency Services" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/ordre-history.png">
                                        <h5>Emergency Services</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Insurance" title="Insurance" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/sms-notification.png">
                                        <h5>Insurance</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="AdminPanel">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Content Management Systems" title="Content Management Systems" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/login.png">
                                        <h5>Content Management Systems</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Guide Management" title="Guide Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/search-ad.png">
                                        <h5>Guide Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Notification Management" title="Notification Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/Measurements.png">
                                        <h5>Notification Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Transportation Service" title="Transportation Service" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/schedule.png">
                                        <h5>Transportation Service</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Review & Rating Management" title="Review & Rating Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/track.png">
                                        <h5>Review & Rating Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Weather Forecasting" title="Weather Forecasting" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/tracking.png">
                                        <h5>Weather Forecasting</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Taxi Services & City Transport" title="Taxi Services & City Transport" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Taxi Services & City Transport</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Location Tracking" title="Location Tracking" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/ordre-history.png">
                                        <h5>Location Tracking</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Payment Management" title="Payment Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/sms-notification.png">
                                        <h5>Payment Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="In-App Language Translator" title="In-App Language Translator" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>In-App Language Translator</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Currency Converter" title="Currency Converter" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Currency Converter</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Integrated Social Feed" title="Integrated Social Feed" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Integrated Social Feed</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Maintenance And Support" title="Maintenance And Support" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Maintenance And Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="solution-devices py-5"> 
        <div class="container">
            <div class="solution-devices-slide">
                <!-- <div class="justify-content-between d-flex"> -->
                    <div>
                    <img alt="first" title="first" src="{{ env('APP_CDN_URL') }}/images/solutions/travel/travel-app-screen-1.webp">
                    </div>
                    <div>
                    <img alt="second" title="second" src="{{ env('APP_CDN_URL') }}/images/solutions/travel/travel-app-screen-2.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/travel/travel-app-screen-3.webp">    
                    </div>
                    <div>
                    <img alt="fourth" title="fourth" src="{{ env('APP_CDN_URL') }}/images/solutions/travel/travel-app-screen-4.webp"> 
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/travel/travel-app-screen-5.webp"> 
                    </div>
                    <div>
                    <img alt="first" title="first" src="{{ env('APP_CDN_URL') }}/images/solutions/travel/travel-app-screen-6.webp"> 
                    </div>
                    <div>
                    <img alt="second" title="second" src="{{ env('APP_CDN_URL') }}/images/solutions/travel/travel-app-screen-7.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/travel/travel-app-screen-8.webp"> 
                    </div>
                    <div>
                    <img alt="fourth" title="fourth" src="{{ env('APP_CDN_URL') }}/images/solutions/travel/travel-app-screen-9.webp">
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/travel/travel-app-screen-1.webp"> 
                    </div>
            </div>
        </div>
    </div>
    <div class="get-a-quote py-3" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 d-flex justify-content-between quote-mr">
                    <img alt="quote-vector" title="quote-vector" src="{{asset('images/quote-vector.svg')}}" class="mr-4"> 
                    <div class="mr-auto quote-content">
                        <h4>Have An App Idea?</h4>
                        <p>Convert Your App Idea Into a Profitable Business.</p>
                    </div>
                    <div class="quote-btn" data-toggle="modal" data-target="#exampleModalPreview" data-aos="fade-right" style="overflow-x: visible;"> <a href="javascript:void(0)">Get A Free Quote <img alt="right-arrow" title="right-arrow" src="{{asset('images/right-arrow(2).png')}}" aria-hidden="true"></a></div>
                </div>
            </div>
        </div>
    </div>
    @include('components.portfolionew')
    <div class="solution-app-working pt-5" data-aos="fade-up" data-aos-duration="1200">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center" data-aos="zoom-in">
              <h3 class="font-h2 pb-2">How It <span>Works?</span></h3>
              <p>Simple Functioning Of Your Travel App Helps Your Business Grow Faster</p>
            </div>
            <div class="col-xl-4 col-lg-4 col-12"> 
                <div class="app-working d-flex">
                    <div class="mx-auto">
                        <h5>Filter & Search</h5>
                        <p>Choose service, price, location, etc.</p>
                    </div>
                    <span class="ml-4">1</span>
                </div>
                <div class="app-working d-flex">
                    <div class="mx-auto">
                        <h5>Order & Schedule</h5>
                        <p>Add order details and schedule pickup & delivery time</p>
                    </div>
                    <span class="ml-4">2</span>
                </div>
                <div class="app-working d-flex">
                    <div class="mx-auto">
                        <h5>Seamless Payment</h5>
                        <p>Pay via cards, wallets or cash on delivery</p>
                    </div>
                    <span class="ml-4">3</span>
                </div>
                <div class="app-working d-flex">
                    <div class="mx-auto">
                        <h5>Live Tracking</h5>
                        <p>Pay via cards, wallets or cash on delivery</p>
                    </div>
                    <span class="ml-4">4</span>
                </div>
                <div class="app-working d-flex">
                    <div class="mx-auto">
                        <h5>Order & Schedule</h5>
                        <p>Add order details and schedule pickup & delivery time</p>
                    </div>
                    <span class="ml-4">5</span>
                </div>
            </div> 
            <div class="col-xl-4 col-lg-4 col-12 text-center">
                <img alt="mobile-1" title="mobile-1" src="{{asset('images/solutions/Component230–2.png')}}"> 
            </div>
            <div class="col-xl-4 col-lg-4 col-12"> 
                <div class="app-working-1 d-flex">
                    <span class="mr-4">1</span>
                    <div>
                        <h5>Order Notification</h5>
                        <p>Choose service, price, location, etc.</p>
                    </div>
                </div>
                <div class="app-working-1 d-flex">
                    <span class="mr-4">2</span>
                    <div>
                        <h5>Full Order Information</h5>
                        <p>Get complete order & customer details</p>
                    </div>
                </div>
                <div class="app-working-1 d-flex">
                    <span class="mr-4">3</span>
                    <div>
                        <h5>Dispatch Automation</h5>
                        <p>Automate dispatch with optimized route</p>
                    </div>
                </div>
                <div class="app-working-1 d-flex">
                    <span class="mr-4">4</span>
                    <div>
                        <h5>Invoices & Reports</h5>
                        <p>Generate order invoices & analytics reports</p>
                    </div>
                </div>
                <div class="app-working-1 d-flex">
                    <span class="mr-4">5</span>
                    <div>
                        <h5>Full Order Information</h5>
                        <p>Get complete order & customer details</p>
                    </div>
                </div>
            </div> 
          </div>
        </div>
    </div>
    <div class="solution-bg-partner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/travel/travel-app-banner.webp');">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-12 d-flex align-items-center">
                    <div>
                        <h4>Take Your Business To Next Level With</h4>
                        <h3>On Demand Travel App Solution</h3>
                        <p>We are an expert travel app development company providing custom and readymade mobile app services all around the globe.</p>
                        <div class="quote-btn" data-toggle="modal" data-target="#exampleModalPreview" data-aos="fade-right" style="overflow-x: visible;"> <a href="javascript:void(0)">Get A Free Quote <img alt="right-arrow" title="right-arrow" src="{{asset('images/right-arrow(2).png')}}" aria-hidden="true"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="choose-deorwine py-5">
    @include('components.choose-deorwine')
    </div>
    <div id="item-container"></div>


@include('components.testimonials')
<div id="blog-container"></div>
   
    
@endsection
@push('scripts')
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/solutions.js')}}"></script>
@endpush