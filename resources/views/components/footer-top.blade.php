    <div class="Query_form py-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 Query_text">
                    <h4>Interested in working with us?</h4>
                    <p class="mt-3 mb-4">LET'S TALK AND GET STARTED</p>
                    <div>
                        <span class="query_help d-flex align-items-center mb-4 p-3">
                            <img alt="Email" title="Email" src="{{asset('images/email@2x.png')}}" class="mr-3">
                            <span class="mr-auto">
                                <h6>MAIL TO OUR SALES DEPARTMENT</h6>
                                <a href="mailto:info@deorwine.com" class="d-flex align-items-baseline"><p>info@deorwine.com</p></a>
                            </span>
                        </span>
                        <span class="query_help d-flex align-items-center p-3">
                            <img alt="Skype" title="Skype" src="{{asset('images/skype.svg')}}" class="mr-3">
                            <span class="mr-auto">
                                <h6>OUR SKYPE ID</h6>
                                <a href="skype:deorwineinfotech"><p>deorwineinfotech</p></a>
                            </span>
                        </span>
                    </div>
                    <ul>
                        <h5 class="mb-3">& What you will get:</h5>
                        <li>On-call inquiry assistance</li>
                        <li>Project consulting by experts</li>
                        <li>Quick project estimation</li>
                    </ul>
                </div>
                <div class="col-lg-1 p-0 d-none d-lg-block">
                    <div class="circle">
                        <hr>
                        <span>OR</span>
                    </div>
                </div>
                @include('components.footerform')
            </div>
        </div>
    </div>
    <div class="container locations py-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="countries">
                    <div class="location-bg px-3 pt-3 pb-4">
                        <span class="d-flex align-items-end mb-5">
                            <img alt="India" title="India" src="{{ env('APP_CDN_URL') }}/images/gate-of-india.svg" class="mr-4">
                            <h4>INDIA</h4>
                        </span>
                        <span class="d-flex align-items-center my-3">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h6 class="mb-0">+91 9116115717</h6>
                        </span>
                        <span class="d-flex align-items-center">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h6 class="mb-0">info@deorwine.com</h6>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="countries">
                    <div class="location-bg px-3 pt-3 pb-4">
                        <span class="d-flex align-items-end mb-4">
                            <img alt="Usa" title="Usa" src="{{ env('APP_CDN_URL') }}/images/statue-of-liberty.svg" class="mr-4">
                            <h4>USA</h4>
                        </span>
                        <span class="d-flex align-items-center mt-5 mb-3">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h6 class="mb-0">+1 860-840-2896</h6>
                        </span>
                        <span class="d-flex align-items-center">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h6 class="mb-0">info@deorwine.com</h6>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="countries">
                    <div class="location-bg px-3 pt-3 pb-4">
                        <span class="d-flex align-items-end mb-5">
                            <img alt="Nepal" title="Nepal" src="{{ env('APP_CDN_URL') }}/images/boudhanath.svg" class="mr-4">
                            <h4>NEPAL</h4>
                        </span>
                        <span class="d-flex align-items-center mt-5 mb-3">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h6 class="mb-0">+977 9614452746</h6>
                        </span>
                        <span class="d-flex align-items-center">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h6 class="mb-0">info@deorwine.com</h6>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="countries">
                    <div class="location-bg px-3 pt-3 pb-4">
                        <span class="d-flex align-items-end mb-5">
                            <img alt="DOM REP" title="DOM REP" src="{{ env('APP_CDN_URL') }}/images/outline(1).svg" class="mr-4">
                            <h4>DOM REP</h4>
                        </span>
                        <span class="d-flex align-items-center mt-5 mb-3">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h6 class="mb-0">+1 829-871-9754</h6>
                        </span>
                        <span class="d-flex align-items-center">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h6 class="mb-0">info@deorwine.com</h6>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')


    <script type="text/javascript">
       function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

</script>
@endpush