@extends('layout.admin_layout')
@section('content2')

{{ Breadcrumbs::render('JobAdd') }}

{!!  Form::open(['url'=>'admin/job/store','method'=>'post','files'=>true,'class'=>'form-horizontal','role'=>'form','id' => 'userForm']) !!}
@include('admin.job.form',['submitBtnText' => "Create "])

{!! Form::close() !!}

@endsection