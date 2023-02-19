@extends('layout.admin_layout')
@section('content2')

{{ Breadcrumbs::render('viewJob') }}

<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <div class="card-header cursor-pointer">
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Page Details:</h3>
        </div>
    </div>
    <div class="card-body p-9">
        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted">Title:</label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-dark"> {{$job->title}}</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted">Slug:</label>
            <div class="col-lg-8 fv-row">
                <span class="fw-bold fs-6">{{$job->slug}}</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted">Description: </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-dark">{{$job->description}}</span>
            </div>
        </div>
    
        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted">Experience: </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-dark">{{$job->experience}}</span>
            </div>
        </div>

        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted">Location: </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-dark">{{$job->location}}</span>
            </div>
        </div>
    </div>
</div>

@endsection