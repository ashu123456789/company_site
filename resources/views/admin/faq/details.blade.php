@extends('layout.admin_layout')
@section('content2')

{{ Breadcrumbs::render('viewFaq') }}

<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <div class="card-header cursor-pointer">
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Faq Detail:</h3>
        </div>
    </div>
    <div class="card-body p-9">
        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted">Question:</label>
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-dark"> {{$faq->question}}</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-bold text-muted">Asnwer:</label>
            <div class="col-lg-8 fv-row">
                <span class="fw-bold fs-6">{{$faq->answer}}</span>
            </div>
        </div>

    </div>
</div>

@endsection