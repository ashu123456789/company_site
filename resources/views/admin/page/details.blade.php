@extends('layout.admin_layout')
@section('content2')

{{ Breadcrumbs::render('viewPage') }}

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
                <span class="fw-bolder fs-6 text-dark"> {{$page->title}}</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted">Slug:</label>
            <div class="col-lg-8 fv-row">
                <span class="fw-bold fs-6">{{$page->slug}}</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted">Description: </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-dark">{{$page->description}}</span>
            </div>
        </div>
    
        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted">Keyword: </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-dark">{{$page->keyword}}</span>
            </div>
        </div>

        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted">Canonical: </label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-dark">{{$page->canonical}}</span>
            </div>
        </div>
    </div>
</div>

@endsection