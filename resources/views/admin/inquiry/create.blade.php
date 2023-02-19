@extends('layout.admin_layout')
@section('content2')

{!!  Form::open(['url'=>'admin/faq/store','method'=>'post','files'=>true,'class'=>'form-horizontal','role'=>'form','id' => 'userForm']) !!}
@include('admin.faq.form',['submitBtnText' => "Create "])

{!! Form::close() !!}
@endsection