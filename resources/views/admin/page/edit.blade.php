@extends('layout.admin_layout')
@section('content2')

{{ Breadcrumbs::render('PageEdit') }}

<!-- Forms -->
{{ Form::model($page,['url'=>'admin/page/update/'.$page->id,'method'=>'post','files'=>true,'class'=>'form-horizontal','role'=>'form','id' => 'userForm']) }}

@include('admin.page.form',['submitBtnText' => "Edit "])
{!! Form::close() !!}
<!-- End form   -->

@endsection