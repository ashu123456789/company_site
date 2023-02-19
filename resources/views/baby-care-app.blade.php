@extends('layout.app')

@section('content')

    <div class="solution-app-dev-banner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/baby_app/babycare-banner.webp'),linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5))">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in" style="overflow-x: visible;">
                    <h1>On Demand baby Care App Development</h1>
                    <p>Application helps the user at the time of the requirement of the babysitting.</p>
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
                    <h3 class="font-h3">On Demand <span>Baby Care App</span> Development Company</h3>
                        <p>As the workloads, pressure, and prostration are adding amongst millennials, further people are resorting to babysitters and babysitters to take care of their children. 
                           It sits a problem since the demand for the services of a dependable babysitter is now excelling the force of similar people in the frugality. Hence, comes the dire need 
                           of having an on-demand business for similar services. That's how the process of getting a sitter comes in to picture through which parents can maintain the babysitters who 
                           take care of the baby. Thus, in similar conditions, consulting a sitter association is a large shriek of support for parents. For the ones who are wishing to start an app, 
                           consult a Baby Sitter Mobile App Development Company that follows your circumstances.</p>

                        <p>We at Deorwine Infotech believe rapturous for being the premier Babysitters On-Demand Mobile App. We develop cutting-edge results with your enterprise conditions. Our Sitter 
                           Operation Inventors are complete and designing results that are easy to use and they retain features that ameliorate security, responsibility to the parents. Also, our operations 
                           are hassle-free.</p>   

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
                    <img alt="Baby Care App" title="Baby Care App" src="{{env('APP_CDN_URL') }}/images/solutions/baby_app/baby-care-vector.webp" class="img-fluid">
                </div>
                <div class="col-xl-6 col-lg-6 col-12 solution-right">
                    <h3 class="mb-4 font-h2" ><span>Best Nannies</span> Mobile App Development In India</h3>
                    <p>Now it extended to support to parents by baby monitoring where it facilitates the shadowing of the toddler. Generally, it is experienced 
                       when parents go for office/ workstation or at the eschewal of home and your baby is at home either with nurse or with the sitter. 
                       Either, some of the duties like constant caring, regular feeding, and diaper changing make parents sleep-deprived and tired. 
                       Still, baby tracking apps the druggies to know concerning their baby by giving them unique tools to track the movement or conditioning of their baby. 
                       With the babies' growth, the significance of these apps enhances whereby using tracked information they can conclude the health and impunity of their baby. 
                       Parents can track conditioning like when they're to shift from suckling to pumping when they're to begin successive foods etc.
                 
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
                <h3 class="font-h2">On-demand <span>Baby Care App</span> Features</h3>
                    <p>On-demand baby care app development. Deorwine Infotech is a reputed baby care app development 
                       company furnishing on-demand baby care mobile apps and same-day baby care mobile app development for iphone & android.</p>
                </div>
                <div class="app-features-tabs">
                    <ul id="tabs" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="app-features"><a href="#all" class="active" role="tab" data-toggle="tab">Customer App</a></li>
                        <li role="presentation" class="app-features"><a href="#online" role="tab" data-toggle="tab">Babysitter App</a></li>
                        <li role="presentation" class="app-features"><a href="#AdminPanel" role="tab" data-toggle="tab">Admin Panel</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active show" id="all">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Social signup" title="Social signup" src="{{asset('images/solutions/icon-images/login.png')}}">
                                        <h5>Social signup</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Advance Search" title="Advance Search" src="{{asset('images/solutions/icon-images/search-ad.png')}}">
                                        <h5>Advanced Search</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Babysitters Near Me" title="Babysitters Near Me" src="{{asset('images/solutions/icon-images/Measurements.png')}}">
                                        <h5>Babysitters Near Me</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Multiple Language Support" title="Multiple Language Support" src="{{asset('images/solutions/icon-images/schedule.png')}}">
                                        <h5>Multiple Language Support</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Photos Observation" title="Photos Observation" src="{{asset('images/solutions/icon-images/track.png')}}">
                                        <h5>Photos Observation</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Live Chat" title="Live Chat" src="{{asset('images/solutions/icon-images/tracking.png')}}">
                                        <h5>Live Chat</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Video Call" title="Video Call" src="{{asset('images/solutions/icon-images/payment-method.png')}}">
                                        <h5>Video Call</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Push Notification" title="Push Notification" src="{{asset('images/solutions/icon-images/ordre-history.png')}}">
                                        <h5>Push Notification</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Geolocation" title="Geolocation" src="{{asset('images/solutions/icon-images/sms-notification.png')}}">
                                        <h5>Geolocation</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Booking" title="Booking" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Booking</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="In-App Payment" title="In-App Payment" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>In-App Payment</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Schedule Appointments" title="Schedule Appointments" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Schedule Appointments</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Review & Rating" title="Review & Rating" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Review & Rating</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="View Activity Report" title="View Activity Report" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>View Activity Report</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Food Suggestions And Details" title="Food Suggestions And Details" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Food Suggestions And Details</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Time Tracking Of Baby" title="Time Tracking Of Baby" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Time Tracking Of Baby</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="online">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Secure Login / Signup" title="Secure Login / Signup" src="{{asset('images/solutions/icon-images/login.png')}}">
                                        <h5>Secure Login / Signup</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Profile Verification" title="Profile Verification" src="{{asset('images/solutions/icon-images/search-ad.png')}}">
                                        <h5>Profile Verification</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Accept / Reject Client Request" title="Accept / Reject Client Request" src="{{asset('images/solutions/icon-images/Measurements.png')}}">
                                        <h5>Accept / Reject Client Request</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Check Client profile / Review" title="Check Client profile / Review" src="{{asset('images/solutions/icon-images/schedule.png')}}">
                                        <h5>Check Client profile / Review</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Receive Direct Payment" title="Receive Direct Payment" src="{{asset('images/solutions/icon-images/track.png')}}">
                                        <h5>Receive Direct Payment</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Setup Profile" title="Setup Profile" src="{{asset('images/solutions/icon-images/tracking.png')}}">
                                        <h5>Setup Profile</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Notification" title="Notification" src="{{asset('images/solutions/icon-images/payment-method.png')}}">
                                        <h5>Notification</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Work Histroy" title="Work Histroy" src="{{asset('images/solutions/icon-images/ordre-history.png')}}">
                                        <h5>Work Histroy</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Review & Rating" title="Review & Rating" src="{{asset('images/solutions/icon-images/sms-notification.png')}}">
                                        <h5>Review & Rating</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Multiple Currency Support" title="Multiple Currency Support" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Multiple Currency Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="AdminPanel">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Dashboard with Status / Analytics" title="Dashboard with Status / Analytics" src="{{asset('images/solutions/icon-images/login.png')}}">
                                        <h5>Dashboard with Status / Analytics</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Manage All Customers" title="Manage All Customers" src="{{asset('images/solutions/icon-images/search-ad.png')}}">
                                        <h5>Manage All Customers</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Manage All Babysitters" title="Manage All Babysitters" src="{{asset('images/solutions/icon-images/Measurements.png')}}">
                                        <h5>Manage All Babysitters</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Push Notification " title="Push Notification " src="{{asset('images/solutions/icon-images/schedule.png')}}">
                                        <h5>Push Notification </h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Digital Babysitter Activity" title="Digital Babysitter Activity" src="{{asset('images/solutions/icon-images/track.png')}}">
                                        <h5>Digital Babysitter Activity</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Mantain Charges For Services" title="Mantain Charges For Services" src="{{asset('images/solutions/icon-images/tracking.png')}}">
                                        <h5>Mantain Charges For Services</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Multiple Currency Management" title="Multiple Currency Management" src="{{asset('images/solutions/icon-images/payment-method.png')}}">
                                        <h5>Multiple Currency Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Reporting, Export Data & Analysis" title="Reporting, Export Data & Analysis" src="{{asset('images/solutions/icon-images/ordre-history.png')}}">
                                        <h5>Reporting, Export Data & Analysis</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Review & Rating Approval" title="Review & Rating Approval" src="{{asset('images/solutions/icon-images/sms-notification.png')}}">
                                        <h5>Review & Rating Approval</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Support / FAQ / Feedback Manager" title="Support / FAQ / Feedback Manager" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Support / FAQ / Feedback Manager</h5>
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
                        <img alt="first" title="first" src="{{ env('APP_CDN_URL') }}/images/solutions/baby_app/babycare-screens-1.webp">
                    </div>
                    <div>
                    <img alt="second" title="second" src="{{ env('APP_CDN_URL') }}/images/solutions/baby_app/babycare-screens-2.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/baby_app/babycare-screens-3.webp">    
                    </div>
                    <div>
                    <img alt="fourth" title="fourth" src="{{ env('APP_CDN_URL') }}/images/solutions/baby_app/babycare-screens-4.webp"> 
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/baby_app/babycare-screens-5.webp"> 
                    </div>
                    <div>
                    <img alt="first" title="first" src="{{ env('APP_CDN_URL') }}/images/solutions/baby_app/babycare-screens-6.webp"> 
                    </div>
                    <div>
                    <img alt="second" title="second" src="{{ env('APP_CDN_URL') }}/images/solutions/baby_app/babycare-screens-7.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/baby_app/babycare-screens-8.webp"> 
                    </div>
                    <div>
                    <img alt="fourth" title="fourth" src="{{ env('APP_CDN_URL') }}/images/solutions/baby_app/babycare-screens-9.webp">
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/baby_app/babycare-screens-10.webp"> 
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/baby_app/babycare-screens-11.webp"> 
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/baby_app/babycare-screens-12.webp"> 
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
              <p>Simple Functioning Of Your Baby Care App Helps Your Business Grow Faster</p>
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
    <div class="solution-bg-partner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/baby_app/babycare-app-banner.webp');">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-12 d-flex align-items-center">
                    <div>
                        <h4>Take Your Business To Next Level With</h4>
                        <h3>On Demand Baby Care App  Solution</h3>
                        <p>We are an expert baby care app development company providing custom and readymade mobile app services all around the globe.</p>
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