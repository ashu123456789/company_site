@extends('layout.admin_layout')
@section('content2')


                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h5 class="kt-portlet__head-title">
                        {{ Breadcrumbs::render('FaqAdd') }}
                        </h5>
                    </div>
                </div>
{!!  Form::open(['url'=>'admin/faq/store','method'=>'post','files'=>true,'class'=>'form-horizontal','role'=>'form','id' => 'userForm']) !!}
@include('admin.faq.form',['submitBtnText' => "Create "])

{!! Form::close() !!}
@endsection