@extends('layout.admin_layout')
@section('content2')

{{ Breadcrumbs::render('PageAdd') }}

{!!  Form::open(['url'=>'admin/page/store','method'=>'post','files'=>true,'class'=>'form-horizontal','role'=>'form','id' => 'userForm']) !!}
@include('admin.page.form',['submitBtnText' => "Create "])

{!! Form::close() !!}

@endsection