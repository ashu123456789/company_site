@extends('layout.app')

@section('content')

    <div class="solution-app-dev-banner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/e-learning/e-learning-banner.webp'),linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5))">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in" style="overflow-x: visible;">
                    <h1>E-LEARNING APP DEVELOPMENT</h1>
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
                    <h3 class="font-h3">On Demand <span>Media And Entertainment Mobile App</span> Development </h3>
                        <p>Dedicated mobile app developers from Deorwine are working on developing apps that are focused on workouts.
                           You can order for personal trainer applications as well as we are able to provide logbook apps. Our professionals 
                           develop fitness tracking apps that could be matched with other devices like wearables. Our fitness applications incorporate 
                           several features and can include videos, 3D models and pictures. You don’t need to attend the gym as it became more convenient 
                           to train at home. Just what you need is to determine the right level of responsibility. Also, the company develops extremely demanded 
                           CrossFit applications.</p>

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
                    <img alt="Learning App" title="Learning App" src="{{env('APP_CDN_URL') }}/images/solutions/e-learning/e-learning-vector.webp" class="img-fluid">
                </div>
                <div class="col-xl-6 col-lg-6 col-12 solution-right">
                    <h3 class="mb-4 font-h2" ><span>On Demand </span> Car Rental App Development Company</h3>
                    <p>One of the most Mobile app development companies stands Deorwine Infotech continues going to the innovative technology in the travel 
                       industry and fulfill the necessity. There are not only online booking systems available, which are, can found everywhere but also making 
                       a dedicated travel industry by giving our services. Travel solution covers designing, Development, and implementation, and the most promising 
                       travel solution provides globally.
                    </p>
                    <p>We offer you a complete travel business solution for your travel company through a dedicated travel app. As a app designing company, we provide 
                       your customers with a rich experience for your travel agency. It supports your business to maintain your existing customer foundation and get a 
                       unique niche audience who are looking for a fabulous travel service to make their travel plan and performance pleasant.</p>
                    
                   
                </div>
            </div>
        </div>
    </div>
    @include('components.business-model')
    <div class="solution-app-features py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in">
                <h3 class="font-h2">On-demand <span>E-learning</span> Features</h3>
                    <p>On Demand E-learning App Development. Deorwine Infotech is a reputed e-learning app development company providing on-demand e-learning mobile app and same day e-learning mobile app development for iPhone & Android.</p>
                </div>
                <div class="app-features-tabs">
                    <ul id="tabs" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="app-features"><a href="#all" class="active" role="tab" data-toggle="tab">Customer App</a></li>
                        <li role="presentation" class="app-features"><a href="#online" role="tab" data-toggle="tab">Driver App</a></li>
                        <li role="presentation" class="app-features"><a href="#offline" role="tab" data-toggle="tab">Services App</a></li>
                        <li role="presentation" class="app-features"><a href="#AdminPanel" role="tab" data-toggle="tab">Admin Panel</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active show" id="all">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Signup & Social Login" title="Signup & Social Login" src="{{asset('images/solutions/icon-images/login.png')}}">
                                        <h5>Signup & Social Login</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Advance Search" title="Advance Search" src="{{asset('images/solutions/icon-images/search-ad.png')}}">
                                        <h5>Advance Search</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Laundry Service Measurements" title="Laundry Service Measurements" src="{{asset('images/solutions/icon-images/Measurements.png')}}">
                                        <h5>Laundry Service Measurements</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Schedule Specific" title="Schedule Specific" src="{{asset('images/solutions/icon-images/schedule.png')}}">
                                        <h5>Schedule Specific</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Tracking Order" title="Tracking Order" src="{{asset('images/solutions/icon-images/track.png')}}">
                                        <h5>Tracking Order</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="View Order Status" title="View Order Status" src="{{asset('images/solutions/icon-images/tracking.png')}}">
                                        <h5>View Order Status</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Choose Payment Method" title="Choose Payment Method" src="{{asset('images/solutions/icon-images/payment-method.png')}}">
                                        <h5>Choose Payment Method</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Order History" title="Order History" src="{{asset('images/solutions/icon-images/ordre-history.png')}}">
                                        <h5>Order History</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="SMS & Push Notification" title="SMS & Push Notification" src="{{asset('images/solutions/icon-images/sms-notification.png')}}">
                                        <h5>SMS & Push Notification</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Reviews & Rating" title="Reviews & Rating" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Reviews & Rating</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="online">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Signup & Social Login" title="Signup & Social Login" src="{{asset('images/solutions/icon-images/login.png')}}">
                                        <h5>Signup & Social Login</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Advance Search" title="Advance Search" src="{{asset('images/solutions/icon-images/search-ad.png')}}">
                                        <h5>Advance Search</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Laundry Service Measurements" title="Laundry Service Measurements" src="{{asset('images/solutions/icon-images/Measurements.png')}}">
                                        <h5>Laundry Service Measurements</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Schedule Specific" title="Schedule Specific" src="{{asset('images/solutions/icon-images/schedule.png')}}">
                                        <h5>Schedule Specific</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Tracking Order" title="Tracking Order" src="{{asset('images/solutions/icon-images/track.png')}}">
                                        <h5>Tracking Order</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="View Order Status" title="View Order Status" src="{{asset('images/solutions/icon-images/tracking.png')}}">
                                        <h5>View Order Status</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Choose Payment Method" title="Choose Payment Method" src="{{asset('images/solutions/icon-images/payment-method.png')}}">
                                        <h5>Choose Payment Method</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Order History" title="Order History" src="{{asset('images/solutions/icon-images/ordre-history.png')}}">
                                        <h5>Order History</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="SMS & Push Notification" title="SMS & Push Notification" src="{{asset('images/solutions/icon-images/sms-notification.png')}}">
                                        <h5>SMS & Push Notification</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Reviews & Rating" title="Reviews & Rating" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Reviews & Rating</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="offline">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Signup & Social Login" title="Signup & Social Login" src="{{asset('images/solutions/icon-images/login.png')}}">
                                        <h5>Signup & Social Login</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Advance Search" title="Advance Search" src="{{asset('images/solutions/icon-images/search-ad.png')}}">
                                        <h5>Advance Search</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Laundry Service Measurements" title="Laundry Service Measurements" src="{{asset('images/solutions/icon-images/Measurements.png')}}">
                                        <h5>Laundry Service Measurements</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Schedule Specific" title="Schedule Specific" src="{{asset('images/solutions/icon-images/schedule.png')}}">
                                        <h5>Schedule Specific</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Tracking Order" title="Tracking Order" src="{{asset('images/solutions/icon-images/track.png')}}">
                                        <h5>Tracking Order</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="View Order Status" title="View Order Status" src="{{asset('images/solutions/icon-images/tracking.png')}}">
                                        <h5>View Order Status</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Choose Payment Method" title="Choose Payment Method" src="{{asset('images/solutions/icon-images/payment-method.png')}}">
                                        <h5>Choose Payment Method</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Order History" title="Order History" src="{{asset('images/solutions/icon-images/ordre-history.png')}}">
                                        <h5>Order History</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="SMS & Push Notification" title="SMS & Push Notification" src="{{asset('images/solutions/icon-images/sms-notification.png')}}">
                                        <h5>SMS & Push Notification</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Reviews & Rating" title="Reviews & Rating" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Reviews & Rating</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="AdminPanel">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Signup & Social Login" title="Signup & Social Login" src="{{asset('images/solutions/icon-images/login.png')}}">
                                        <h5>Signup & Social Login</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Advance Search" title="Advance Search" src="{{asset('images/solutions/icon-images/search-ad.png')}}">
                                        <h5>Advance Search</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Laundry Service Measurements" title="Laundry Service Measurements" src="{{asset('images/solutions/icon-images/Measurements.png')}}">
                                        <h5>Laundry Service Measurements</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Schedule Specific" title="Schedule Specific" src="{{asset('images/solutions/icon-images/schedule.png')}}">
                                        <h5>Schedule Specific</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Tracking Order" title="Tracking Order" src="{{asset('images/solutions/icon-images/track.png')}}">
                                        <h5>Tracking Order</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="View Order Status" title="View Order Status" src="{{asset('images/solutions/icon-images/tracking.png')}}">
                                        <h5>View Order Status</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Choose Payment Method" title="Choose Payment Method" src="{{asset('images/solutions/icon-images/payment-method.png')}}">
                                        <h5>Choose Payment Method</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Order History" title="Order History" src="{{asset('images/solutions/icon-images/ordre-history.png')}}">
                                        <h5>Order History</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="SMS & Push Notification" title="SMS & Push Notification" src="{{asset('images/solutions/icon-images/sms-notification.png')}}">
                                        <h5>SMS & Push Notification</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Reviews & Rating" title="Reviews & Rating" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Reviews & Rating</h5>
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
                        <img alt="first" title="first" src="{{ env('APP_CDN_URL') }}/images/solutions/e-learning/e-learning-screen-1.webp">
                    </div>
                    <div>
                    <img alt="second" title="second" src="{{ env('APP_CDN_URL') }}/images/solutions/e-learning/e-learning-screen-2.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/e-learning/e-learning-screen-3.webp">    
                    </div>
                    <div>
                    <img alt="fourth" title="fourth" src="{{ env('APP_CDN_URL') }}/images/solutions/e-learning/e-learning-screen-4.webp"> 
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/e-learning/e-learning-screen-5.webp"> 
                    </div>
                    <div>
                    <img alt="first" title="first" src="{{ env('APP_CDN_URL') }}/images/solutions/e-learning/e-learning-screen-6.webp"> 
                    </div>
                    <div>
                    <img alt="second" title="second" src="{{ env('APP_CDN_URL') }}/images/solutions/e-learning/e-learning-screen-7.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/e-learning/e-learning-screen-8.webp"> 
                    </div>
                    <div>
                    <img alt="fourth" title="fourth" src="{{ env('APP_CDN_URL') }}/images/solutions/e-learning/e-learning-screen-9.webp">
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/e-learning/e-learning-screen-10.webp"> 
                    </div>
                    
                <!-- </div> -->
                <!-- <div class="justify-content-between d-flex">
                    <div>
                        <img src="images/solutions/first.png" alt="">
                    </div>
                    <div>
                    <img src="images/solutions/second.png" alt="">
                    </div>
                    <div>
                    <img src="images/solutions/third.png" alt="">
                    </div>
                    <div>
                    <img src="images/solutions/fourth.png" alt="">
                    </div>
                    <div>
                    <img src="images/solutions/five.png" alt="">
                    </div>
                </div>
                <div class="justify-content-between d-flex">
                    <div>
                        <img src="images/solutions/first.png" alt="">
                    </div>
                    <div>
                    <img src="images/solutions/second.png" alt="">
                    </div>
                    <div>
                    <img src="images/solutions/third.png" alt="">
                    </div>
                    <div>
                    <img src="images/solutions/fourth.png" alt="">
                    </div>
                    <div>
                    <img src="images/solutions/five.png" alt="">
                    </div>
                </div>
                <div class="justify-content-between d-flex">
                    <div>
                        <img src="images/solutions/first.png" alt="">
                    </div>
                    <div>
                    <img src="images/solutions/second.png" alt="">
                    </div>
                    <div>
                    <img src="images/solutions/third.png" alt="">
                    </div>
                    <div>
                    <img src="images/solutions/fourth.png" alt="">
                    </div>
                    <div>
                    <img src="images/solutions/five.png" alt="">
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="get-a-quote py-3" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 d-flex justify-content-between quote-mr">
                    <img alt="quote-vector" title="quote-vector" src="{{asset('images/quote-vector.svg')}}" class="mr-4"> 
                    <div class="mr-auto quote-content">
                        <h2>Have An App Idea?</h2>
                        <p>Convert your app idea into a profitable business.</p>
                    </div>
                    <div class="quote-btn" data-toggle="modal" data-target="#exampleModalPreview" data-aos="fade-right" style="overflow-x: visible;"> <a href="javascript:void(0)">Get A Free Quote<img alt="right-arrow" title="right-arrow" src="{{asset('images/right-arrow(2).png')}}" aria-hidden="true"></a></div>
                </div>
            </div>
        </div>
    </div>
     @include('components.portfolioinner')
    <div class="solution-app-working pt-5" data-aos="fade-up" data-aos-duration="1200">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center" data-aos="zoom-in">
              <h3 class="font-h2 pb-2">How It <span>Works?</span></h3>
              <p>Simple Functioning Of Your E-learning App Helps Your Business Grow Faster</p>
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
    <div class="solution-bg-partner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/e-learning/e-learning-app-banner.webp');">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-12 d-flex align-items-center">
                    <div>
                        <h4>Take Your Business To Next Level With</h4>
                        <h3>On Demand E-learning App Solution</h3>
                        <p>We are an expert e-learning app development company providing custom and readymade mobile app services all around the globe.</p>
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