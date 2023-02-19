@extends('layout.admin_layout')
@section('content2')

        <!--begin::Card-->
        <div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
									<!--begin::Title-->
									<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">{{$title}}
									<!--begin::Separator-->
									<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
									<!--end::Separator-->
									<!--begin::Description-->
                                    {{ Breadcrumbs::render('Enquiry') }}
									<!--end::Description--></h1>
									<!--end::Title-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center py-1">
									<!--begin::Wrapper-->
									<div class="me-4">
										<!--begin::Menu-->
										<!--begin::Svg Icon | path: icons/duotone/Text/Filter.svg-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Button-->
									
                                    <!-- <a href="{{route('faq.create')}}" class="btn btn-sm btn-primary">
                                    Add</a> -->
                                
                                    <!--end::Button-->
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Container-->
						</div>
<!--begin::Card body-->
<div class="card-body pt-0">
    <!--begin::Table-->
    <table class="table align-middle table-row-dashed fs-6 gy-5 yajra-datatable" id="yajra">
        <!--begin::Table head-->
        <thead>
            <!--begin::Table row-->
            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
            
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>IP</th>
                <th width="100px">Actions</th>
            </tr>
            <!--end::Table row-->
        </thead>
        <!--end::Table head-->
        <!--begin::Table body-->
        <tbody class="text-gray-600 fw-bold">
        </tbody>
        <!--end::Table body-->
    </table>
    <!--end::Table-->
    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are You Sure You Want to Delete ??
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="ok_delete" class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end delete modal -->
</div>
<!--end::Card body-->


@endsection

@push('scripts')

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // $.noConflict();
        var table = $('.yajra-datatable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ordering: false,
            select: true,
            ajax: {
                url: "{{ route('index.inquiry') }}",

            },
            columns: [
                {
                    data: 'id',
                    name: 'id',
                },
                {
                    data: 'name',
                    name: 'name',
                },
                {
                    data: 'email',
                    name: 'email',
                },
                {
                    data: 'phone',
                    name: 'phone',
                },
                {
                    data: 'ip',
                    name: 'ip',
                },
                {
                    data: 'id',
                    name: 'id',
                    render: function(data, type, row, meta) {
                        return `<a href="{{url('/')}}/admin/inquiry/show/${row['id']}" class="" id="show" data-id="${data}">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a href="javascript:void(0)" id="delete_enquiry"  data-bs-toggle="modal" data-bs-target="#deleteModal" data-original-title="Delete" data-id="${row['id']}" class="delete">
                                    <i class="fas fa-trash"></i>
                                </a>`;
                    }
                },
            ]
        });
        $(".searchEmail").keyup(function() {
            table.draw();
        });
        $(".Fname").keyup(function() {
            table.draw();
        });
        $('body').on('click', '#delete_enquiry', function() {
            // if (confirm("Delete Record?") == true) {
            var id = $(this).data('id');
            // ajax
            $('#deleteModal').modal('show');
            $('#ok_delete').click(function() {
                $.ajax({
                    type: "delete",
                    url: '{{ url('/') }}/admin/inquiry/delete/' + id,
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#deleteModal').modal('hide');
                        $('#yajra').DataTable().ajax.reload(null, false);

                    }
                });
            });
        });


        $(document).on('change', '.c_status', function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).attr('id');
            console.log(id, status);
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "{{ url('employer/changeStatus') }}",
                data: {
                    'status': status,
                    'id': id
                },
                success: function(data) {
                    $('#yajra').DataTable().ajax.reload(null, false);
                }
            });
        });


    });
</script>
@endpush

