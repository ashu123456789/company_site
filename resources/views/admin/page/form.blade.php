    <div class="row">
        <div class="col-lg-12">
        {!! Form::token() !!}
        <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            {{$title}}
                        </h3>
                    </div>
                </div>

                <!--begin::Form-->
                <form class="kt-form kt-form--label-right">
                    <div class="kt-portlet__body">
                        <div class="row mb-5">

                                               
                        <div class="col-lg-6 mt-3">
                              <label class="">Page Type: <span class="red">*</span></label>
                              <div class="kt-input-icon">
                                  {!! Form::select('type', array('' => 'Select One', 'Hire' => 'Hire', 'Solution' => 'Solution', 'Services' => 'Services'), $selPage,['class'=>'form-control','id'=>'type']) !!}
                                  @if($errors->has('type'))
                                      <span class="error ">{{ $errors->first('type') }}</span>
                                  @endif
                              </div>
                          </div>


                        <div class="col-lg-6 mt-3">
                              <label>Title:</label><span style="color:red">*</span>
                              {!! Form::text('title',null,['class'=>'form-control','id'=>'title','placeholder'=>'Title']) !!}
                              @if($errors->has('title'))
                                  <span class="error invalid-feedback d-block">{{ $errors->first('title') }}</span>
                              @endif
                          </div>

                        <div class="col-lg-6 mt-3">
                              <label>Slug:</label><span style="color:red">*</span>
                              {!! Form::text('slug',null,['class'=>'form-control','id'=>'slug','placeholder'=>'Slug']) !!}
                              @if($errors->has('slug'))
                                <span class="error invalid-feedback d-block">{{ $errors->first('slug') }}</span>
                              @endif
                          </div>
                        
                          <div class="col-lg-6 mt-3">
                              <label>Canonical:</label><span style="color:red">*</span>
                              {!! Form::text('canonical',null,['class'=>'form-control','id'=>'canonical','placeholder'=>'Canonical']) !!}
                              @if($errors->has('canonical'))
                                <span class="error invalid-feedback d-block">{{ $errors->first('canonical') }}</span>
                              @endif
                          </div>
                        
                          <div class="col-lg-6 mt-3">
                              <label>Description:</label><span style="color:red">*</span>
                              {!! Form::textarea('description',null,['class'=>'form-control','id'=>'description','placeholder'=>'Description']) !!}
                              @if($errors->has('description'))
                                  <span class="error invalid-feedback d-block">{{ $errors->first('description') }}</span>
                              @endif
                          </div>


                          <div class="col-lg-6 mt-3">
                              <label class="">Keyword: <span class="red">*</span></label>
                              <div class="kt-input-icon">
                              {!! Form::textarea('keyword',null,['class'=>'form-control','id'=>'keyword','placeholder'=>'Keyword']) !!}
                                  @if($errors->has('keyword'))
                                      <span class="error invalid-feedback d-block">{{ $errors->first('keyword') }}</span>
                                  @endif
                              </div>
                          </div>
                         
                          
                          </div>
                        </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions pull-right">
                            <div class="row">
                                <div class="col-lg-6">
                                    <button type="submit" name="myButton" id="myButton" class="btn btn-primary">Save</button>
                                 
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    </div>
                </form>

                <!--end::Form-->
            </div>

            <!--end::Portlet-->

        </div>
    </div>



