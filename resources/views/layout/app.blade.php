<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="{{ asset('images/deorwine-favicon.png') }}" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    {{--<link rel="stylesheet" href="{{asset('font/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('font/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">--}}
    {{--<link rel="stylesheet" href="https://deorwine.b-cdn.net/font/css/font-awesome.min.css">--}}
    {{--<link rel="preload" href="https://deorwine.b-cdn.net/font/css/font-awesome.min.css" as="style" 
     onload="this.rel='stylesheet'"><noscript><link rel="stylesheet" href="https://deorwine.b-cdn.net/font/css/font-awesome.min.css"></noscript>--}}
     <link rel="preload" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" as="style" 
     onload="this.rel='stylesheet'"><noscript><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></noscript>
    <link rel="stylesheet" href="{{ env('APP_CDN_URL') }}/css/bootstrap.min.css">
    {{--<link rel="stylesheet" href="https://deorwine.b-cdn.net/css/slick-theme.min.css">--}}
    <link rel="preload" href="{{ env('APP_CDN_URL') }}/css/slick-theme.min.css" as="style" 
     onload="this.rel='stylesheet'"><noscript><link rel="stylesheet" href="https://deorwine.b-cdn.net/css/slick-theme.min.css"></noscript>
     {{--<link rel="stylesheet" href="https://deorwine.b-cdn.net/css/slick.css">--}}
     <link rel="preload" href="{{ env('APP_CDN_URL') }}/css/slick.css" as="style" 
     onload="this.rel='stylesheet'"><noscript><link rel="stylesheet" href="{{ env('APP_CDN_URL') }}/css/slick.css"></noscript>
    <link rel="stylesheet" href="{{asset('css/style.css')}}?{{rand(1,100000)}}">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,500&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0C8K5F78SL"></script>
   <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0C8K5F78SL');
  </script>

</head>
<body>
    @include('components.header')
    @yield('content')
    @include('components.footer-top')
    @include('components.footer')
