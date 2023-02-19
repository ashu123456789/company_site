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

                                               
                        <!-- <div class="col-lg-6 mt-3">
                              <label class="">Page Type: <span class="red">*</span></label>
                              <div class="kt-input-icon">
                                  {!! Form::select('type', array('' => 'Select One', 'Hire' => 'Hire', 'Solution' => 'Solution', 'Services' => 'Services'), $seljob,['class'=>'form-control','id'=>'type']) !!}
                                  @if($errors->has('type'))
                                      <span class="error ">{{ $errors->first('type') }}</span>
                                  @endif
                              </div>
                          </div> -->


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
                              <label>Location:</label><span style="color:red">*</span>
                              {!! Form::text('location',null,['class'=>'form-control','id'=>'location','placeholder'=>'Location']) !!}
                              @if($errors->has('location'))
                                <span class="error invalid-feedback d-block">{{ $errors->first('location') }}</span>
                              @endif
                          </div>

                          <div class="col-lg-6 mt-3">
                              <label>Opening:</label><span style="color:red">*</span>
                              {!! Form::text('opening',null,['class'=>'form-control','id'=>'opening','placeholder'=>'Opening']) !!}
                              @if($errors->has('opening'))
                                <span class="error invalid-feedback d-block">{{ $errors->first('opening') }}</span>
                              @endif
                          </div>

                          <div class="col-lg-6 mt-3">
                              <label>Experience:</label><span style="color:red">*</span>
                              {!! Form::text('experience',null,['class'=>'form-control','id'=>'experience','placeholder'=>'Experience']) !!}
                              @if($errors->has('experience'))
                                <span class="error invalid-feedback d-block">{{ $errors->first('experience') }}</span>
                              @endif
                          </div>

                          <div class="col-lg-6 mt-3">
                              <label>Qualification:</label><span style="color:red">*</span>
                              {!! Form::text('qualification',null,['class'=>'form-control','id'=>'qualification','placeholder'=>'Qualification']) !!}
                              @if($errors->has('qualification'))
                                <span class="error invalid-feedback d-block">{{ $errors->first('qualification') }}</span>
                              @endif
                          </div>

                          <div class="col-lg-6 mt-3">
                              <label>Skill:</label><span style="color:red">*</span>
                              {!! Form::text('skills',null,['class'=>'form-control','id'=>'skills','placeholder'=>'Skill']) !!}
                              @if($errors->has('skills'))
                                <span class="error invalid-feedback d-block">{{ $errors->first('skills') }}</span>
                              @endif
                          </div>

                          <div class="col-lg-6 mt-3">
                              <label>Salary:</label><span style="color:red">*</span>
                              {!! Form::text('salary',null,['class'=>'form-control','id'=>'salary','placeholder'=>'Salary']) !!}
                              @if($errors->has('salary'))
                                <span class="error invalid-feedback d-block">{{ $errors->first('salary') }}</span>
                              @endif
                          </div>

                          <div class="col-lg-6 mt-3">
                              <label>Responsivity:</label><span style="color:red">*</span>
                              {!! Form::textarea('responsivity',null,['class'=>'form-control','id'=>'responsivity','placeholder'=>'Responsivity']) !!}
                              @if($errors->has('responsivity'))
                                  <span class="error invalid-feedback d-block">{{ $errors->first('responsivity') }}</span>
                              @endif
                          </div>
                        
                          <div class="col-lg-6 mt-3">
                              <label>Description:</label><span style="color:red">*</span>
                              {!! Form::textarea('description',null,['class'=>'form-control','id'=>'description','placeholder'=>'Description']) !!}
                              @if($errors->has('description'))
                                  <span class="error invalid-feedback d-block">{{ $errors->first('description') }}</span>
                              @endif
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



