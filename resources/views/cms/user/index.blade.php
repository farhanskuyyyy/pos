@extends('layouts.app')
@section('title', 'User')
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-2">
                        User
                    </h1>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="#">User Management</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            User
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Quick Overview -->
        <div class="row">
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="{{ route('user.create') }}">
                    <div class="block-content block-content-full">
                        <div class="fs-2 fw-semibold text-success">
                            <i class="fa fa-plus"></i>
                        </div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="fw-medium fs-sm text-success mb-0">
                            Add New
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="fs-2 fw-semibold text-danger">24</div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="fw-medium fs-sm text-danger mb-0">
                            Inactive
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_dashboard.html">
                    <div class="block-content block-content-full">
                        <div class="fs-2 fw-semibold text-dark">260</div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="fw-medium fs-sm text-muted mb-0">
                            New User
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_dashboard.html">
                    <div class="block-content block-content-full">
                        <div class="fs-2 fw-semibold text-dark">14503</div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="fw-medium fs-sm text-muted mb-0">
                            All User
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Quick Overview -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Table User </h3>
            </div>
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped table-vcenter" id="table-user">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @livewire('user.view')
    <!-- END Page Content -->
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') }}">
@endsection


@section('js')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/be_tables_datatables.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            One.helpersOnLoad(['jq-notify']);

            var table = $('#table-user').DataTable({
                pageLength: 10,
                ajax: '{{ route('user.user-list') }}',
                lengthMenu: [
                    [5, 10, 15, 20, 1000],
                    [5, 10, 15, 20, 'All']
                ],
                responsive: true,
                autoWidth: false,
                order: [[0, 'asc']],
                buttons: [
                    [{
                        extend : 'csv',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    }],
                    [{
                        extend : 'excel',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    }],
                    [{
                        extend : 'pdf',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    }]
                ],
                dom: "<'row'<'col-sm-12'<'text-left py-2 mb-2'B>>>" +
                    "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                columns: [{
                        data: 'name',
                    },
                    {
                        data: 'email',
                    },
                    {
                        data: null,
                        render: function(data) {
                            return (data.status == 'active') ?
                                '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Active</span>' :
                                '<span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Inactive</span>';
                        },
                    },
                    {
                        data: 'role',
                    },
                    {
                        data: null,
                        render: function(data) {
                            var base_url = $("meta[name=url]").attr("content");
                            return `<button class="btn btn-sm btn-alt-info view" type="button" data-bs-toggle="tooltip" title="View" data-id="${data.id}">
                                        <i class="fa fa-fw fa-eye"></i>
                                    </button>
                                    <a class="btn btn-sm btn-alt-warning" href="${base_url+'/user/edit/'+data.id}" data-bs-toggle="tooltip" title="Edit" data-id="${data.id}">
                                        <i class="fa fa-fw fa-pen-to-square"></i>
                                    </a>
                                    <a class="btn btn-sm btn-alt-danger delete" href="javascript:void(0)" data-bs-toggle="tooltip" title="Delete" data-id="${data.id}">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </a>`;
                        },
                    }
                ]
            });

            $("#table-user tbody").on("click", ".delete", function () {
                var id = $(this).data('id');
                var base_url = $("meta[name=url]").attr("content");
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            method:"DELETE",
                            url:`${base_url+'/user/delete/'+id}`,
                            beforeSend: function () {
                                Swal.fire({
                                    title: '<div class="spinner-border"></div>',
                                    showCancelButton: false,
                                    showConfirmButton: false,
                                    allowOutsideClick: false
                                })
                            },
                            success:function(response){
                                Swal.close();
                                One.helpers('jq-notify', {type: 'success', icon: 'fa fa-check me-1', message: 'Success Delete User'});
                                $('#table-user').DataTable().ajax.reload();
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                Swal.close();
                                One.helpers('jq-notify', {type: 'danger', icon: 'fa fa-times me-1', message: 'Failed Delete User'});
                                console.log(jqXHR.status);
                            },
                        });
                    }
                })
            });

            $("#table-user tbody").on("click", ".view", function () {
                var id = $(this).attr('data-id');
                Livewire.emit('viewData',id);
                console.log(id)
                $("#modal-view").modal('show');
                $("#modal-view").modal({backdrop: "static"});
            });
        });
    </script>
@endsection
