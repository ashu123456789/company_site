@extends('layout.app')

@section('content')

    <div class="solution-app-dev-banner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/grocery/grocery-banner.webp'),linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5))">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in" style="overflow-x: visible;">
                    <h1>On Demand Grocery App Development</h1>
                    <p>GIVING YOU TIME BEHIND FOR THE IMPORTANT STUFF!</p>
                    <div class="quote-btn" data-toggle="modal" data-target="#exampleModalPreview"><a href="javascript:void(0)">Get A Free Quote</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="free-consultation solution-app-consultation py-5">
        <div class="container">
            <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <div class="solution-consultaion-left">
                    <h3 class="font-h3">Best On Demand <span>Grocery App</span> Development Company</h3>
                        <p>On-demand grocery delivery app, instacart clone with Order Management and delivery app for single store and multi-store grocery app, aggregators by 
                           On-demand grocery app development. The pair motivating portions of Inspiration & Innovation, run the world. We have all the latest technology today, 
                           from the computer, which you are browsing this content to the stove you used for food, is the effect of such inspiration.</p>

                        <p>With the easy, user-friendly and outstanding improvement features of the app, expand your grocery market. Allow a hassle-free buying experience to your customers. 
                           Create your individual Grocery Delivery Mobile App.</p>   

                        <p>Deorwine Infotech is recognized as a one-stop solution for grocery app development. We have expert and well-versed grocery mobile app developers, that uniquely 
                           create the grocery mobile app with high expertise and dedicated app development team has delivered extremely functional and improve feature grocery mobile app 
                           development services to our customers with the better change. We're furnishing the readymade solution for grocery delivery mobile apps, analogous to the big- hand basket, 
                           grofers, and instacart.</p>   

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
                    <img alt="We Provide Benefits Of Our Grocery Delivery App" title="We Provide Benefits Of Our Grocery Delivery App" src="{{env('APP_CDN_URL') }}/images/solutions/grocery/grocery-vector.webp" class="img-fluid">
                </div>
                <div class="col-xl-6 col-lg-6 col-12 solution-right">
                    <h3 class="mb-4 font-h2" ><span>We Provide</span> Benefits Of Our Grocery Delivery App</h3>
                    <p>Building your own grocery store mobile app, you can get many benefits of this app the different platforms and versions of mobile as well 
                       as desktop. Your customers can appreciate this free application for a superior grocery shopping experience.</p>
                    <p><ul style="padding-left: 1rem"><li style="list-style: disc">Cost-effective Solution</li>
                    <li style="list-style: disc">User-Friendly Mobile App</li>
                    <li style="list-style: disc">Schedule Delivery Feature</li>
                    <li style="list-style: disc">In-App Chat</li>
                    <li style="list-style: disc">E-Wallet Integration</li>
                    <li style="list-style: disc">Online Payment Integration</li>
                    <li style="list-style: disc">View Statistics</li>
                    <li style="list-style: disc">Order GPS Tracking</li>
                    <li style="list-style: disc">Single-Vendor Mobile App</li>
                    <li style="list-style: disc">Multi-vendor Mobile App</li>
                    <li style="list-style: disc">Advanced features</li></ul></p>
                </div>
            </div>
        </div>
    </div>

    @include('components.business-model')
    
    <div class="solution-app-features py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in">
                <h3 class="font-h2">On-demand <span>Grocery App</span> Features</h3>
                    <p>On Demand Grocery App Development. Deorwine Infotech is a reputed grocery app development company providing on-demand grocery mobile app and same day grocery mobile app development for iPhone & Android.</p>
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
                                        <img alt="Login/SignUp" title="Login/SignUp" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/login1.png">
                                        <h5>Login/SignUp</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Social Signup" title="Social Signup" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/social-login.png">
                                        <h5>Social Signup</h5>
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
                                        <img alt="Browse Products" title="Browse Products" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/browse-product.png">
                                        <h5>Browse Products</h5>
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
                                        <img alt="Add To Cart" title="Add To Cart" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/add-to-cart.png">
                                        <h5>Add To Cart</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Add To Wish List" title="Add To Wish List" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/add-to-wishlist.png">
                                        <h5>Add To Wish List</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Schedule Delivery" title="Schedule Delivery" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/shedule-delivery.png">
                                        <h5>Schedule Delivery</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Manage Address" title="Manage Address" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/sms-notification.png">
                                        <h5>Manage Address</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Order Tracking System" title="Order Tracking System" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/order-traking.png">
                                        <h5>Order Tracking System</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Add To Cart / Process" title="Add To Cart / Process" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/add-to-cart-process.png">
                                        <h5>Add To Cart / Process</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Promocode / Discounts" title="Promocode / Discounts" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/promo.png">
                                        <h5>Promocode / Discounts</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Multiple Payment Options" title="Multiple Payment Options" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/mutiple-currency.png">
                                        <h5>Multiple Payment Options</h5>
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
                                        <img alt="Multiple Language Support" title="Multiple Language Support" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/mutilingual.png">
                                        <h5>Multiple Language Support</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Store Location" title="Store Location" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/store-location.png">
                                        <h5>Store Location</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Store PickUp" title="Store PickUp" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/pickup-delivery.png">
                                        <h5>Store PickUp</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Managing Profile" title="Managing Profile" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/profile-management.png">
                                        <h5>Managing Profile</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Live Order Tracking" title="Live Order Tracking" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/order-traking.png">
                                        <h5>Live Order Tracking</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="SMS & Notification" title="SMS & Notification" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/sms-notification.png">
                                        <h5>SMS & Notification</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Offer Zone" title="Offer Zone" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/offer-zone.png">
                                        <h5>Offer Zone</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Review & Rating" title="Review & Rating" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Review & Rating</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Setting" title="Setting" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/service-manage.png"">
                                        <h5>Setting</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Support & Feedback" title="Support & Feedback" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/support.png">
                                        <h5>Support & Feedback</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="online">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Login" title="Login" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/login1.png">
                                        <h5>Login</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Accept / Decline Order" title="Accept / Decline Order" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/accept-decline-order.png">
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
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Managed Profile" title="Managed Profile" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/profile-management.png">
                                        <h5>Managed Profile</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="AdminPanel">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Login" title="Login" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/login1.png">
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
                                    <img alt="Store Management" title="Store Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/schedule.png">
                                        <h5>Store Management</h5>
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
                                        <img alt="Product Management" title="Product Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/tracking.png">
                                        <h5>Product Management</h5>
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
                                    <img alt="Payment/Payout" title="Payment/Payout" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payout-process.png">
                                        <h5>Payment/Payout</h5>
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
                                    <img alt="Multiple Language Management" title="Multiple Language Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/mutilingual.png">
                                        <h5>Multiple Language Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Multiple Currency Management" title="Multiple Currency Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/mutiple-currency.png">
                                        <h5>Multiple Currency Management</h5>
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
                                    <img alt="Review & Rating Handling" title="Review & Rating Handling" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
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
                    <img alt="first" title="first" src="{{ env('APP_CDN_URL') }}/images/solutions/grocery/grocery-screen-1.webp">
                    </div>
                    <div>
                    <img alt="second" title="second" src="{{ env('APP_CDN_URL') }}/images/solutions/grocery/grocery-screen-2.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/grocery/grocery-screen-3.webp">    
                    </div>
                    <div>
                    <img alt="fourth" title="fourth" src="{{ env('APP_CDN_URL') }}/images/solutions/grocery/grocery-screen-4.webp"> 
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/grocery/grocery-screen-5.webp"> 
                    </div>
                    <div>
                    <img alt="six" title="six" src="{{ env('APP_CDN_URL') }}/images/solutions/grocery/grocery-screen-6.webp"> 
                    </div>
                    <div>
                    <img alt="seven" title="seven" src="{{ env('APP_CDN_URL') }}/images/solutions/grocery/grocery-screen-7.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/grocery/grocery-screen-3.webp"> 
                    </div>
                    <div>
                    <img alt="fourth" title="fourth" src="{{ env('APP_CDN_URL') }}/images/solutions/grocery/grocery-screen-4.webp">
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/grocery/grocery-screen-2.webp"> 
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
              <p>Simple Functioning Of Your Grocery App Helps Your Business Grow Faster</p>
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
    <div class="solution-bg-partner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/grocery/grocery-app-booking.webp');">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-12 d-flex align-items-center">
                    <div>
                        <h4>Take Your Business To Next Level With</h4>
                        <h3>On Demand Grocery  App Solution</h3>
                        <p>We are an expert Grocery app development company providing custom and readymade mobile app services all around the globe.</p>
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