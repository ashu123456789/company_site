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
                              <label>Question:</label><span style="color:red">*</span>
                              {!! Form::text('question',null,['class'=>'form-control','id'=>'question','placeholder'=>'Question']) !!}
                              @if($errors->has('question'))
                                <span class="error invalid-feedback d-block">{{ $errors->first('question') }}</span>
                              @endif
                          </div>
                          <div class="col-lg-6 mt-3">
                              <label>Answer:</label><span style="color:red">*</span>
                              {!! Form::text('answer',null,['class'=>'form-control','id'=>'answer','placeholder'=>'Answer']) !!}
                              @if($errors->has('answer'))
                                  <span class="error invalid-feedback d-block">{{ $errors->first('answer') }}</span>
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



