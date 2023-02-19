<div class="col-lg-5 apply-form">
                    <form id="serviceForm"  method="post" enctype="multipart/form-data">
                        <div class="text-center form-heading">
                            <h4>Want to be an astronaut of Deorwine Infotech?</h4>
                            <p>Fill the information to schedule your interview.</p>
                            <hr>
                            <h6>Apply for React Native Developer</h6>
                        </div>
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
                        <div class="d-flex justify-content-between align-items-center Browse">
                            <div>
                                <h6>Or Upload Resume</h6>
                                <span class="my-3">5Mb Max (PDF, Doc, Docx, JPG)</span>
                            </div>

                            <div class='file'>
                                <label for='input-file' class="for-detail">
                                    Browse... 
                                    <img alt="cloud-computing" title="cloud-computing" src="{{asset('images/cloud-computing (2).svg')}}">
                                </label>
                                <input id='input-file' type='file' class="d-none" />
                            </div>
                        </div>
                         {{--<button type="submit" class="btn-block text-uppercase">submit</button>--}}
                        <button class="btn-block text-uppercase" type="submit" id="jobform"  >
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" id="jobloader" style="display: none;"></span>
                            submit
                            </button>
                    </form>
                </div>


@push('scripts')
<script type="text/javascript">   
$(document).ready(function() {
    $("#serviceForm").on('submit', function(e){
            // $("#serviceForm").serialize()
        e.preventDefault();
        var fd = new FormData();
        var file_data = $('#input-file').prop('files')[0]; // for multiple files
        // for(var i = 0;i<file_data.length;i++){
        //     fd.append("file_"+i, file_data[i]);
        // }
        fd.append('file', file_data);
        var other_data = $('form#serviceForm').serializeArray();
        $.each(other_data,function(key,input){
            fd.append(input.name,input.value);
        });
        $.ajax({
            type: 'POST',
            url: "{{ route('service_form') }}",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: fd,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function () {
            $('#jobloader').show();$('#jobloader').show();
            $("#jobform").attr('disabled', true); // disable button
            // $('#fupForm').css("opacity",".5");
            },
            success: function(data) {
                $('#jobloader').hide();
                $("#jobform").attr('disabled', false);
                    if($.isEmptyObject(data.error)){
                        $('.form-control').val('');
                        $("span.error-text").hide();
                        window.location = "{{ route('thankyou') }}";
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