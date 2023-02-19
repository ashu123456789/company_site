@extends('layout.app')

@section('content')

    <div class="banner-slide portfolio-banner d-flex-align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 my-auto d-block" data-aos="fade-right" style="overflow-x: visible">
                    <h4><img alt="bag-ico" title="bag-ico" src="{{asset('images/portfolio/bag-ico.svg')}}"> OUR PORTFOLIO</h4>
                    <h2 class="pt-1">We Love To Make Apps That Make A Difference</h2>
                    <p class="pt-2 pb-3">Explore Why Choose Deorwine Infotech To Transform Your Business Ideas Into
                        Reality</p>
                    <a href="javascript:void(0)" class="btn-primary" data-toggle="modal" data-target="#exampleModalPreview">Get A Free Quote</a>
                </div>
                <div class="col-lg-6 col-md-6 col-12 text-center portfolio-banner-right">
                    <img alt="We Love To Make Apps That Make A Difference" title="We Love To Make Apps That Make A Difference" src="{{ env('APP_CDN_URL') }}/images/portfolio/project-bg.webp" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-web-app py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="zoom-up">
                    <h1>Our App & Web Development <span>Portfolio</span></h1>
                    <p class="pt-2">Check our app development portfolio. We have designed and developed over 50 mobile
                        apps for enterprises, medium-sized businesses, and startups, helping them to raise millions and
                        gain millions of users.</p>
                </div>
                <div class="col-lg-12">
                <div id="main">
                        
                        <ul class="nav portfolio-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">ALL WORK</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">APP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">WEB</a>
                            </li>
                        </ul><!-- Tab panes -->
                        <div class="tab-content">
                            <div class="row tab-pane active" id="tabs-1" role="tabpanel">
                             @foreach ($project as $key=>$value)
                                <div class="col-lg-4 col-sm-6 col-12 px-0 project option-1 getmodel" data-id="{{$value->id}}" data-toggle="modal" data-target="#doorserve">
                                    <div class="project-image"><img alt="{{$value->list_title}}" title="{{$value->list_title}}" src="{{$value->listing_image }}" alt="" />
                                    
                                    @if($value->download)
                                    <div class="text-dark portfolio-download  p-2 d-flex align-items-center p-2"><i class="fa fa-download"></i>
                                            <p class="d-inline w-auto m-0 mx-1 text-unset text-orange">{{$value->download}}</p>
                                             <h6 class="mb-0">DOWNLOADS</h6></div>
                                    @endif
                                    </div>
                                  

                                    <div class="portfolio-block-content d-flex justify-content-between flex-wrap p-3">
                                        <div class="w-100">
                                            <h5 class="mb-0">{{$value->list_title}}</h5>
                                            <p class="my-2">{{$value->list_sub_title}}</p>
                                        </div>
                                        <div class="block-content-1">
                                        @if($value->d_ios)
                                        <a href="{{$value->d_ios}}"><img alt="App Store" title="App Store" src="{{asset('images/portfolio/apple-square.svg')}}" alt="" /></a>
                                         @endif
                                       
                                         @if($value->d_android)
                                        <a href="{{$value->d_android}}"><img alt="Play Store" title="Play Store" src="{{asset('images/portfolio/android-square.svg')}}" alt="" /></a>
                                         @endif
                                       
                                         @if($value->d_website)
                                        <a href="{{$value->d_website}}"><img alt="Website" title="Website" src="{{asset('images/portfolio/web-square.svg')}}" alt="" /></a>
                                         @endif
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                            <div class="row tab-pane" id="tabs-2" role="tabpanel">
                            @foreach ($project as $key=>$value)
                            @if($value->type == "App")
                                <div class="col-lg-4 col-sm-6 col-12 px-0 project option-1 getmodel" data-id="{{$value->id}}" data-toggle="modal" data-target="#doorserve">
                                    <div class="project-image"><img alt="{{$value->list_title}}" title="{{$value->list_title}}" src="{{$value->listing_image }}" alt="" />
                                    @if($value->download)
                                    <div class="text-dark portfolio-download  p-2 d-flex align-items-center p-2">  <i class="fa fa-download"></i>
                                            <p class="d-inline w-auto m-0 mx-1 text-unset text-orange">{{$value->download}}</p>
                                             <h6 class="mb-0">DOWNLOADS</h6></div>
                                    @endif
                                    </div>
                                    <div class="portfolio-block-content d-flex justify-content-between flex-wrap p-3">
                                        <div class="w-100">
                                            <h5 class="mb-0">{{$value->list_title}}</h5>
                                            <p class="my-2">{{$value->list_sub_title}}</p>
                                        </div>
                                        <div class="block-content-1">
                                        @if($value->d_ios)
                                        <a href="{{$value->d_ios}}"><img alt="App Store" title="App Store" src="{{asset('images/portfolio/apple-square.svg')}}" alt="" /></a>
                                         @endif
                                       
                                         @if($value->d_android)
                                        <a href="{{$value->d_android}}"><img alt="Play Store" title="Play Store" src="{{asset('images/portfolio/android-square.svg')}}" alt="" /></a>
                                         @endif
                                       
                                         @if($value->d_website)
                                        <a href="{{$value->d_website}}"><img alt="Website" title="Website" src="{{asset('images/portfolio/web-square.svg')}}" alt="" /></a>
                                         @endif
                                        </div>
                                    </div>
                                </div>
                          @endif
                          @endforeach
                            </div>
                            <div class="row tab-pane" id="tabs-3" role="tabpanel">
                            @foreach ($project as $key=>$value)
                             @if($value->type == "Web")
                                <div class="col-lg-4 col-sm-6 col-12 px-0 project option-2 getmodel" data-id="{{$value->id}}" data-toggle="modal" data-target="#doorserve">
                                    <div class="project-image"><img alt="{{$value->list_title}}" title="{{$value->list_title}}" src="{{$value->listing_image }}" alt="" />
                                    @if($value->download)
                                    <div class="text-dark portfolio-download p-2  p-2 d-flex align-items-center"><i class="fa fa-download"></i>
                                            <p class="d-inline w-auto m-0 mx-1 text-unset text-orange">{{$value->download}}</p>
                                             <h6 class="mb-0">DOWNLOADS</h6></div>
                                    @endif
                                    </div>
                                    <div class="portfolio-block-content d-flex justify-content-between flex-wrap p-3">
                                        <div class="w-100">
                                            <h5 class="mb-0">{{$value->list_title}}</h5>
                                            <p class="my-2">{{$value->list_sub_title}}</p>
                                        </div>
                                        <div class="block-content-1">
                                        @if($value->d_ios)   
                                        <a href="{{$value->d_ios}}"><img alt="App Store" title="App Store" src="{{asset('images/portfolio/apple-square.svg')}}" alt="" /></a>
                                         @endif
                                       
                                         @if($value->d_android)
                                        <a href="{{$value->d_android}}"><img alt="Play Store" title="Play Store" src="{{asset('images/portfolio/android-square.svg')}}" alt="" /></a>
                                         @endif
                                       
                                         @if($value->d_website)
                                        <a href="{{$value->d_website}}"><img alt="Website" title="Website" src="{{asset('images/portfolio/web-square.svg')}}" alt="" /></a>
                                         @endif
                                        </div>
                                    </div>
                                </div>
                             @endif
                             @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 d-flex justify-content-center pt-4 pb-2" data-aos="zoom-out">
                    <a href="javascript:void(0)" class="btn-primary" data-toggle="modal" data-target="#exampleModalPreview">Get A Free Quote</a>
                </div>
            </div>
        </div>
    </div>
  
