@extends('layout.app')

@section('content')

    <div class="solution-app-dev-banner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/doctor_appointment/doctor-appointment-banner.webp'),linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5))">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in" style="overflow-x: visible;">
                    <h1>Doctor Appointment App Development Company</h1>
                    <p>Compassionate care, advanced medicine, your care is at your home or close to home</p>
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
                    <h3 class="font-h3">On Demand <span>Doctor Appointment App</span> Development Solutions</h3>
                        <p>Deorwine supports you to balance your healthcare business with its wide experience in the on-demand mobile app development. 
                           We design and build mobile app that make appointments easy for patients to book preferred doctors, schedule appointments, 
                           share reports, reminders and make the online payment transaction. Let’s build mobile app that take the doctor-booking problem 
                           with our developers from Android and iOS platforms to support you. Convert your ideas into a mobile app that makes it simple 
                           for a health seeker.</p>

                        <p>Now you can allow your customers to book doctor appointments & provide them home doctor service. Deorwine Infotech develops a 
                           doctor app for iPhone & Android. The app connects doctors and users and creates business for you as an aggregator. The need for 
                           a user-friendly mobile app for doctor appointment applications is rapidly expanding in the global healthcare sector. We aim to 
                           provide the best on-demand app development solutions to the business partners in the healthcare industry to improve the end-users 
                           reach out to the objective audience efficiently.</p>
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
                    <img alt="Doctor Appointment App" title="Doctor Appointment App" src="{{env('APP_CDN_URL') }}/images/solutions/doctor_appointment/doctor-appointment-vector.webp" class="img-fluid">
                </div>
                <div class="col-xl-6 col-lg-6 col-12 solution-right">
                    <h3 class="mb-4 font-h2" ><span>Benefits of Doctor</span> Appointment App Development</h3>
                    <p>Doctor appointment app support of the hospital application for the patient, the doctor will get all the information of the patient from the doctor's application 
                       and give the proper treatment by telling the assistant doctor or nurse. The benefit of medical aps for a doctor is additionally helpful once a patient gets discharged 
                       from the hospital or clinic and searching for improvement assistance from a doctor. In such a situation, the doctor can get patient treatment history at their single touch 
                       using an app and provide the most powerful advice.</p>
                    <p>We exceed in mobile app development a centralized platform for Doctors and patients. App are developed for booking patient consultation from smartphone devices or desktop computers. 
                       Automatic, innovative and feature-packed application help patients as they can register themselves and apply it to book an appointment and keep the history in one place. A high-performance 
                       appointment booking solution ensures reliable health-care and simple to get the best satisfactory expert.</p>
                </div>
            </div>
        </div>
    </div>


    @include('components.business-model')
    <div class="solution-app-features py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in">
                <h3 class="font-h2">On-demand <span>Doctor Appointment App</span> Features</h3>
                    <p>On Demand Doctor Appointment App Development. Deorwine Infotech is a reputed doctor appointment app development company providing on-demand doctor appointment mobile app and same day doctor appointment mobile app development for iPhone & Android.</p>
                </div>
                <div class="app-features-tabs">
                    <ul id="tabs" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="app-features"><a href="#all" class="active" role="tab" data-toggle="tab">Patient App</a></li>
                        <li role="presentation" class="app-features"><a href="#online" role="tab" data-toggle="tab">Doctor App</a></li>
                        <li role="presentation" class="app-features"><a href="#AdminPanel" role="tab" data-toggle="tab">Admin Panel</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active show" id="all">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Signup & Social Login" title="Signup & Social Login" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/login.png">
                                        <h5>Find Doctor</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Advance Search" title="Advance Search" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/search-ad.png">
                                        <h5>Social Login</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Login / Singup" title="Login / Singup" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/Measurements.png">
                                        <h5>Login / Singup</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Location Based Search" title="Location Based Search" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/schedule.png">
                                        <h5>Location Based Search</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Advance Search" title="Advance Search" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/track.png">
                                        <h5>Advance Search</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="In App Chat" title="In App Chat" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/tracking.png">
                                        <h5>In App Chat</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Video / Audio Call" title="Video / Audio Call" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Video / Audio Call</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Appointment Booking" title="Appointment Booking" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/ordre-history.png">
                                        <h5>Appointment Booking</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Appointment Alert" title="Appointment Alert" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/sms-notification.png">
                                        <h5>Appointment Alert</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="In-App Tracker For E-Prescriptions And Medications" title="In-App Tracker For E-Prescriptions And Medications" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>In-App Tracker For E-Prescriptions And Medications</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="eBilling & Payment Gateways" title="eBilling & Payment Gateways" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>eBilling & Payment Gateways</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Safe And Secure Health Records" title="Safe And Secure Health Records" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Safe And Secure Health Records</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Alert and Notification" title="Alert and Notification" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Alert and Notification</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Promocode / Discount" title="Promocode / Discount" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Promocode / Discount</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Multiple payment Options" title="Multiple payment Options" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Multiple Payment Options</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Multiple Language Support" title="Multiple Language Support" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Multiple Language Support</h5>
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
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="HIPAA Guideline (Advancer)" title="HIPAA Guideline (Advancer)" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5> HIPAA Guideline (Advancer)</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="online">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Login" title="Login" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/login.png">
                                        <h5>Login </h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Accept / Reject Appointment" title="Accept / Reject Appointment" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/search-ad.png">
                                        <h5>Accept / Reject Appointment</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Appointment Status" title="Appointment Status" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/Measurements.png">
                                        <h5>Appointment Status</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Appointment Alert & notification" title="Appointment Alert & notification" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/schedule.png">
                                        <h5>Appointment Alert & notification</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Online Prescription" title="Online Prescription" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/track.png">
                                        <h5>Online Prescription</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Edit Schedule" title="Edit Schedule" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/tracking.png">
                                        <h5>Edit Schedule</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Chat, Audio / Video Call" title="Chat, Audio / Video Call" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Chat, Audio / Video Call</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="SMS and Notification" title="SMS and Notification" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/ordre-history.png">
                                        <h5>SMS and Notification</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Subscriptions" title="Subscriptions" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/sms-notification.png">
                                        <h5>Subscriptions</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="View Ratings And Reviews" title="View Ratings And Reviews" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>View Ratings And Reviews</h5>
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
                                    <img alt="View Prescription & Patient Profile" title="View Prescription & Patient Profile" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>View Prescription & Patient Profile</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Promo & Discounts" title="Promo & Discounts" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Promo & Discounts</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Reviews & Rating" title="Reviews & Rating" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Review & Rating</h5>
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
                                    <img alt="Dashboard / Status" title="Dashboard / Status" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/search-ad.png">
                                        <h5>Dashboard / Status</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Patient Management" title="Patient Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/Measurements.png">
                                        <h5>Patient Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Doctor Management" title="Doctor Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/schedule.png">
                                        <h5>Doctor Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Subsricption Management" title="Subsricption Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/track.png">
                                        <h5>Subsricption Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                        <img alt="Comission Management" title="Comission Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/tracking.png">
                                        <h5>Comission Management</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Multiple Payment Manage" title="Multiple Payment Manage" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/payment-method.png">
                                        <h5>Multiple Payment Manage</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Multiple Currency Management" title="Multiple Currency Management" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/ordre-history.png">
                                        <h5>Multiple Currency Management</h5>
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
                                    <img alt="Schudule Approintment List" title="Schudule Approintment List" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Schudule Approintment List</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="Reporting & Analysis" title="Reporting & Analysis" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Reporting & Analysis</h5>
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
                                    <img alt="Support / Feedback Manager" title="Support / Feedback Manager" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>Support / Feedback Manager</h5>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="features-block">
                                    <img alt="FAQ" title="FAQ" src="{{ env('APP_CDN_URL') }}/images/solutions/icon-images/rating-review.png">
                                        <h5>FAQ</h5>
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
                    <img alt="first" title="first" src="{{ env('APP_CDN_URL') }}/images/solutions/doctor_appointment/doctor-appointment-screens1.webp">
                    </div>
                    <div>
                    <img alt="second" title="second" src="{{ env('APP_CDN_URL') }}/images/solutions/doctor_appointment/doctor-appointment-screens2.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/doctor_appointment/doctor-appointment-screens3.webp">    
                    </div>
                    <div>
                    <img alt="fourth" title="fourth" src="{{ env('APP_CDN_URL') }}/images/solutions/doctor_appointment/doctor-appointment-screens4.webp"> 
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/doctor_appointment/doctor-appointment-screens5.webp"> 
                    </div>
                    <div>
                    <img alt="first" title="first" src="{{ env('APP_CDN_URL') }}/images/solutions/doctor_appointment/doctor-appointment-screens6.webp"> 
                    </div>
                    <div>
                    <img alt="second" title="second" src="{{ env('APP_CDN_URL') }}/images/solutions/doctor_appointment/doctor-appointment-screens7.webp">
                    </div>
                    <div>
                    <img alt="third" title="third" src="{{ env('APP_CDN_URL') }}/images/solutions/doctor_appointment/doctor-appointment-screens8.webp"> 
                    </div>
                    <div>
                    <img alt="fourth" title="fourth" src="{{ env('APP_CDN_URL') }}/images/solutions/doctor_appointment/doctor-appointment-screens9.webp">
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/doctor_appointment/doctor-appointment-screens10.webp"> 
                    </div>
                    <div>
                    <img alt="five" title="five" src="{{ env('APP_CDN_URL') }}/images/solutions/doctor_appointment/doctor-appointment-screens11.webp"> 
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
              <p>Simple Functioning Of Your Doctor Appointment App Helps Your Business Grow Faster</p>
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
    <div class="solution-bg-partner" style="background: url('{{ env('APP_CDN_URL') }}/images/solutions/doctor_appointment/doctor-appointment-app-banner.webp');">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-12 d-flex align-items-center">
                    <div>
                        <h4>Take Your Business To Next Level With</h4>
                        <h3>On Demand Doctor Appointment App Solution</h3>
                        <p>We are an expert doctor appointment app development company providing custom and readymade mobile app services all around the globe.</p>
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