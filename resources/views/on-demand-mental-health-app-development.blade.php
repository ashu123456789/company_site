@extends('layout.app')

@section('content')

    <div class="solution-app-dev-banner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/mental_app/mental-health-banner.webp'),linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5))">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in" style="overflow-x: visible;">
                    <h1>On Demand Mental Health App Development</h1>
                    <p></p>
                    <div class="quote-btn" data-toggle="modal" data-target="#exampleModalPreview"> <a href="javascript:void(0)">Get a free quote</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="free-consultation solution-app-consultation py-5">
        <div class="container">
            <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <div class="solution-consultaion-left">
                    <h3 class="font-h3">On Demand <span>Mental Health</span> Development Solutions</h3>
                        <p>Now the recent statistics researched by the Anxiety & Depression Association of America (ADAA) explain that 40 million adults 
                           in the US suffer from Anxiety Disorders. As you know that the global statistics say that nearly 75% of people with mental disorders 
                           continue untreated in growing countries, which confirms the necessity of convenient and efficient solutions for treatment. 
                           A Mental Health App provides a way to counselling services utilizing a one-to-many delivery model that’s enabling you to reach more 
                           people at a time.</p>

                        <p>On the other hand, a lot of  mental health people want to obtain internal balance and become happier. Few people both with and without 
                           mental disorders have previously explored the advantages of health solutions for mental health. These clarifications should be the best 
                           choice for therapy as they are easy to access if it is accessible for all smartphone users, and has completely secure & private. 
                           The first mobile app-based mental health solutions were building for people undergoing post-traumatic stress disorder (PTSD) and those 
                           with psychic and behavioral troubles. Today, mobile apps are also created for healthy users who only want to stay mentally happy and peaceful.</p>
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
                    <img alt="mental-app" title="mental-app" src="{{env('APP_CDN_URL') }}/images/solutions/mental_app/mental-health-vector.webp" class="img-fluid">
                </div>
                <div class="col-xl-6 col-lg-6 col-12 solution-right">
                    <h3 class="mb-4 font-h2" ><span>Mental Health</span> App Development At Deorwine</h3>
                    <p>Deorwine Infotech has a durable knowledge to build a Mental Health App where several people can use, and take their treatment easily. To make their life happier for everyone we are working 
                       on our planning to provide a complete healthcare solution to people that are causing lots of reasons where people are not focusing on their health, mental issues and time, etc. So according 
                       to our research people needs a better and easy way to overcome their stress, mental problems that overcome the solution will not disturb your daily working life. Simply in a one-tap, people 
                       can get all solutions about their health.</p>
                    <p>We always focus on our object-oriented solution, which has made our work more successful. Moreover, the same way we have applied to the healthcare sector, mental health Applications can help 
                       you to know complete details about your issues, ask a specialist, take treatment from them, Join Live videos, find a better solution on that platform. As you know that the public health organizations 
                       such as the U.S. National Institute of Mental Health (NIMH) and the UK’s National Health Service (NHS) have guided mental health applications as cost-effective solutions and scalable solutions to discuss 
                       mental health treatment passage.</p>
                </div>
            </div>
        </div>
    </div>

    @include('components.business-model')
    <div class="solution-app-features py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in">
                <h3 class="font-h2">On-demand <span>Mental Health</span> Features</h3>
                    <p>On Demand Mental Health App Development. Deorwine Infotech is a reputed mental health app development company providing on-demand mental health mobile app and same day mental health mobile app development for iPhone & Android.</p>
                </div>
                <div class="app-features-tabs">
                    <ul id="tabs" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="app-features"><a href="#all" class="active" role="tab" data-toggle="tab">Customer App</a></li>
                        <li role="presentation" class="app-features"><a href="#online" role="tab" data-toggle="tab">Therapy App</a></li>
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
                                        <img alt="Sign-Up Process" title="Sign-Up Process" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/search-ad.png">
                                        <h5>Sign-Up Process</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Questionnaires" title="Questionnaires" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/Measurements.png">
                                        <h5>Questionnaires</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Schedule Specific" title="Schedule Specific" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/schedule.png">
                                        <h5>Schedule Specific</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Self-Monitoring" title="Self-Monitoring" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/track.png">
                                        <h5>Self-Monitoring</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="View Therapist Profile" title="View Therapist Profile" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/tracking.png">
                                        <h5>View Therapist Profile</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Treatment Available" title="Treatment Available" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Treatment Available</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="View Treatment Detail" title="View Treatment Detail" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/ordre-history.png">
                                        <h5>View Treatment Detail</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Review & Rating" title="Review & Rating" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/sms-notification.png">
                                        <h5>Review & Rating</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="In App Chat" title="In App Chat" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>In App Chat</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Push Notification" title="Push Notification" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Push Notification</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Video / Audio Call" title="Video / Audio Call" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Video / Audio Call</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Community / Discussion forum" title="Community / Discussion forum" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Community / Discussion forum</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Live Session Available" title="Live Session Available" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Live Session Available</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Support Groups" title="Support Groups" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Support Groups</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Progress Status" title="Progress Status" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Progress Status</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Subscribe Plans" title="Subscribe Plans" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Subscribe Plans</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Payment Gateway" title="Payment Gateway" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Payment Gateway</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Reminder For Plans" title="Reminder For Plans" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Reminder For Plans</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Help / Support" title="Help / Support" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Help / Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="online">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Login" title="Login" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/login.png">
                                        <h5>Login</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Accept / Reject Request" title="Accept / Reject Request" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/search-ad.png">
                                        <h5>Accept / Reject Request</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Set Availability" title="Set Availability" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/Measurements.png">
                                        <h5>Set Availability</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Session Alert" title="Session Alert" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/schedule.png">
                                        <h5>Session Alert</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Ask Questions" title="Ask Questions" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/track.png">
                                        <h5>Ask Questions</h5>
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
                                    <img alt="Manage Profile" title="Manage Profile" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Manage Profile</h5>
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
                                    <img alt="Receive Payment" title="Receive Payment" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/sms-notification.png">
                                        <h5>Receive Payment</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Schedule Live Sessions" title="Schedule Live Sessions" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Schedule Live Sessions</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Reviews & Feedback" title="Reviews & Feedback" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Reviews & Feedback</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="View Feedback" title="View Feedback" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>View Feedback</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="History" title="History" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>History</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Help / Support" title="Help / Support" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Help / Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="AdminPanel">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Login" title="Login" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/login.png">
                                        <h5>Login</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Dashboard" title="Dashboard" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/search-ad.png">
                                        <h5>Dashboard</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Manage Customer" title="Manage Customer" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/Measurements.png">
                                        <h5>Manage Customer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Manage To Therapist" title="Manage To Therapist" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/schedule.png">
                                        <h5>Manage To Therapist</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Manage All requests" title="Manage All requests" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/track.png">
                                        <h5>Manage All requests</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Service Management" title="Service Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/tracking.png">
                                        <h5>Service Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Subscription Manage" title="Subscription Manage" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Subscription Manage</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Push Notification" title="Push Notification" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/ordre-history.png">
                                        <h5>Push Notification</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Manage Live Sessions" title="Manage Live Sessions" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/sms-notification.png">
                                        <h5>Manage Live Sessions</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Manage all Content" title="Manage all Content" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Manage all Content</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Reports / Export" title="Reports / Export" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Reports / Export</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Help / Support" title="Help / Support" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Help / Support</h5>
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
                        <img alt="first" title="first" src="{{ env('APP_CDN_URL') }}/images/solutions/mental_app/mental-health-screens-1.webp">
                    </div>
                    <div>
                    <img alt="second" title="second" src="{{ env('APP_CDN_URL') }}/images/solutions/mental_app/mental-health-screens-2.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/mental_app/mental-health-screens-3.webp">    
                    </div>
                    <div>
                    <img alt="fourth" title="fourth" src="{{ env('APP_CDN_URL') }}/images/solutions/mental_app/mental-health-screens-4.webp"> 
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/mental_app/mental-health-screens-5.webp"> 
                    </div>
                    <div>
                    <img alt="first" title="first" src="{{ env('APP_CDN_URL') }}/images/solutions/mental_app/mental-health-screens-6.webp"> 
                    </div>
                    <div>
                    <img alt="second" title="second" src="{{ env('APP_CDN_URL') }}/images/solutions/mental_app/mental-health-screens-7.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/mental_app/mental-health-screens-8.webp"> 
                    </div>
                    <div>
                    <img alt="fourth" title="fourth" src="{{ env('APP_CDN_URL') }}/images/solutions/mental_app/mental-health-screens-9.webp">
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/mental_app/mental-health-screens-10.webp"> 
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
                    <div class="quote-btn" data-toggle="modal" data-target="#exampleModalPreview" data-aos="fade-right" style="overflow-x: visible;"> <a href="javascript:void(0)">Get a free quote <img alt="right-arrow" title="right-arrow" src="{{asset('images/right-arrow(2).png')}}" aria-hidden="true"></a></div>
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
              <p>Simple Functioning Of Your Mental Health App Helps Your Business Grow Faster</p>
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
    <div class="solution-bg-partner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/mental_app/mental-health-app-banner.webp');">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-12 d-flex align-items-center">
                    <div>
                        <h4>Take Your Business To Next Level With</h4>
                        <h3>On Demand mental health App Solution</h3>
                        <p>We are an expert mental health app development company providing custom and readymade mobile app services all around the globe.</p>
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