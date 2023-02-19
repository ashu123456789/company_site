@extends('layout.app')

@section('content')

    <div class="solution-app-dev-banner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/crowdfunding/crowdfunding-banner.webp'),linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5))">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in" style="overflow-x: visible;">
                    <h1>On Demand Crowdfunding Apps Development</h1>
                    <p>GIVING YOU TIME BEHIND FOR THE IMPORTANT STUFF!</p>
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
                    <h3 class="font-h3">On Demand <span>Crowdfunding App</span> Development Company</h3>
                        <p>Crowdfunding websites and app Development Company support start-ups, entrepreneurs, charities, social workers, or anyone with numerous ideas to gather funds for their venture or project. With an online system, 
                          funds can be gathered efficiently and fast from across the world. The crowdfunding solution is a comprehensive application package on both platforms Android and iOS apps, a website, and an admin panel for controlling 
                          and managing the system and viewing reports and statistics. We generated the script that has based on the analysis of our individual, professional crowd fund supervisors to create the website with a business strategy 
                          including the campaign and generating lasting brand awareness for your startups and organizations.</p>

                        <p>When you have an idea; crowdfunding, you may be considering that you are performing this technology to fund all appearances of your app. In most scenarios, you can take crowdfunding to raise money to make specific 
                           components of the app especially. You could also obtain capital to campaign for an existing mobile application that is immediately available to the users. The main purpose of having Crowdfunding Websites is to use your 
                           beneficial concept or app to perform it head n shoulders above.</p>   

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
                    <img alt="crowdfunding" title="crowdfunding" src="{{env('APP_CDN_URL') }}/images/solutions/crowdfunding/crowdfunding-vector.webp" class="img-fluid">
                </div>
                <div class="col-xl-6 col-lg-6 col-12 solution-right">
                    <h3 class="mb-4 font-h2" ><span>Crowdfunding Solution</span> App Development Company</h3>
                    <p>Crowdfunding Mobile Apps are extremely in demand these days, as this has converted into a conventional investment method. Whether it is a small startup, charitable organization, or individual 
                       company this purpose can be applied to a wide group of possible funders. Various people consider creating a crowdfunding app, exceptionally if they are short of money. To make a great crowdfunding app, 
                       you have to set your own measures high. If you made in an outward way, crowdfunding apps can transform into a successful business.</p>
                    <p>Deorwine Infotech offers scalable and customized Crowdfunding App Development services that’s purpose to support individuals, companies, and entrepreneurs. Our highly experienced app developers, develops 
                       a team with the most advanced tools and advanced technologies. With our crowdfunding app solution, you can preserve time and reduce cost as through our mobile app we deliver the fundraising script, which is the 
                       clone of gofundme, Kickstarter, and Indiegogo. One of the best Crowdfunding App Development Company in ownership (share) investment, property, and peer-to-peer investment, tech assistance is targeted users’ specific 
                       requirements.  Deorwine Infotech assists you to get a clear insight into how engaged customers are going to be in your product of ideas, goods, and services. For example, if you do not accept any fund collection and 
                       you will get to discover that the require placing in more hard work into your mobile or web-based app to execute it more approved and well-liked.</p>
                </div>
            </div>
        </div>
    </div>


    @include('components.business-model')
    <div class="solution-app-features py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in">
                <h3 class="font-h2">On-demand <span>Crowdfunding App</span> Features</h3>
                    <p>On Demand Crowdfunding App Development. Deorwine Infotech is a reputed crowdfunding app development company providing on-demand crowdfunding mobile app and same day crowdfunding mobile app development for iPhone & Android.</p>
                </div>
                <div class="app-features-tabs">
                    <ul id="tabs" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="app-features"><a href="#all" class="active" role="tab" data-toggle="tab">Customer App</a></li>
                        <li role="presentation" class="app-features"><a href="#online" role="tab" data-toggle="tab">Organization App</a></li>
                        <li role="presentation" class="app-features"><a href="#AdminPanel" role="tab" data-toggle="tab">Admin Panel</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active show" id="all">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Social Login" title="Social Login" src="{{asset('images/solutions/icon-images/login.png')}}">
                                        <h5>Social Login</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Registration" title="Registration" src="{{asset('images/solutions/icon-images/search-ad.png')}}">
                                        <h5>Registration</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Search With Filters" title="Search With Filters" src="{{asset('images/solutions/icon-images/Measurements.png')}}">
                                        <h5>Search With Filters</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Details Of Organization" title="Details Of Organization" src="{{asset('images/solutions/icon-images/schedule.png')}}">
                                        <h5>Details Of Organization</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Create Campaign" title="Create Campaign" src="{{asset('images/solutions/icon-images/track.png')}}">
                                        <h5>Create Campaign</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Comments on Campaign" title="Comments on Campaign" src="{{asset('images/solutions/icon-images/tracking.png')}}">
                                        <h5>Comments on Campaign</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Online Payment" title="Online Payment" src="{{asset('images/solutions/icon-images/payment-method.png')}}">
                                        <h5>Online Payment</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Auto Payment" title="Auto Payment" src="{{asset('images/solutions/icon-images/ordre-history.png')}}">
                                        <h5>Auto Payment</h5>
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
                                        <img alt="Check History" title="Check History" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Check History</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="A Referral System" title="A Referral System" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>A Referral System</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Check Work & Update" title="Check Work & Update" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Check Work & Update</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Push Notifications" title="Push Notifications" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Push Notifications</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Pushing The Updates" title="Pushing The Updates" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Pushing The Updates</h5>
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
                                        <img alt="Social Sharing" title="Social Sharing" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Social Sharing</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="online">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Easy signup" title="Easy signup" src="{{asset('images/solutions/icon-images/login.png')}}">
                                        <h5>Easy signup</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Setup Organization" title="Setup Organization" src="{{asset('images/solutions/icon-images/search-ad.png')}}">
                                        <h5>Setup Organization</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="View Received Fund Details" title="View Received Fund Details" src="{{asset('images/solutions/icon-images/Measurements.png')}}">
                                        <h5>View Received Fund Details</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="View Payment Details" title="View Payment Details" src="{{asset('images/solutions/icon-images/schedule.png')}}">
                                        <h5>View Payment Details</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Manage Reports" title="Manage Reports" src="{{asset('images/solutions/icon-images/track.png')}}">
                                        <h5>Manage Reports</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Occasion Invitation To Customer" title="Occasion Invitation To Customer" src="{{asset('images/solutions/icon-images/tracking.png')}}">
                                        <h5>Occasion Invitation To Customer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Manage Customer" title="Manage Customer" src="{{asset('images/solutions/icon-images/payment-method.png')}}">
                                        <h5>Manage Customer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Manage all Campaign" title="Manage all Campaign" src="{{asset('images/solutions/icon-images/ordre-history.png')}}">
                                        <h5>Manage all Campaign</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Filter Comments" title="Filter Comments" src="{{asset('images/solutions/icon-images/sms-notification.png')}}">
                                        <h5>Filter Comments</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Track Campaign / funding" title="Track Campaign / funding" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Track Campaign / funding</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Report /  Exports" title="Report /  Exports" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Report /  Exports</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="AdminPanel">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Dashboard" title="Dashboard" src="{{asset('images/solutions/icon-images/login.png')}}">
                                        <h5>Dashboard</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Login" title="Login" src="{{asset('images/solutions/icon-images/search-ad.png')}}">
                                        <h5>Login</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Manage Customers" title="Manage Customers" src="{{asset('images/solutions/icon-images/Measurements.png')}}">
                                        <h5>Manage Customers</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Manage Campaign" title="Manage Campaign" src="{{asset('images/solutions/icon-images/schedule.png')}}">
                                        <h5>Manage Campaign</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Manage Organizations" title="Manage Organizations" src="{{asset('images/solutions/icon-images/track.png')}}">
                                        <h5>Manage Organizations</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Manage Payment" title="Manage Payment" src="{{asset('images/solutions/icon-images/tracking.png')}}">
                                        <h5>Manage Payment</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Manage Rewards" title="Manage Rewards" src="{{asset('images/solutions/icon-images/payment-method.png')}}">
                                        <h5>Manage Rewards</h5>
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
                                    <img alt="View History" title="View History" src="{{asset('images/solutions/icon-images/sms-notification.png')}}">
                                        <h5>View History</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Reviews & Rating" title="Reviews & Rating" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Reviews & Rating</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Report / Exports" title="Report / Exports" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Report / Exports</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Settings" title="Settings" src="{{asset('images/solutions/icon-images/rating-review.png')}}">
                                        <h5>Settings</h5>
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
                        <img alt="first" title="first" src="{{ env('APP_CDN_URL') }}/images/solutions/crowdfunding/crowdfunding-screens-0.webp">
                    </div>
                    <div>
                    <img alt="second" title="second" src="{{ env('APP_CDN_URL') }}/images/solutions/crowdfunding/crowdfunding-screens-1.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/crowdfunding/crowdfunding-screens-2.webp">    
                    </div>
                    <div>
                    <img alt="fourth" title="fourth" src="{{ env('APP_CDN_URL') }}/images/solutions/crowdfunding/crowdfunding-screens-3.webp"> 
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/crowdfunding/crowdfunding-screens-4.webp"> 
                    </div>
                    <div>
                    <img alt="first" title="first" src="{{ env('APP_CDN_URL') }}/images/solutions/crowdfunding/crowdfunding-screens-5.webp"> 
                    </div>
                    <div>
                    <img alt="second" title="second" src="{{ env('APP_CDN_URL') }}/images/solutions/crowdfunding/crowdfunding-screens-6.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/crowdfunding/crowdfunding-screens-7.webp"> 
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
              <p>Simple Functioning Of Your Crowdfunding App Helps Your Business Grow Faster</p>
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
    <div class="solution-bg-partner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/crowdfunding/crowdfunding-app-banner.webp');">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-12 d-flex align-items-center">
                    <div>
                        <h4>Take Your Business To Next Level With</h4>
                        <h3>On Demand Crowdfunding App Solution</h3>
                        <p>We are an expert Crowdfunding app development company providing custom and readymade mobile app services all around the globe.</p>
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