<div class="modal fade custom-modal p-0" id="pdetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-custom m-0" role="document">
    <div class="modal-content modal-content-1" style="background-color: #f9922d;">
        <div class="container">
            <div class="modal-header p-0">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close  p-0 m-0" data-dismiss="modal" aria-label="Close">
                <span class="d-block" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-custom-body">
                <div class="row">
                        <div class="col-12 text-center modal-title-custom">
                            <div id="d_logo"></div>
                            


                            {{--<div class="d-flex justify-content-center modal-rating" style="display:none !important;">
                                <div class="modal-rating-1 pr-4">
                                    <h4 class="mt-2 mb-0 downloaddt"></h4>
                                     <p class="mb-2">Downloads</p>
                                </div>
                                <div class="pl-4">
                                    <h4 class="mt-2 mb-0 ratingdt"></h4>
                                     <p class="mb-2">Avg. Rating</p>
                                </div>
                            </div>--}}

                            <div class="d-flex justify-content-center  modal-rating">
                                <div class="modal-rating-1 pr-4">
                                    <h5 class="mt-2 mb-0 downloaddt"><i class="fa fa-download" aria-hidden="true"></i></h5>
                                     <p class="mb-1">Downloads</p>
                                </div>
                                <div class="pl-4">
                                    <h5 class="mt-2 mb-0 d-flex align-items-center justify-content-center ratingdt"> <i class="fa fa-star mr-1" aria-hidden="true"></i></h5>
                                     <p class="mb-1">Avg. Rating</p>
                                </div>
                            </div>


                            <h4 class="d_title" ></h4>
                            <div class="d-flex justify-content-center modal-span-wrapper" id="d_dev">
                                
                                
                            </div>
                        </div>
                        <div class="col-12 listner-img d_img">
                            
                        </div>
                        <div class="col-12 modal-overview text-center">
                            <h3 class="font-h2">Overview</h3>
                            <h5 class="d_overview"></h5>

                            <h3 class="font-h2 mb-4">Technology Stack</h3>
                            <div class="d-flex justify-content-center modal-span-wrapper" id="d_tech">
                                
                            </div>
                            {{--<p><b>Industrial Domain:</b> Dating Platform | Efforts: 4 months (For Phase 1) | Deployment Time: 4.5 months | Downloads: More than 10 lacs</p>--}}

                         
                            <div class="d-flex justify-content-center modal-social pb-5" id="urllink">
                         
                            </div>
                        </div>
                        <div class="Query_form query-form-modal py-5" style="background-color: transparent;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 Query_text">
                                        <h4>Interested in working with us?</h4>
                                        <p class="mt-3 mb-4">LET'S TALK AND GET STARTED</p>
                                        <div>
                                            <span class="query_help d-flex align-items-center mb-4 p-3">
                                                <img alt="email" title="email" src="{{asset('images/email@2x.png')}}" class="mr-3">
                                                <span class="mr-auto">
                                                    <h6>MALES TO OUR SALES DEPARTMENT</h6>
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
                                    @include('components.portfolioform')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>





