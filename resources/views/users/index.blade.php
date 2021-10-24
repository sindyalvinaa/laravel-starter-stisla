@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <div class="section-body">
        <h2 class="section-title">Manajemen User</h2>

        <div class="row">
            <div class="col-12">
                @include('layouts.alert')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Daftar User</h4>
                        <div class="card-header-action">
                            <a class="btn btn-icon icon-left btn-primary" href="{{ route('user.create') }}">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                Create New User</a>
                            <a class="btn btn-info" href="{{ route('user.export') }}">
                                <i class="fa fa-download" aria-hidden="true"></i>
                                Export data</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Username</label>
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Username">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Level</label>
                                <select id="inputState" class="form-control select2">
                                    <option selected="">Pilih Salah Satu</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                        </div>

                        <div class="card-footer text-right">
                            <button class="btn btn-primary mr-1" type="submit">Submit</button>
                            <button class="btn btn-secondary" type="reset">Reset</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-md" id="datatable"
                                data-url="{{ route('user.filter') }}" data-destroy="{{ url('user') }}">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;"
                            action="{{ route('user.import') }}" class="form-horizontal" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="file" name="import_file" />
                            <button class="btn btn-primary">Import File</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('customScript')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            //datatable
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#datatable').DataTable({});
            // delete
            $(document).on("click", ".swal-6", function(e) {
                e.preventDefault();
                let id = $(this).data('user');
                swal({
                        title: 'Are you sure want to delete this user?',
                        text: 'Once deleted, you will not be able to recover this user!',
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $(this).closest("form").submit()
                            swal('Poof! User has been deleted!', {
                                icon: 'success',
                            });
                        }
                    });
            });
            //select2
            $('.select2').select2({});
        });
    </script>
@endpush

@push('customStyle')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush