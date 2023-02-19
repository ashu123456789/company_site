@extends('layout.app')

@section('content')

    <div class="solution-app-dev-banner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/car_rental/car-rental-banner.webp'),linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5))">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in" style="overflow-x: visible;">
                    <h1>On Demand Car Rental & Booking App</h1>
                    <p>TRAVEL, AND HAVE A HAPPY JOURNEY</p>
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
                    <h3 class="font-h3">On Demand <span>Car Rental App</span> Development Company</h3>
                        <p>Deorwine Infotech, a leading Car Rental App Development Company, develops innovative car rental apps that assay the hunt 
                           for rental cars by smartphone druggies hard the place while your app grows credibility and trust of your customers. 
                           A mobile app for your car rental business assists you to gain new customers, display your services; working timings; 
                           working places and locales; and everything that you give to your customers, saving your time and trouble as well as that 
                           of your customers. It also builds a vast marketing tool for your business growth. We strive to use the rearmost technology 
                           to transfigure real car rental businesses or help produce new car rental services with a white marker and store car rental 
                           app results and are open to new features and integrations as per your business requirements. The car rental app that’s helps 
                           to track every car movements, which has been used in your business enterprise. The on-demand car rentals mobile app controls 
                           and overviews every rented transport in the world. With the guidance of a car rental system, you can not only list car settlements 
                           on your website but also can vend their bias. These car rental apps have come to a new approach that allows you to manage your settlements 
                           and accounts at the same time and can be developed in a customized way according to your business conditions.</p>
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
                    <img alt="Car Rental App" title="Car Rental App" src="{{env('APP_CDN_URL') }}/images/solutions/car_rental/car-rental-vector.webp" class="img-fluid">
                </div>
                <div class="col-xl-6 col-lg-6 col-12 solution-right">
                    <h3 class="mb-4 font-h2" ><span>Car Rental</span> Mobile App Development Solution</h3>
                    <p>To produce a car rental App as while ride-sharing apps are developing what may be the most comprehensive point-to-point transport of this kind, 
                       the idea of car rental isn't far-flung. There are companies like that car2Go, Avis, Zipcar, Hertz, get around that have won the public imagination 
                       as much as Uber, Lyft, and Airbnb. Startups and small business groups have shown a new sign of productivity, mortal cooperation, and convenience in 
                       the transportation assiduity with advanced technology-driven processes.The car rental business is observing a huge metamorphosis from a traditional 
                       slipup & mortar installation to the online on-demand ecosystem. You can enter and grow on the change with your custom car rental mobile app designed 
                       and developed with the advanced technologies in the request. Our car rental app development results assure you to give a constant and systematized service 
                       to your customer around the globe. We offer a user-friendly cost-effective solution for car rental app development on both iOS & Android and web platforms. 
                       Car rental app development for all types of requirements.
                
                       <ul style="padding-left: 1rem"><li style="list-style: disc">Corporate Car Rentals</li>
                       <li style="list-style: disc">Self-Drive Car Rentals</li>
                       <li style="list-style: disc">Outstation Car Rentals</li>
                       <li style="list-style: disc">Local Car Rentals</li>
                       <li style="list-style: disc">P2P Car Rentals</li>
                       <li style="list-style: disc">Long Term Car Rentals</li>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @include('components.business-model')
    <div class="solution-app-features py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in">
                <h3 class="font-h2">On-demand <span>Car Rental App</span> Features</h3>
                    <p>On Demand Car Rental App Development. Deorwine Infotech is a reputed car rental app development company providing on-demand car rental mobile app and same day car rental mobile app development for iPhone & Android.</p>
                </div>
                <div class="app-features-tabs">
                    <ul id="tabs" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="app-features"><a href="#all" class="active" role="tab" data-toggle="tab">Customer App</a></li>
                        <li role="presentation" class="app-features"><a href="#online" role="tab" data-toggle="tab">Driver App</a></li>
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
                                        <img alt="Multiple Car Types" title="Multiple Car Types" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/search-ad.png">
                                        <h5>Multiple Car Types</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Schedule Booking" title="Schedule Booking" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/Measurements.png">
                                        <h5>Schedule Booking</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Book Now" title="Book Now" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/schedule.png">
                                        <h5>Book Now</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Manage Bookings" title="Manage Bookings" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/track.png">
                                        <h5>Manage Bookings</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Fare Calculator" title="Fare Calculator" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/tracking.png">
                                        <h5>Fare Calculator</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Payments & Receipts" title="Payments & Receipts" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Payments & Receipts</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Push Notification & Alerts" title="Push Notification & Alerts" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/ordre-history.png">
                                        <h5>Push Notification & Alerts</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Tracking & Security" title="Tracking & Security" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/sms-notification.png">
                                        <h5>Tracking & Security</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Cancel A Booking" title="Cancel A Booking" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Cancel A Booking</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Refund" title="Refund" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Refund</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Offers, Discount, And Coupon" title="Offers, Discount, And Coupon" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Offers, Discount, And Coupon</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Car Pickup Points" title="Car Pickup Points" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Car Pickup Points</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Review & Rating" title="Review & Rating" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Review & Rating</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="online">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Secure Login" title="Secure Login" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/login.png">
                                        <h5>Secure Login</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Receive Request" title="Receive Request" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/search-ad.png">
                                        <h5>Receive Request</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Ride Info" title="Ride Info" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/Measurements.png">
                                        <h5>Ride Info</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Accept Payments" title="Accept Payments" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/schedule.png">
                                        <h5>Accept Payments</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Driver Dashboard" title="Driver Dashboard" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/track.png">
                                        <h5>Driver Dashboard</h5>
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
                                    <img alt="Driver Support" title="Driver Support" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Driver Support</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Payment Request" title="Payment Request" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Payment Request</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Track on Map" title="Track on Map" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Track on Map</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Geo Location" title="Geo Location" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Geo Location</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="AdminPanel">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Dashboard" title="Dashboard" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/login.png">
                                        <h5>Dashboard</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Vehicle Management" title="Vehicle Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/search-ad.png">
                                        <h5>Vehicle Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Customer Management" title="Customer Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/Measurements.png">
                                        <h5>Customer Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Manage All Drivers" title="Manage All Drivers" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/schedule.png">
                                        <h5>Manage All Drivers</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Payment Handler" title="Payment Handler" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/track.png">
                                        <h5>Payment Handler</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Manage All Request" title="Manage All Request" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/tracking.png">
                                        <h5>Manage All Request</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Promocode / Discounts" title="Promocode / Discounts" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Promocode / Discounts</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Manage Categories" title="Manage Categories" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Manage Categories</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Manage Fares Charges" title="Manage Fares Charges" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Manage Fares Charges</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Support / Feedback " title="Support / Feedback " src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Support / Feedback </h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Reporting & Analytics " title="Reporting & Analytics " src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Reporting & Analytics </h5>
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
                        <img alt="first" title="first" src="{{ env('APP_CDN_URL') }}/images/solutions/car_rental/car-rental-screen-1.webp">
                    </div>
                    <div>
                    <img alt="second" title="second" src="{{ env('APP_CDN_URL') }}/images/solutions/car_rental/car-rental-screen-2.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/car_rental/car-rental-screen-3.webp">    
                    </div>
                    <div>
                    <img alt="fourth" title="fourth" src="{{ env('APP_CDN_URL') }}/images/solutions/car_rental/car-rental-screen-4.webp"> 
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/car_rental/car-rental-screen-5.webp"> 
                    </div>
                    <div>
                    <img alt="first" title="first" src="{{ env('APP_CDN_URL') }}/images/solutions/car_rental/car-rental-screen-6.webp"> 
                    </div>
                    <div>
                    <img alt="second" title="second" src="{{ env('APP_CDN_URL') }}/images/solutions/car_rental/car-rental-screen-7.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/car_rental/car-rental-screen-8.webp"> 
                    </div>
                    <div>
                    <img alt="fourth" title="fourth" src="{{ env('APP_CDN_URL') }}/images/solutions/car_rental/car-rental-screen-9.webp">
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/car_rental/car-rental-screen-11.webp"> 
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/car_rental/car-rental-screen-12.webp"> 
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
              <p>Simple Functioning Of Your Car Rental App Helps Your Business Grow Faster</p>
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
    <div class="solution-bg-partner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/car_rental/car-rental-app-banner.webp');">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-12 d-flex align-items-center">
                    <div>
                        <h4>Take Your Business To Next Level With</h4>
                        <h3>On Demand Car Rental App Solution</h3>
                        <p>We are an expert car rental app development company providing custom and readymade mobile app services all around the globe.</p>
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