@include('components.testimonials')
<div id="blog-container"></div>

@endsection
@push('scripts')
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<script src="{{asset('js/aos.js')}}"></script>
    <script>
        AOS.init({
            delay: 50,
            duration: 1250,
        })
        </script>
          <script>
        $(document).ready(function () {
            $('[data-aos]').parent().addClass('hideOverflowOnMobile');
           

            $('.getmodel').on('click',function(){
                var pid = $(this).attr("data-id");
                
                $.ajax({
                    type: 'GET',
                    url: "project/" + pid,
                    success: function (data) {
                       $("#d_logo, .d_title, #urllink, .d_overview, .d_img, #d_dev,  #d_tech, #list_title, .ratingdt, .downloaddt").html("");
                       $('.modal-content-1').css("background-color", data.data.d_color);
                       $('.d_title').append(data.data.d_title);
                       $('.d_overview').append(data.data.d_overview);
                       if ($.trim(data.data.d_website)){ 
                       $('#urllink').append('<a href="'+data.data.d_website+'"><img src="images/portfolio/web-btn.png" alt="Web" title="Web" class="mx-2"></a>');
                       }
                       if ($.trim(data.data.d_ios)){
                       $('#urllink').append('<a href="'+data.data.d_ios+'"><img src="images/portfolio-1/app8.png" alt="App Store" title="App Store" class="mx-2"></a>');
                       }
                       if ($.trim(data.data.d_android)){
                       $('#urllink').append('<a href="'+data.data.d_android+'"><img src="images/portfolio-1/app7.png" alt="Play Store" title="Play Store" class="mx-2"></a>');
                       }
                       $('#d_logo').append('<img src="'+data.data.d_logo+'" alt="'+data.data.list_title+'" title="'+data.data.list_title+'" class="img-fluid">')
                       $('.d_img').append('<img src="'+data.data.d_image+'" alt="'+data.data.list_sub_title+'" title="'+data.data.list_sub_title+'">')
                       $('#list_title').append(data.data.list_title);
                       

                       
                       if ($.trim(data.data.rating)){
                       $('.modal-rating').css("display", "block"); 
                       $('.ratingdt').append(data.data.rating);
                       }
                       if($.trim(data.data.download)){
                       $('.downloaddt').append(data.data.download);
                       }
                      
                       
                       var dev_val = data.data.d_development;
                       var dev_val_arr = dev_val.split(",");
                        $.each(dev_val_arr,function(i,v){
                            $('#d_dev').append('<span class="modal-span">'+dev_val_arr[i]+'</span>');
                            
                        });
                      var tech_val = data.data.d_technology;
                       var tech_val_arr = tech_val.split(",");
                        $.each(tech_val_arr,function(i,v){
                            $('#d_tech').append('<span class="modal-span">'+tech_val_arr[i]+'</span>');
                            
                        });
                       
                       $("#pdetail").modal('show');
                       
                    },
                    error: function () {
                        console.log(data);
                    }
                 });
            });
        });
    </script>

@endpush