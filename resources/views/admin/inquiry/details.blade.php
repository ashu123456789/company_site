@extends('layout.admin_layout')
@section('content2')
 
{{ Breadcrumbs::render('viewEnquiry') }}

<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <div class="card-header cursor-pointer">
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Enquiry Details:</h3>
        </div>
    </div>

    <div class="card-body p-9">
    <div class="form-group row">
        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">Full Name:</label>
            <span class="fw-bolder fs-6 text-dark"> {{$enquiry->name}}</span>
        </div>
        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">Email:</label>
            <span class="fw-bold fs-6">{{$enquiry->email}}</span>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">Phone: </label>
            <span class="fw-bolder fs-6 text-dark">{{$enquiry->phone}}</span>
        </div>
         
        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">URL: </label>
            <span style="text-align: right;">{{ url('/') }}/{{$enquiry->url}}</span>
        </div>   
    </div>

    <div class="form-group row">
        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">Message: </label>
            <span class="fw-bolder fs-6 text-dark">{{$enquiry->message}}</span>
        </div>

        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">Interested: </label>
                <span class="fw-bolder fs-6 text-dark">{{$enquiry->interested}}</span>
        </div>
    </div>
     
    <div class="form-group row">
        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">Budget: </label>
            <span class="fw-bolder fs-6 text-dark">{{$enquiry->budget}}</span>
        </div>
      

        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">Skype: </label>
            <span class="fw-bolder fs-6 text-dark">{{$enquiry->skype}}</span>
        </div>
    </div>

   <div class="form-group row">
        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">Subject: </label>
             <span class="fw-bolder fs-6 text-dark">{{$enquiry->subject}}</span>
        </div>

        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">Company Name: </label>
            <span class="fw-bolder fs-6 text-dark">{{$enquiry->company_name}}</span>
        </div>
    </div>

    <div class="form-group row">

        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">Country: </label>
            <span class="fw-bolder fs-6 text-dark">{{$enquiry->country}}</span>
        </div>


        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">State: </label>
            <span class="fw-bolder fs-6 text-dark">{{$enquiry->state}}</span>
        </div>
    </div>

    <div class="form-group row">

        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">Type: </label>
            <span class="fw-bolder fs-6 text-dark">{{$enquiry->type}}</span>
        </div>

        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">File: </label>
           
            @if($enquiry->file)
            <a href="{{asset('storage/enquiry')}}/{{$enquiry->file}}" target="_blank"><span class="col text-right">{{asset('storage/enquiry')}}/{{$enquiry->file}}</span></a>
            @endif
        </div>    
       
        

    </div>

    </div>



    <div class="card-header cursor-pointer">
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">IP Details:</h3>
        </div>
    </div>

    <div class="card-body p-9">
    <div class="form-group row">
        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">IP: </label>
            <span class="fw-bolder fs-6 text-dark">{{$enquiry->ip}}</span>
        </div>
    
        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">Timezone: </label>
            <span class="fw-bolder fs-6 text-dark">{{$ip_address->timezone}}</span>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">Country: </label>
            <span class="fw-bolder fs-6 text-dark">{{$ip_address->country}}</span>
        </div>
    
        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">CountryCode: </label>
            <span class="fw-bolder fs-6 text-dark">{{$ip_address->countryCode}}</span>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">City: </label>
            <span class="fw-bolder fs-6 text-dark">{{$ip_address->city}}</span>
        </div>
    
        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">Zip: </label>
            <span class="fw-bolder fs-6 text-dark">{{$ip_address->zip}}</span>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">Lat: </label>
            <span class="fw-bolder fs-6 text-dark">{{$ip_address->lat}}</span>
        </div>
    
        <div class="col-lg-6">
            <label class="col-lg-4 fw-bold text-muted">Lon: </label>
            <span class="fw-bolder fs-6 text-dark">{{$ip_address->lon}}</span>
        </div>
    </div>
    </div>
</div>
@endsection