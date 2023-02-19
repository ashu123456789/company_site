<div class="col-xl-5 col-lg-5 col-md-12 col-12">
                    <div class="consultation-form ios-hiring-form">
                        <h3 class="text-center">Get A Quote</h3>
                        <form id="hireForm"  method="post" class="form-block" enctype="multipart/form-data">
                        <div class="mb-4">
                            {!! Form::text('name',null,['class'=>'form-control mb-0','id'=>'name','placeholder'=>'Name*']) !!}
                            <span class="text-danger error-text name_err"></span>
                            </div>
                            <div class="mb-4">
                            {!! Form::text('email',null,['class'=>'form-control mb-0','id'=>'email','placeholder'=>'Email*']) !!}
                            <span class="text-danger error-text email_err"></span>
                            </div>
                            <div class="mb-4">
                            {!! Form::text('phone',null,['class'=>'form-control mb-0','id'=>'phone','placeholder'=>'Phone*']) !!}
                            <span class="text-danger error-text phone_err"></span>
                            </div>
                            <div class="mb-4">
                            {!! Form::text('company_name',null,['class'=>'form-control mb-0','id'=>'company_name','placeholder'=>'Company name*']) !!}
                            <span class="text-danger error-text company_name_err"></span>
                            </div>
                            <div class="mb-4">
                            {!! Form::text('country',null,['class'=>'form-control mb-0','id'=>'country','placeholder'=>'Country*']) !!}
                            <span class="text-danger error-text country_err"></span>
                            </div>
                            <div class="mb-4">
                            {!! Form::text('state',null,['class'=>'form-control mb-0','id'=>'state','placeholder'=>'State*']) !!}
                            <span class="text-danger error-text state_err"></span>
                            </div>
                            <input class="free-consult-button" type="submit" value="Get your free Consultation">
                        </form>
                    </div>
                </div>

  @push('scripts')
<script type="text/javascript">               
            $(document).ready(function() {
            $("#hireForm").on('submit', function(e){
            e.preventDefault();
            var fd = new FormData();
            var file_data = $('#input-file').prop('files')[0]; // for multiple files
            // for(var i = 0;i<file_data.length;i++){
            //     fd.append("file_"+i, file_data[i]);
            // }
            fd.append('file', file_data);
            var other_data = $('form#hireForm').serializeArray();
            $.each(other_data,function(key,input){
                fd.append(input.name,input.value);
            });
            $.ajax({
                type: 'POST',
                url: "{{ route('hire_form') }}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: fd,
                dataType: 'json',
                contentType: false,
                cache: false,
                processData:false,
                // beforeSend: function(){
                //   //  $('.submitBtn').attr("disabled","disabled");
                //     $('#enquireForm').css("opacity",".5");
                // },
                success: function(data) {
                        if($.isEmptyObject(data.error)){
                            $('.form-control').val('');
                            $("span.error-text").hide();
                        }else{
                            printErrorMsg(data.error);
                        }
                    }
            });
            });
            function printErrorMsg (msg) {
                        $("span.error-text").hide();
                        $.each( msg, function( key, value ) {
                        $('.'+key+'_err').text(value).show();
                        });
                    }
            });        
            </script>
  @endpush                