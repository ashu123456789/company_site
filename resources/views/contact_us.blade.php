@extends('layout.app')

@section('content')

    <!----------contact-banner-------->
    <div class="contact-banner d-flex align-items-center justify-content-center" style="background:  url('{{ env('APP_CDN_URL') }}/images/about_us/contact-banner.webp'),
    linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5))">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="zoom-in">
                    <h1>DON&#39;T BE A STRANGER&#44; JUST SAY <span>&#34;HELLO&#34;</span></h1>
                    <p>&#64;Deorwine Infotech is here to provide with enhanced information&#44; answer any questions you
                        may
                        have
                        and design an effective solution for your instructional wants.</p>
                </div>
            </div>
        </div>
    </div>
    <!----------contact-banner-------->

    <!-- -------contact-detail---------->
    <div class="contact-detail" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12 info">
                    <h6>LET &#39;S TALK</h6>
                    <img alt="Wave" title="Wave" src="{{asset('images/wave.png')}}">
                    <h3>Speak With Deorwine <span>Expert.</span></h3>
                    <div class="social-info d-flex align-items-center">
                        <div>
                            <span>
                                <i class="fa fa-envelope-o"></i>
                            </span>
                        </div>
                        <div>
                            <h6>Email</h6>
                            <a href="mailto:info@deorwine.com">info@deorwine.com</a>
                            <a href="mailto:info@deorwine.com">sales@deorwine.com</a>
                        </div>
                    </div>
                    <div class="social-info d-flex align-items-center">
                        <div>
                            <span>
                                <i class="fa fa-phone"></i>
                            </span>
                        </div>
                        <div>
                            <h6>Phone</h6>
                            <a href="tel:+919116115717">+91-911 611 5717</a>
                        </div>
                    </div>
                    <div class="social-info d-flex align-items-center">
                        <div>
                            <span>
                                <i class="fa fa-skype"></i>
                            </span>
                        </div>
                        <div>
                            <h6>Skype</h6>
                            <a href="skype:deorwineinfotech">deorwineinfotech</a>
                        </div>
                    </div>
                    <div class="social-info d-flex align-items-center">
                        <div>
                            <span>
                                <i class="fa fa-map-marker"></i>
                            </span>
                        </div>
                        <div>
                            <h6>Address</h6>
                            <p class="mb-0">E-95 Siddarth Nagar, Sector 12 Malviya Nagar, Jaipur- 302017</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1 col-md-12 col-12 contact-form">
                    <h2 class="text-uppercase">CONTACT <span>US</span></h2>
                    <p>Before you do here is several things you ought to know</p>
                    <form id="contactForm"  method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                      
                        {{ csrf_field() }}
                            <div class="input-group contact-input align-items-center">
                                <div class="input-group-prepend">
                              
                                    <span class="input-group-text"><img alt="User" title="User" src="{{asset('images/user.svg')}}"></span>
                                </div>
                                {!! Form::text('name',null,['class'=>'form-control','id'=>'name','placeholder'=>'Full Name']) !!}
                            </div>
                            <span class="text-danger error-text name_err2"></span>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="input-group contact-input align-items-center">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><img alt="Email" title="Email" src="{{asset('images/email.svg')}}">
                                </span>
                                </div>
                                {!! Form::text('email',null,['class'=>'form-control','id'=>'email','placeholder'=>'Enter your email']) !!}
                            </div>
                            <span class="text-danger error-text email_err2"></span>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="input-group contact-input align-items-center">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><img alt="Phone" title="Phone" src="{{asset('images/phone.svg')}}">
                                </span>
                                </div>
                                {!! Form::text('phone',null,['class'=>'form-control','id'=>'phone','placeholder'=>'Phone']) !!}
                            </div>
                            <span class="text-danger error-text phone_err2"></span>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="input-group contact-input align-items-center">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><img alt="Email" title="Email" src="{{asset('images/email.svg')}}"></span>
                                </div>
                                {!! Form::text('subject',null,['class'=>'form-control','id'=>'subject','placeholder'=>'Subject']) !!}
                            </div>
                            <span class="text-danger error-text subject_err2"></span>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="input-group contact-textarea">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><img alt="Comment" title="Comment" src="{{asset('images/comment.svg')}}">
                                </span>
                                </div>
                                    {!! Form::textarea('message',null,['class'=>'form-control','id'=>'message','placeholder'=>'Message','cols'=>"30",'rows'=>"5"]) !!}
                            </div>
                            <span class="text-danger error-text message_err2"></span>
                            
                        </div>
                        <div class="col-lg-3">
                            <button class="btn" type="submit" id="contact"  >
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" id="img" style="display: none;"></span>
                             Submit
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- -------contact-detail---------->


    <!-- ---------contact-text----------->
    <div class="contact-text d-flex align-items-center" data-aos="fade-up">
        <h3 class="m-auto">"Support, Discuss project, Share ideas, and make faster decision, Your call is more valuable
            for us, Lets
            get started connecting with each other."</h3>
    </div>
    <!-- ---------contact-text----------->
 @include('components.testimonials')
 <div id="blog-container"></div>
@endsection


@push('scripts')
<script type="text/javascript">
$(document).ready(function() {
$("#contactForm").on('submit', function(e){
e.preventDefault();
var fd = new FormData();
var file_data = $('#input-file').prop('files')[0]; // for multiple files
fd.append('file', file_data);
var other_data = $('form#contactForm').serializeArray();
$.each(other_data,function(key,input){
    fd.append(input.name,input.value);
});

$.ajax({
    type: 'POST',
    url: "{{ route('contactus_form') }}",
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    data: fd,
    dataType: 'json',
    contentType: false,
    cache: false,
    processData:false,
    beforeSend: function () {
        $('#img').show();$('#img').show();
        $("#contact").attr('disabled', true); // disable button
            // $('#fupForm').css("opacity",".5");
      },
    success: function(data) {
        $('#img').hide();
        $("#contact").attr('disabled', false);
            if($.isEmptyObject(data.error)){
                $('.form-control').val('');
                $("span.error-text").hide();
                 window.location = "thankyou";
            }else{
                printErrorMsg(data.error);
            }
        }
});
});
function printErrorMsg (msg) {
            $("span.error-text").hide();
            $.each( msg, function( key, value ) {
              $('.'+key+'_err2').text(value).show();
            });
        }
}); 
</script>


<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<script src="{{asset('js/aos.js')}}"></script>
    <script>
          AOS.init({
            delay: 50,
            duration: 750,
        });
    </script>
@endpush