<div class="modal fade left modal-index pl-0" id="exampleModalPreview" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
    <div class="modal-dialog-full-width modal-dialog momodel modal-fluid" role="document">
        <div class="modal-content-full-width modal-content">
            <div class="modal-header text-center p-0">
                <button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close">
                    <span style="font-size: 1.3em;" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex align-items-center p-0">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 col-12">
                            <div class="sidebar-form">
                                <h3 class="font-h2 mb-0">ENQUIRE NOW!</h3>
                                <h5 class="py-2">We are all set to help you out.</h5>
                            <form id="enquireForm"  method="post" class="free-consult-button">
                                            <div class="row">
                                    <div class="col-lg-6 mb-3"> 
                                    <div class="form-group  mb-0"> 
                                        {!! Form::text('name',null,['class'=>'form-control','id'=>'name','placeholder'=>'Name*']) !!}
                                    </div>
                                    <span class="text-danger error-text name_err5" style="font-weight:bold"></span>
                                    </div>
                                    <div class="col-lg-6 mb-3">  
                                        <div class="form-group  mb-0">
                                        {!! Form::text('email',null,['class'=>'form-control','id'=>'email','placeholder'=>'Email*']) !!}
                                    </div>
                                    <span class="text-danger error-text email_err5" style="font-weight:bold"></span>
                                    </div>
                                    {{--<div class="col-lg-6  mb-3">  
                                        <div class="form-group  mb-0">
                                        {!! Form::text('phone',null,['class'=>'form-control','id'=>'phone','placeholder'=>'Phone*']) !!}
                                    </div>--}}
                                    <div class="col-lg-6  mb-3">
                                           <div class="form-group mb-0">
													<div class="input-group">
														<div class="input-group-prepend">
															<select name="code" id="code" class="input-group-text">
																<option value=" +376">AD +376</option>
																<option value="+971">AE +971</option>
																<option value="+93">AF +93</option>
																<option value="+355">AL +355</option>
																<option value="+374">AM +374</option>
																<option value="+244">AO +244</option>
																<option value="+54">AR +54</option>
																<option value="+43">AT +43</option>
																<option value="+61">AU +61</option>
																<option value="+994">AZ +994</option>
																<option value="+387">BA +387</option>
																<option value="+246">BB +246</option>
																<option value="+880">BD +880</option>
																<option value="+32">BE +32</option>
																<option value="+226">BF +226</option>
																<option value="+359">BG +359</option>
																<option value="+973">BH +973</option>
																<option value="+257">BI +257</option>
																<option value="+229">BJ +229</option>
																<option value="+441">BM +441</option>
																<option value="+673">BN +673</option>
																<option value="+591">BO +591</option>
																<option value="+55">BR +55</option>
																<option value="+975">BT +975</option>
																<option value="+267">BW +267</option>
																<option value="+375">BY +375</option>
																<option value="+501">BZ +501</option>
																<option value="+236">CF +236</option>
																<option value="+242">CG +242</option>
																<option value="+41">CH +41</option>
																<option value="+225">CI +225</option>
																<option value="+56">CL +56</option>
																<option value="+237">CM +237</option>
																<option value="+86">CN +86</option>
																<option value="+57">CO +57</option>
																<option value="+506">CR +506</option>
																<option value="+53">CU +53</option>
																<option value="+238">CV +238</option>
																<option value="+357">CY +357</option>
																<option value="+420">CZ +420</option>
																<option value="+49">DE +49</option>
																<option value="+253">DJ +253</option>
																<option value="+45">DK +45</option>
																<option value="+767">DM +767</option>
																<option value="+809">DO +809</option>
																<option value="+213">DZ +213</option>
																<option value="+593">EC +593</option>
																<option value="+372">EE +372</option>
																<option value="+20">EG +20</option>
																<option value="+34">ES +34</option>
																<option value="+251">ET +251</option>
																<option value="+358">FI +358</option>
																<option value="+679">FJ +679</option>
																<option value="+691">FM +691</option>
																<option value="+33">FR +33</option>
																<option value="+241">GA +241</option>
																<option value="+44">GB +44</option>
																<option value="+473">GD +473</option>
																<option value="+995">GE +995</option>
																<option value="+233">GH +233</option>
																<option value="+299">GL +299</option>
																<option value="+220">GM +220</option>
																<option value="+224">GN +224</option>
																<option value="+240">GQ +240</option>
																<option value="+30">GR +30</option>
																<option value="+502">GT +502</option>
																<option value="+245">GW +245</option>
																<option value="+592">GY +592</option>
																<option value="+852">HK +852</option>
																<option value="+504">HN +504</option>
																<option value="+385">HR +385</option>
																<option value="+509">HT +509</option>
																<option value="+36">HU +36</option>
																<option value="+62">ID +62</option>
																<option value="+353">IE +353</option>
																<option value="+972">IL +972</option>
																<option value="+91">IN +91</option>
																<option value="+964">IQ +964</option>
																<option value="+98">IR +98</option>
																<option value="+354">IS +354</option>
																<option value="+39">IT +39</option>
																<option value="+876">JM +876</option>
																<option value="+962">JO +962</option>
																<option value="+81">JP +81</option>
																<option value="+254">KE +254</option>
																<option value="+996">KG +996</option>
																<option value="+855">KH +855</option>
																<option value="+686">KI +686</option>
																<option value="+269">KM +269</option>
																<option value="+869">KN +869</option>
																<option value="+850">KP +850</option>
																<option value="+82">KR +82</option>
																<option value="+965">KW +965</option>
																<option value="+345">KY +345</option>
																<option value="+856">LA +856</option>
																<option value="+961">LB +961</option>
																<option value="+758">LC +758</option>
																<option value="+423">LI +423</option>
																<option value="+94">LK +94</option>
																<option value="+231">LR +231</option>
																<option value="+266">LS +266</option>
																<option value="+370">LT +370</option>
																<option value="+352">LU +352</option>
																<option value="+371">LV +371</option>
																<option value="+218">LY +218</option>
																<option value="+212">MA +212</option>
																<option value="+377">MC +377</option>
																<option value="+373">MD +373</option>
																<option value="+382">ME +382</option>
																<option value="+261">MG +261</option>
																<option value="+389">MK +389</option>
																<option value="+223">ML +223</option>
																<option value="+95">MM +95</option>
																<option value="+976">MN +976</option>
																<option value="+853">MO +853</option>
																<option value="+222">MR +222</option>
																<option value="+664">MS +664</option>
																<option value="+356">MT +356</option>
																<option value="+230">MU +230</option>
																<option value="+960">MV +960</option>
																<option value="+265">MW +265</option>
																<option value="+52">MX +52</option>
																<option value="+60">MY +60</option>
																<option value="+258">MZ +258</option>
																<option value="+264">NA +264</option>
																<option value="+227">NE +227</option>
																<option value="+234">NG +234</option>
																<option value="+505">NI +505</option>
																<option value="+31">NL +31</option>
																<option value="+47">NO +47</option>
																<option value="+977">NP +977</option>
																<option value="+674">NR +674</option>
																<option value="+64">NZ +64</option>
																<option value="+968">OM +968</option>
																<option value="+507">PA +507</option>
																<option value="+51">PE +51</option>
																<option value="+675">PG +675</option>
																<option value="+63">PH +63</option>
																<option value="+92">PK +92</option>
																<option value="+48">PL +48</option>
																<option value="+351">PT +351</option>
																<option value="+595">PY +595</option>
																<option value="+974">QA +974</option>
																<option value="+40">RO +40</option>
																<option value="+381">RS +381</option>
																<option value="+7">RU +7</option>
																<option value="+250">RW +250</option>
																<option value="+966">SA +966</option>
																<option value="+677">SB +677</option>
																<option value="+248">SC +248</option>
																<option value="+249">SD +249</option>
																<option value="+46">SE +46</option>
																<option value="+65">SG +65</option>
																<option value="+290">SH +290</option>
																<option value="+386">SI +386</option>
																<option value="+421">SK +421</option>
																<option value="+232">SL +232</option>
																<option value="+378">SM +378</option>
																<option value="+221">SN +221</option>
																<option value="+252">SO +252</option>
																<option value="+597">SR +597</option>
																<option value="+239">ST +239</option>
																<option value="+503">SV +503</option>
																<option value="+963">SY +963</option>
																<option value="+268">SZ +268</option>
																<option value="+235">TD +235</option>
																<option value="+228">TG +228</option>
																<option value="+66">TH +66</option>
																<option value="+993">TM +993</option>
																<option value="+216">TN +216</option>
																<option value="+676">TO +676</option>
																<option value="+90">TR +90</option>
																<option value="+868">TT +868</option>
																<option value="+886">TW +886</option>
																<option value="+255">TZ +255</option>
																<option value="+380">UA +380</option>
																<option value="+256">UG +256</option>
																<option value="+1" selected="selected">US +1</option>
																<option value="+598">UY +598</option>
																<option value="+998">UZ +998</option>
																<option value="+784">VC +784</option>
																<option value="+58">VE +58</option>
																<option value="+84">VN +84</option>
																<option value="+678">VU +678</option>
																<option value="+685">WS +685</option>
																<option value="+967">YE +967</option>
																<option value="+27">ZA +27</option>
																<option value="+260">ZM +260</option>
																<option value="+243">ZR +243</option>
																<option value="+263">ZW +263</option>
															</select>
														</div>
														<input type="text" name="phone" id="phone" class="form-control" onkeypress="return isNumberKey(event)" placeholder="Phone Number">
													</div>
											</div>
                                       <span class="text-danger error-text phone_err5" style="font-weight:bold"></span>
                                    </div>
                                    <div class="col-lg-6  mb-3">
                                    <div class="form-group  mb-0">  
                                        <select class="form-control" name="interested">
                                        <option value="">I am Interested In</option>
                                        <option value="Web Application">Web Application</option>
                                        <option value="Mobile Application">Mobile Application</option>
                                        <option value="Ecommerce Application">Ecommerce Application</option>
                                        <option value="Software Development">Software Development</option>
                                        <option value="Dedicated Team Hiring">Dedicated Team Hiring</option>
                                        <option value="Partnership Opportunities">Partnership Opportunities</option>
                                        <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <span class="text-danger error-text interested_err5" style="font-weight:bold"></span>
                                    </div>
                                    <div class="col-lg-6  mb-3">
                                    <div class="form-group  mb-0">
                                    <select class="form-control" name="budget">
                                    <option value="">Project Budget in USD (Default)</option>
                                    <option value="$5000-$10000">5000 to 10000</option>
                                    <option value="$10000-$20000">10000 to 20000</option>
                                    <option value="$20000-$30000">20000 to 30000</option>
                                    <option value="$30000-$50000">30000 to 50000</option>
                                    <option value="> $50,000"> &gt; $50,000</option>
                                    </select>
                                    </div>
                                    <span class="text-danger error-text budget_err5" style="font-weight:bold"></span>
                                    </div>
                                    <div class="col-lg-6  mb-3">  
                                        <div class="form-group  mb-0">
                                        <select class="form-control" name="about">
                                    <option value="">How did you find Deorwine</option>
                                    <option value="In Facebook">In Facebook</option>
                                    <option value="In Instagram">In Instagram</option>
                                    <option value="In Linkdline">In Linkdline</option>
                                    <option value="In Google">In Google</option>
                                    </select>
                                        
                                    </div>
                                    <span class="text-danger error-text about_err5" style="font-weight:bold"></span>
                                    </div>
                                    <div class="col-lg-12  mb-3">  
                                        <div class="form-group  mb-0">
                                        {!! Form::textarea('message',null,['class'=>'form-control','id'=>'message','placeholder'=>'Message','cols'=>"30",'rows'=>"5"]) !!}
                                    </div>
                                    <span class="text-danger error-text message_err5" style="font-weight:bold"></span>
                                    </div>
                                    <div class="col-lg-12">  
                                        <div class="form-group mt-2">
                                        {{--<input class="free-consult-button" type="submit" id="enquiry" value="Get your free Consultation">
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" id="loader" style="display: none;"></span>--}}
                                        <button class="free-consult-button" type="submit" id="enquiry"  >
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" id="loader" style="display: none;"></span>
                                         Get your free Consultation
                                        </button>
                                        </div>
                                    </div>
                                    </div> 
                            </form> 
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-12">
                            <div class="sidebar-form-content">
                                <div class="award-rating text-center"><img alt="award" title="award" src="{{ env('APP_CDN_URL') }}/images/award-rating.png" class="img-fluid">
                                    <p>4.9/5</p>
                                </div>
                                <h4 class="py-3" style="text-align:center;">By 500+ Clients Or 1300+ <strong>Web And Mobile App</strong> Projects.</h4>
                                <div class="address">
                                    <a href="tel:+919116115717" class="d-flex align-items-baseline"> <i class="fa fa-phone mr-2" aria-hidden="true"></i>
                                        <p>+91 9116115717</p>
                                    </a>
                                    <a href="mailto:info@deorwine.com" class="d-flex align-items-baseline"> <i class="fa fa-envelope-o mr-2" aria-hidden="true"></i>
                                        <p>info@deorwine.com</p>
                                    </a>
                                    <a  class="d-flex align-items-baseline"> <i class="fa fa-map-marker mr-2" aria-hidden="true"></i>
                                        <p>E-95 Siddarth Nagar, Sector 12 Malviya Nagar, Jaipur- 302017</p>
                                    </a>
                                    <a href="{{ env('APP_CDN_URL') }}/doc/deorwine-infotech-broucher.pdf" target="_blank"><button class="btn mt-3 mb-1 brochure-btn">Download Brochure</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
     {{--Template Main JS File--}}
    {{--<script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/jquery-migrate.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/menu.js')}}"></script>--}}
    <script src="{{ env('APP_CDN_URL') }}/js/jquery.min.js"></script>
    <script src="{{ env('APP_CDN_URL') }}/js/bootstrap.min.js"></script>
    <script src="{{ env('APP_CDN_URL') }}/js/slick.js"></script>
    {{--<script src="{{ env('APP_CDN_URL') }}/js/jquery-migrate.js"></script> 
    <script src="{{ env('APP_CDN_URL') }}/js/main.js"></script>--}}
    {{--<script src="https://deorwine.b-cdn.net/js/script.js"></script>--}}
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{ env('APP_CDN_URL') }}/js/menu.js"></script>
    <script> var global_var = "{{ url('/') }}"</script>
@stack('scripts')
</body>
</html>

