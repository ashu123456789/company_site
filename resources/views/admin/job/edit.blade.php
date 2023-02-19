@extends('layout.admin_layout')
@section('content2')

{{ Breadcrumbs::render('JobEdit') }}

<!-- Forms -->
{{ Form::model($job,['url'=>'admin/job/update/'.$job->id,'method'=>'post','files'=>true,'class'=>'form-horizontal','role'=>'form','id' => 'userForm']) }}

@include('admin.job.form',['submitBtnText' => "Edit "])
{!! Form::close() !!}
<!-- End form   -->

@endsection