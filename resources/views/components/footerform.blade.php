<div class="col-lg-7 col-md-12 col-sm-12 col-12 Q-form">
                    <form id="fupForm" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                       
                            <label class="sr-only" for="inlineFormInputGroup">Name</label>
                            <div class="input-group custom-input">
                                <div class="input-group-prepend">
                                    <div class="input-group-text input-text">
                                        <img alt="User" title="User" src="{{asset('images/user.svg')}}">
                                    </div>
                                </div>
                                {!! Form::text('name',null,['class'=>'form-control','id'=>'name','placeholder'=>'Name*']) !!}    
                            </div>
                            <span class="text-danger error-text name_err1" style="font-weight:bold"></span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3 ">
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            <div class="input-group custom-input">
                                <div class="input-group-prepend">
                                    <div class="input-group-text input-text">
                                        <img alt="Email" title="Email" src="{{asset('images/email.svg')}}" >
                                    </div>
                                </div>
                                    {!! Form::text('email',null,['class'=>'form-control','id'=>'email','placeholder'=>'Email*']) !!}
                            </div>
                            <span class="text-danger error-text email_err1" style="font-weight:bold"></span>
                        </div>
                        {{--<div class=" col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                            <label class="sr-only" for="inlineFormInputGroup">Phone No</label>
                            <div class="input-group custom-input input-footer">
                                <div class="input-group-prepend">
                                    <div class="input-group-text input-text">
                                        <img alt="Phone" title="Phone" src="{{asset('images/phone.svg')}}">
                                    </div>
                                </div>
                                    {!! Form::text('phone',null,['class'=>'form-control','id'=>'phone','placeholder'=>'Phone*','maxlength'=>"20"]) !!}
                            </div>
                            <span class="text-danger error-text phone_err1" style="font-weight:bold"></span>
                        </div>--}}


                                          
                        <div class=" col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                            <label class="sr-only" for="inlineFormInputGroup">Phone No</label>
                            <div class="input-group custom-input input-footer">
                                <div class="input-group-prepend">
                                    <div class="input-group-text input-text">
                                        <img alt="Phone" title="Phone" src="{{asset('images/phone.svg')}}">
                                    </div>
                                </div>

                                    <select class="form-control" name="code" id="code">
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
														
										<input type="text" name="phone" id="phone" class="form-control" onkeypress="return isNumberKey(event)" placeholder="Phone No">
										<div id="mobile_msg" style="color:#ff0000;"></div>
													
                                </div>
                            <span class="text-danger error-text phone_err1" style="font-weight:bold"></span>
                        </div>
                    




                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                            <label class="sr-only" for="inlineFormInputGroup">Interested in</label>
                            <div class="input-group custom-input">
                                <div class="input-group-prepend">
                                    <div class="input-group-text input-text">
                                        <img alt="Business" title="Business" src="{{asset('images/business-and-finance.svg')}}">
                                    </div>
                                </div>
                                
                                <select class="form-control" name="interested">
                                        <option value="">I am Interested In</option>
                                        <option value="Web development">Web development</option>
                                        <option value="Enterprise Solutions Software">Enterprise Solutions Software</option>
                                        <option value="Dedicated Team Services">Dedicated Team Services</option>
                                        <option value="IT Consulting Service">IT Consulting Service</option>
                                        <option value="Partnership Opportunities">Partnership Opportunities</option>
                                        <option value="Others">Others</option>
                                        </select>
                            </div>
                            <span class="text-danger error-text interested_err1" style="font-weight:bold"></span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                            <label class="sr-only" for="inlineFormInputGroup">Your Budget</label>
                            <div class="input-group custom-input">
                                <div class="input-group-prepend">
                                    <div class="input-group-text input-text">
                                        <img alt="Dollar" title="Dollar" src="{{asset('images/dollar.svg')}}">
                                    </div>
                                </div>
                           
                                <select class="form-control" name="budget">
                                    <option value="">Project Budget</option>
                                    <option value="$1000 to 3000">1000 to 3000</option>
                                    <option value="$3000 to 5000">3000 to 5000</option>
                                    <option value="$5000 to 7000">5000 to 7000</option>
                                    <option value="$7000 to 10000">7000 to 10000</option>
                                    <option value="$10000 to 20000">10000 to 20000</option>
                                    <option value="Above 20000">Above 20000</option>
                                    </select>
                            </div>
                            <span class="text-danger error-text budget_err1"></span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                            <label class="sr-only" for="inlineFormInputGroup">Skype ID / WhatsApp No&#42;</label>
                            <div class="input-group custom-input">
                                <div class="input-group-prepend">
                                    <div class="input-group-text input-text">
                                        <img alt="Skype" title="Skype" src="{{asset('images/skype1.svg')}}">
                                    </div>
                                </div>
            
                                    {!! Form::text('skype',null,['class'=>'form-control','id'=>'skype','placeholder'=>'Skype ID / WhatsApp No']) !!}
                            </div>
                            <span class="text-danger error-text skype_err1" style="font-weight:bold"></span>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                            <div class="form-group Q-text mb-0">
                                <label for="exampleFormControlTextarea1">
                                    <img alt="Comment" title="Comment" src="{{asset('images/comment.svg')}}">
                                    <span>Message&#42;</span></label>
                        
                                    {!! Form::textarea('message',null,['class'=>'form-control','id'=>'message','placeholder'=>'Message','cols'=>"30",'rows'=>"5"]) !!}
                            </div>
                            <span class="text-danger error-text message_err1" style="font-weight:bold"></span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 Browse">
                            <h6 class="mt-2">Or Upload Project Requirement</h6>
                            <span class="my-3">5Mb Max (PDF, Doc, Docx, JPG)</span>

                            <div class='file'>
                                <label for='input-file'>
                                    Browse... <img alt="Upload" title="Upload" src="{{asset('images/upload.svg')}}">
                                </label>
                                <input type="file" id="input-file" name="file">
                               
                            </div>
                            <span class="text-danger error-text file_err1"></span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 inquiry-btn d-block m-auto">
                            {{--<button class="submitBtn" id="footer_form"  type="submit">Send your inquiry</button>--}}
                            <button class="btn" type="submit" id="footerform"  >
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" id="image" style="display: none;"></span>
                            Send your inquiry
                            </button>
                        </div>
                     
                    </div>
                    </form>
                </div>

