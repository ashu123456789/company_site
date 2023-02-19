@extends('layout.app')

@section('content')

    <div class="solution-app-dev-banner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/laundry/laundry-banner.webp'),linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5))">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in" style="overflow-x: visible;">
                    <h1>On Demand Laundry App Development</h1>
                    <p>On-demand Laundry & Dry Cleaning App Development. Deorwine Infotech is a reputed laundry app
                        development company providing on-demand laundry mobile app and same day laundry mobile app
                        development for iPhone & Android.</p>
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
                    <h3 class="font-h3">Complete <span>Laundry & Dry Cleaning</span> App Development</h3>
                        <p>Being in the best on demand laundry app development Company, we develop complete on-demand
                            app and provides a solution. Our Mobile app development team is all determined to make the
                            on-demand app revolution in various industries that require instant provisioning of benefits and
                            services. Thus, we had a very welcoming look at the laundry service market.</p>
                        <p>With such an approach and understanding, people are demanding many laundry app like Washio,
                            Cleanly, Zipjet. Thus, being a popular laundry service provider, if you want to give your
                            customers quick and well-organized laundry services, manage the washing schedule with
                            compact
                            batch timings, staff management, order management, etc. many more then a one-stop solution
                            for
                            all the issues in laundry app development.</p>
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
                    <img alt="Get Uber for Dry Cleaning Services Solution" title="Get Uber for Dry Cleaning Services Solution" src="{{env('APP_CDN_URL') }}/images/solutions/laundry/laundry.webp" class="img-fluid">
                </div>
                <div class="col-xl-6 col-lg-6 col-12 solution-right">
                    <h3 class="mb-4 font-h2" ><span>Get Uber</span> for Dry Cleaning Services Solution</h3>
                    <p>Yes, App like Uber for On-Demand laundry and dry cleaning has made new life more relaxed. Provide your customers to book the laundry services, 
                       choose the period to apprehend washed clothes, and dry-cleaned carpet. When you create your mobile app with us, we’ll provide you with an extensive 
                       and powerful on-demand laundry app solution, with advanced and enhanced features. With this, we give support and are 100% responsive; easy to use a 
                       separate app for customers, delivery agents, admin, or managers. Furthermore, it can be created on all platforms, including Android and iOS.</p>
                    <p>We are a professional on-demand laundry and Dry cleaning app development company providing custom and readymade mobile app services all around the globe. 
                       We will help you build an effective dry cleaning app to deliver to your customers and make the target ROI.</p>
                </div>
            </div>
        </div>
    </div>

     @include('components.business-model')

    <div class="solution-app-features py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in">
                <h3 class="font-h2">On-demand <span>Laundry App</span> Features</h3>
                    <p>On Demand Laundry & Dry Cleaning App Development. Deorwine Infotech is a reputed laundry app development company providing on-demand laundry mobile app and same day laundry mobile app development for iPhone & Android.</p>
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
                                        <img alt="Login" title="Login" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/login1.png">
                                        <h5>Login/SignUp</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="social" title="social" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/social-login.png">
                                        <h5>Social login</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Laundry Service Measurements" title="Laundry Service Measurements" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/LaundryServicesManagement.png">
                                        <h5>Laundry Services Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Category Management" title="Category Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/category-management.png">
                                        <h5>Category Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Advance Search" title="Advance Search" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/search-ad.png">
                                        <h5>Advance Search</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Location Based Search" title="Location Based Search" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/track.png">
                                        <h5>Location Based Search</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Zipcode Search" title="Zipcode Search" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/zipcode-search.png">
                                        <h5>Zipcode Search</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Cart Management" title="Cart Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/ordre-history.png">
                                        <h5>Cart Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Order Scheduling" title="Order Scheduling" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/order-sheduling.png">
                                        <h5>Order Scheduling</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Order Place" title="Order Place" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/order-place.png">
                                        <h5>Order Place</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Promo Codes" title="Promo Codes" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/promo.png">
                                        <h5>Promo Codes</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Choose Payment Method" title="Choose Payment Method" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/configure-payment.png">
                                        <h5>Choose Payment Method</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Order History" title="Order History" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/order-histor2.png">
                                        <h5>Order History</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Order Detail" title="Order Detail" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/order-details.png">
                                        <h5>Order Detail</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Order Tracking" title="Order Tracking" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/order-traking.png">
                                        <h5>Order Tracking</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Multi Currency Support" title="Multi Currency Support" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/mutiple-currency.png">
                                        <h5>Multiple Currency Support</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Multi Language Support" title="Multi Language Support" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/mutilingual.png">
                                        <h5>Multiple Language Support</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="SMS & Push Notification" title="SMS & Push Notification" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/sms-notification.png">
                                        <h5>SMS & Push Notification</h5>
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
                                        <img alt="Support" title="Support" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/support.png">
                                        <h5>Support</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Profile Management" title="Profile Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/profile-management.png">
                                        <h5>Profile Management</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="online">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="login" title="login" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/login1.png">
                                        <h5>Login</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Decline Order" title="Decline Order" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/accept-decline-order.png">
                                        <h5>Accept / Decline Order</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Delivery History" title="Delivery History" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/delivery-history.png">
                                        <h5>Delivery History</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Order Detail" title="Order Detail" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/order-details.png">
                                        <h5>Order Detail</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Order Status Update" title="Order Status Update" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/order-status-update.png">
                                        <h5>Order Status Update</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Payment History" title="Payment History" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/order-histor2.png">
                                        <h5>Payment History</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Payout Process" title="Payout Process" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payout-process.png">
                                        <h5>Payout Process</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Geo Location" title="Geo Location" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/geo-location.png">
                                        <h5>Geo Location</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Multi Language Support" title="Multi Language Support" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/mutilingual.png">
                                        <h5>Multi Language Support</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Multi Currency Support" title="Multi Currency Support" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/mutiple-currency.png">
                                        <h5>Multi Currency Support</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="SMS & Push Notification" title="SMS & Push Notification" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/sms-notification.png">
                                        <h5>SMS & Push Notification</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="offline">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Signup & Social Login" title="Signup & Social Login" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/login1.png">
                                        <h5>Login/SignUp</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Service Management" title="Service Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/service-manage.png">
                                        <h5>Service Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Order Management" title="Order Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/order-management.png">
                                        <h5>Order Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Order Detail" title="Order Detail" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/order-details1.png">
                                        <h5>Order Detail</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Multiple Language Support" title="Multiple Language Support" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/mutilingual.png">
                                        <h5>Multiple Language Support</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Multiple Currency Support" title="Multiple Currency Support" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/mutiple-currency.png">
                                        <h5>Multiple Currency Support</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Order History" title="Order History" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/ordre-history.png">
                                        <h5>Order History</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Driver Management" title="Driver Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/driver-management.png">
                                        <h5>Driver Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Promocode/Discount" title="Promocode/Discount" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/promo.png">
                                        <h5>Promocode/Discount</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Drive Payment Manage" title="Drive Payment Manage" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/driver-payment-manage.png">
                                        <h5>Drive Payment Manage</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Review Management" title="Review Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Review Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Profile Setting" title="Profile Setting" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/profile-management.png">
                                        <h5>Profile Setting</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Push Notification" title="Push Notification" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/sms-notification.png">
                                        <h5>Push Notification</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Support Or Order" title="Support Or Order" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/support.png">
                                        <h5>Support Or Order</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="AdminPanel">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Signup & Social Login" title="Signup & Social Login" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/login1.png">
                                        <h5>Login</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Dashboard / Status Management" title="Dashboard / Status Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/dashboard-status1.png">
                                        <h5>Dashboard / Status Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Customer" title="Customer" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/customer.png">
                                        <h5>Customer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Service Provide" title="Service Provide" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/service-provider.png">
                                        <h5>Service Provide / Vendor</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Drive Management" title="Drive Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/driver-management.png">
                                        <h5>Drive Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Category" title="Category" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/category.png">
                                        <h5>Category</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Choose Payment Method" title="Choose Payment Method" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/service-management.png">
                                        <h5>Services</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Order Management" title="Order Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/ordre-history.png">
                                        <h5>Order Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Delivery Management" title="Delivery Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/delivery-management.png">
                                        <h5>Delivery Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Payment / Payout" title="Payment / Payout" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payout-process.png">
                                        <h5>Payment / Payout</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Push Notification" title="Push Notification" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/sms-notification.png">
                                        <h5>Push Notification</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Multile Language Management" title="Multile Language Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/mutilingual.png">
                                        <h5>Multile Language Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Multile Currency Management" title="Multile Currency Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/mutiple-currency.png">
                                        <h5>Multile Currency Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Support Tracking" title="Support Tracking" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/support-traking.png">
                                        <h5>Support Tracking</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Banner Management" title="Banner Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/banner-management.png">
                                        <h5>Banner Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Zipcode Management" title="Zipcode Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/zipcode-management.png">
                                        <h5>Zipcode Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Reviews & Rating" title="Reviews & Rating" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Review & Rating Handling</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Reports" title="Reports" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/reports.png">
                                        <h5>Reports</h5>
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
                    <img alt="first" title="first" src="{{ env('APP_CDN_URL') }}/images/solutions/laundry/first.webp">
                    </div>
                    <div>
                    <img alt="second" title="second" src="{{ env('APP_CDN_URL') }}/images/solutions/laundry/second.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/laundry/third.webp">    
                    </div>
                    <div>
                    <img alt="fourth" title="fourth" src="{{ env('APP_CDN_URL') }}/images/solutions/laundry/fourth.webp"> 
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/laundry/five.webp"> 
                    </div>
                    <div>
                    <img alt="first" title="first" src="{{ env('APP_CDN_URL') }}/images/solutions/laundry/first.webp">
                    </div>
                    <div>
                    <img alt="second" title="second" src="{{ env('APP_CDN_URL') }}/images/solutions/laundry/second.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/laundry/third.webp"> 
                    </div>
                    <div>
                    <img alt="fourth" title="fourth" src="{{ env('APP_CDN_URL') }}/images/solutions/laundry/fourth.webp">
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/laundry/five.webp"> 
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
              <p>Simple Functioning Of Your Laundry App Helps Your Business Grow Faster</p>
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
                        <h5>Get Orders</h5>
                        <p>Accept, Decline, Process Order</p>
                    </div>
                </div>
                <div class="app-working-1 d-flex">
                    <span class="mr-4">2</span>
                    <div>
                        <h5>Order Tracking/Update</h5>
                        <p>Tracking Order, Status update, Track On Map</p>
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
                        <h5>Payout/Order History</h5>
                        <p>Send Pay Request, Orders History</p>
                    </div>
                </div>
                <div class="app-working-1 d-flex">
                    <span class="mr-4">5</span>
                    <div>
                        <h5>Review/Feedback</h5>
                        <p>Get Review/Feedback From Customer</p>
                    </div>
                </div>
            </div> 
          </div>
        </div>
    </div>
    <div class="solution-bg-partner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/laundry/laundry-bg-partner.webp');">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-12 d-flex align-items-center">
                    <div>
                        <h4>Take Your Business To Next Level With</h4>
                        <h3>On Demand Laundry App Soution</h3>
                        <p>We are an expert laundry & Dry cleaning app development company providing custom and readymade mobile app services all around the globe.</p>
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