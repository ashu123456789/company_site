@extends('layout.app')

@section('content')

    <div class="solution-app-dev-banner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/fitness/fitness-banner.webp'),linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5))">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in" style="overflow-x: visible;">
                    <h1>On Demand Fitness Application Development</h1>
                    <p></p>
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
                    <h3 class="font-h3">On Demand <span>Fitness Application</span> Development Company</h3>
                        <p>For a fitness app to win friction, it’s important to determine and incorporate a set of features that improve overall 
                           well-being and manage to better health and fitness outcomes. Developing a fitness app needs efficiency and the ability 
                           to give the user a seamless experience with support. We understand the complexity of the fitness industry and hence, 
                           make a thorough research before the initiation of your project.</p>
                        <p>Deorwine Infotech is a leading fitness mobile app development company. Our activities in this field could be classified 
                           into the development of drill mobile apps, creating food menu and diet applications, and initiating fitness action observation 
                           applications.  All fitness mobile apps we create have a stunning interactive design. We can build fitness mobile apps for gyms, 
                           trainers, and players.</p>
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
                    <img alt="Fitness App" title="Fitness App" src="{{env('APP_CDN_URL') }}/images/solutions/fitness/fitness-solution-vector.webp" class="img-fluid">
                </div>
                <div class="col-xl-6 col-lg-6 col-12 solution-right">
                    <h3 class="mb-4 font-h2" ><span>Workout Apps</span> Development Solution</h3>
                    <p>Dedicated mobile app developers from Deorwine are working on developing apps that are focused on workouts. You can order for personal trainer applications as 
                       well as we are able to provide logbook apps. Our professionals develop fitness tracking apps that could be matched with other devices like wearables. Our fitness 
                       applications incorporate several features and can include videos, 3d models and pictures. You don’t need to attend the gym as it became more convenient to train at home. 
                       Impartial what you need is to determine the right position of responsibility. Also, the company develops extremely demanded crossfit applications solution.</p>
                </div>
            </div>
        </div>
    </div>
    @include('components.business-model')
    <div class="solution-app-features py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in">
                <h3 class="font-h2">On-demand <span>Fitness App</span> Features</h3>
                    <p>On Demand Fitness App Development. Deorwine Infotech is a reputed fitness app development company providing on-demand fitness mobile apps and same day fitness mobile app development for iPhone & Android.</p>
                </div>
                <div class="app-features-tabs">
                    <ul id="tabs" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="app-features"><a href="#all" class="active" role="tab" data-toggle="tab">Customer App</a></li>
                        <li role="presentation" class="app-features"><a href="#online" role="tab" data-toggle="tab">Trainer/Dietician App</a></li>
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
                                        <img alt="Login / Singup" title="Login / Singup" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/search-ad.png">
                                        <h5>Login / Sign Up</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Advance Search Trainer" title="Advance Search Trainer" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/Measurements.png">
                                        <h5>Advance Search Trainer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Review Trainer Profile" title="Review Trainer Profile" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/schedule.png">
                                        <h5>Review Trainer Profile</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Connect With Trainer" title="Connect With Trainer" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/track.png">
                                        <h5>Connect With Trainer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Goal Tracking" title="Goal Tracking" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/tracking.png">
                                        <h5>Goal Tracking</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Customized Diet Plans" title="Customized Diet Plans" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Customized Diet Plans</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Nutrition Tracking" title="Nutrition Tracking" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/ordre-history.png">
                                        <h5>Nutrition Tracking</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Integrate Geolocation" title="Integrate Geolocation" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/sms-notification.png">
                                        <h5>Integrate Geolocation</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Push Notification & Reminders" title="Push Notification & Reminders" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Push Notification & Reminders</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Gamification" title="Gamification" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Gamification</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Social Sharing" title="Social Sharing" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Social Sharing</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Progress Tracking" title="Progress Tracking" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Progress Tracking</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Food Tracking" title="Food Tracking" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Food Tracking</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Live Streaming Or Video-on-Demand" title="Live Streaming Or Video-on-Demand" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Live Streaming Or Video-on-Demand</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Online Consultation & Chat" title="Online Consultation & Chat" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Online Consultation & Chat</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Tracking Number Of Steps Taken" title="Tracking Number Of Steps Taken" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Tracking Number Of Steps Taken</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Multiple Payment Methods" title="Multiple Payment Methods" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Multiple Payment Methods</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Multiple Language" title="Multiple Language" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Multiple Language</h5>
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
                                        <img alt="Support" title="Support" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Support</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="FAQ" title="FAQ" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>FAQ</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Profile Managment" title="Profile Managment" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Profile Managment</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="online">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Secure And Quick Login" title="Secure And Quick Login" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/login.png">
                                        <h5>Secure And Quick Login</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Manage And Accept Requests" title="Manage And Accept Requests" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/search-ad.png">
                                        <h5>Manage And Accept Requests</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Real-Time Request" title="Real-Time Request" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/Measurements.png">
                                        <h5>Real-Time Request</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Track Customer Progress" title="Track Customer Progress" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/schedule.png">
                                        <h5>Track Customer Progress</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Diet Plan For Customer" title="Diet Plan For Customer" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/track.png">
                                        <h5>Diet Plan For Customer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Subscriptions" title="Subscriptions" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/tracking.png">
                                        <h5>Subscriptions</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Online Consultation & Chat" title="Online Consultation & Chat" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Online Consultation & Chat</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Multiple Language Support" title="Multiple Language Support" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/ordre-history.png">
                                        <h5>Multiple Language Support</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Multiple Currency Support" title="Multiple Currency Support" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/sms-notification.png">
                                        <h5>Multiple Currency Support</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Payment History " title="Payment History" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Payment History</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Support / Feedback" title="Support / Feedback" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Support / Feedback</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Push Notification & Reminders" title="Push Notification & Reminders" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Push Notification & Reminders</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Manage Payments & Receipts" title="Manage Payments & Receipts" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Manage Payments & Receipts</h5>
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
                        <div role="tabpanel" class="tab-pane fade" id="AdminPanel">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Dashboard / Status" title="Dashboard / Status" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/login.png">
                                        <h5>Dashboard / Status</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Manage Customers" title="Manage Customers" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/search-ad.png">
                                        <h5>Manage Customers</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Manage Trainer/ Dietitaion" title="Manage Trainer/ Dietitaion" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/Measurements.png">
                                        <h5>Manage Trainer / Dietitaion</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Management Of All Requests" title="Management Of All Requests" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/schedule.png">
                                        <h5>Management Of All Requests</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Multiple Payment Manage" title="Multiple Payment Manage" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/track.png">
                                        <h5>Multiple Payment Manage</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Push Notification" title="Push Notification" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/tracking.png">
                                        <h5>Push Notification</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Choose Payment Method" title="Choose Payment Method" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Choose Payment Method</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Subscription" title="Subscription" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/ordre-history.png">
                                        <h5>Subscription</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Discount / Promo" title="Discount / Promo" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/sms-notification.png">
                                        <h5>Discount / Promo</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Mantain Charges For Services" title="Mantain Charges For Services" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Maintain Charges For Services</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Multiple Currency Management" title="Multiple Currency Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Multiple Currency Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Reporting, Export Data & Analysis" title="Reporting, Export Data & Analysis" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Reporting, Export Data & Analysis</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Review & Rating Approval" title="Review & Rating Approval" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Review & Rating Approval</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Support / FAQ / Feedback Manager" title="Support / FAQ / Feedback Manager" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
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
                        <img alt="first" title="first" src="{{ env('APP_CDN_URL') }}/images/solutions/fitness/fitness-app-screen-1.webp">
                    </div>
                    <div>
                    <img alt="second" title="second" src="{{ env('APP_CDN_URL') }}/images/solutions/fitness/fitness-app-screen-2.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/fitness/fitness-app-screen-3.webp">    
                    </div>
                    <div>
                    <img alt="fourth" title="fourth" src="{{ env('APP_CDN_URL') }}/images/solutions/fitness/fitness-app-screen-4.webp"> 
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/fitness/fitness-app-screen-5.webp"> 
                    </div>
                    <div>
                    <img alt="first" title="first" src="{{ env('APP_CDN_URL') }}/images/solutions/fitness/fitness-app-screen-6.webp"> 
                    </div>
                    <div>
                    <img alt="second" title="second" src="{{ env('APP_CDN_URL') }}/images/solutions/fitness/fitness-app-screen-7.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/fitness/fitness-app-screen-8.webp"> 
                    </div>
                    <div>
                    <img alt="fourth" title="fourth" src="{{ env('APP_CDN_URL') }}/images/solutions/fitness/fitness-app-screen-9.webp">
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/fitness/fitness-app-screen-4.webp"> 
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
              <p>Simple Functioning Of Your Fitness App Helps Your Business Grow Faster</p>
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
    <div class="solution-bg-partner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/fitness/fitness-app-banner.webp');">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-12 d-flex align-items-center">
                    <div>
                        <h4>Take Your Business To Next Level With</h4>
                        <h3>On Demand Fitness App Solution</h3>
                        <p>We are an expert fitness app development company providing custom and readymade mobile app services all around the globe.</p>
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