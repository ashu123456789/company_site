<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="consultation-form">
                        <h3 class="text-center">FREE CONSULTATION</h3>
                        <h5 class="text-center pt-2">Get your free quote</h5>
                        <form id="freeconForm"  method="post" class="form-block" enctype="multipart/form-data">
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
                            <!-- <input class="free-consult-button" type="submit" value="Get your free Consultation"> -->
                            <button class="free-consult-button" type="submit" id="consultation"  >
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" id="serviceloader" style="display: none;"></span>
                                Get your free Consultation
                            </button>

                        </form>
                    </div>
                </div>

@push('scripts')
<script type="text/javascript">               
        $(document).ready(function() {
        $("#freeconForm").on('submit', function(e){
        //alert("hello");
        e.preventDefault();
        var fd = new FormData();
        var file_data = $('#input-file').prop('files')[0]; // for multiple files
        // for(var i = 0;i<file_data.length;i++){
        //     fd.append("file_"+i, file_data[i]);
        // }
        fd.append('file', file_data);
        var other_data = $('form#freeconForm').serializeArray();
        $.each(other_data,function(key,input){
            fd.append(input.name,input.value);
        });
        $.ajax({
            type: 'POST',
            url: "{{ route('consultation_form') }}",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: fd,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function () {
            $('#serviceloader').show();$('#serviceloader').show();
            $("#consultation").attr('disabled', true); // disable button
            // $('#fupForm').css("opacity",".5");
            },
            success: function(data) {
                $('#serviceloader').hide();
                $("#consultation").attr('disabled', false);
                    if($.isEmptyObject(data.error)){
                        $('.form-control').val('');
                        $("span.error-text").hide();
                        window.location = "thankyou";
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