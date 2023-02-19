@extends('layout.login_layout')

@section('content')

		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #F2C98A">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
						<!--begin::Content-->
						<div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
							<!--begin::Logo-->
							<a href="index.html" class="py-9">
								<img alt="Logo" src="{{asset('admin/assets/media/logos/Deorwine-square-logo-final1.png')}}" class="h-70px" />
							</a>
							<!--end::Logo-->
							<!--begin::Title-->
							<h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #986923;">Welcome to Deorwine</h1>
							<!--end::Title-->
							<!--begin::Description-->
						
							<!--end::Description-->
						</div>
						<!--end::Content-->
						<!--begin::Illustration-->
						<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(images/lifeatdeorwine/our-history-3.webp)"></div>
						<!--end::Illustration-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-500px p-10 p-lg-15 mx-auto">


						<p class="text-muted font-13 m-t-15">
						@if(session('msg'))

							<div id="ns" class="alert alert-info">{{ Session::get('msg') }}</div>

						@endif

						@if(session('alert-danger'))

							<div id="ns" class="alert alert-info">{{ Session::get('alert-danger') }}</div>
							@endif
                        </p>
							<!--begin::Form-->
							<form class="form w-100" id="kt_sign_in_form" action="{{ route('admin.login') }}" method="POST" >
							    @csrf
								<!--begin::Heading-->
								<div class="text-center mb-10">
									<!--begin::Title-->
									<h1 class="text-dark mb-3">Sign In to Deorwine</h1>
									<!--end::Title-->
									<!--begin::Link-->

									<!--end::Link-->
								    </div>
								<!--begin::Heading-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Label-->
									<label>Email:</label><span style="color:red">*</span>
									<!--end::Label-->
									<!--begin::Input-->
									{!! Form::text('email',null,['class'=>'form-control','id'=>'email','placeholder'=>'Email']) !!}
                                      @if($errors->has('email'))
                                     <span class="error invalid-feedback d-block">{{ $errors->first('email') }}</span>
                                     @endif
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack mb-2">
										<!--begin::Label-->
										<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
										<!--end::Label-->
										<!--begin::Link-->
										<!-- <a href="authentication/flows/aside/password-reset.html" class="link-primary fs-6 fw-bolder">Forgot Password ?</a> -->
										<!--end::Link-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Input-->
									{!! Form::password('password',[ 'class'=>'form-control','id'=>'password','placeholder'=>'Password']) !!}
                                     @if($errors->has('password'))
                                    <span class="error invalid-feedback d-block">{{ $errors->first('password') }}</span>
                                     @endif
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="text-center">
									<!--begin::Submit button-->
									<button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
										<span class="indicator-label">Login</span>
										
									</button>
									<!--end::Submit button-->
									<!--begin::Separator-->
									<div class="text-center text-muted text-uppercase fw-bolder mb-5"></div>
									<!--end::Separator-->
	
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
						<!--begin::Links-->
						<!-- <div class="d-flex flex-center fw-bold fs-6">
							<a href="https://keenthemes.com/faqs" class="text-muted text-hover-primary px-2" target="_blank">About</a>
							<a href="https://keenthemes.com/support" class="text-muted text-hover-primary px-2" target="_blank">Support</a>
							<a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2" target="_blank">Purchase</a>
						</div> -->
						<!--end::Links-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Main-->



@endsection