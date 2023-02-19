@extends('layout.admin_layout')
@section('content2')

{{ Breadcrumbs::render('FaqEdit') }}

<!-- Forms -->
{{ Form::model($faq,['url'=>'admin/faq/update/'.$faq->id,'method'=>'post','files'=>true,'class'=>'form-horizontal','role'=>'form','id' => 'userForm']) }}

@include('admin.faq.form',['submitBtnText' => "Edit "])
{!! Form::close() !!}
<!-- End form   -->

@endsection

