@extends('layout.app')
@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <div class="my-auto">
                    <h5 class="page-title fs-21 mb-1 mt-4">Institute List</h5>
                </div>
            </div>
            <!-- Page Header Close -->

            <!-- Start:: row-4 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">All Institutes</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="file-export" class="table table-bordered text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Institute Name</th>
                                            <th>Institute Code</th>
                                            <th>Institute Type</th>
                                            <th>City</th>
                                            <th>Institute Email</th>
                                            <th>Institute Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011-04-25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011-07-25</td>
                                            <td>$170,750</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: row-4 -->

            @push('scripts')
                <!-- Datatables Cdn -->
                <script src="https://code.jquery.com/jquery-3.6.1.min.js"
                    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

                <!-- Popper JS -->
                <script src="{{ asset('admin/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

                <!-- Bootstrap JS -->
                <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

                <!-- Defaultmenu JS -->
                <script src="{{ asset('admin/assets/js/defaultmenu.min.js') }}"></script>

                <!-- Node Waves JS-->
                <script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>

                <!-- Sticky JS -->
                <script src="{{ asset('admin/assets/js/sticky.js') }}"></script>

                <!-- Simplebar JS -->
                <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
                <script src="{{ asset('admin/assets/js/simplebar.js') }}"></script>

                <!-- Color Picker JS -->
                <script src="{{ asset('admin/assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

                <!-- Custom-Switcher JS -->
                <script src="{{ asset('admin/assets/js/custom-switcher.min.js') }}"></script>

                <!-- Datatables Cdn -->
                <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
                <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/pdfmake.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
                <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

                <!-- Internal Datatables JS -->
                <script src="{{ asset('admin/assets/js/datatables.js') }}"></script>

                <!-- Custom JS -->
                <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
            @endpush
        @endsection
