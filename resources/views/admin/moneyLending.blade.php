    @extends('layouts.main')

    @section('title')
        Customers Data
    @endsection
    @section('css')
        <!-- DataTables.net  -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/addons/datatables.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/addons/datatables-select.min.css')}}">
    @endsection
    <!-- Main layout  -->
    @section('main')
    <main>
        <div class="container-fluid mb-5">
            <!-- Section: Basic examples -->
            <section>
                <!-- Gird column -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>First Name
                                        </th>
                                        <th>Last Name
                                        </th>
                                        <th>Middle Name
                                        </th>
                                        <th>Age
                                        </th>
                                        <th>Gender
                                        </th>
                                        <th>Address
                                        </th>
                                        <th>Contact Number
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                    <tr>
                                        <td>{{ $customer->firstname }}</td>
                                        <td>{{ $customer->lastname }}</td>
                                        <td>{{ $customer->middlename }}</td>
                                        <td>{{ $customer->age }}</td>
                                        <td>{{ $customer->gender }}</td>
                                        <td>{{ $customer->address }}</td>
                                        <td>{{ $customer->contact_number }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name
                                        </th>
                                        <th>Position
                                        </th>
                                        <th>Office
                                        </th>
                                        <th>Age
                                        </th>
                                        <th>Start date
                                        </th>
                                        <th>Salary
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Gird column -->
        </section>
        <!-- Section: Docs link -->
    </main>
    <!-- Main layout -->
@section('scripts')
    <!-- DataTables  -->
    <script type="text/javascript" src="{{asset('assets/js/addons/datatables.min.js')}}"></script>
    <!-- DataTables Select  -->
    <script type="text/javascript" src="{{asset('assets/js/addons/datatables-select.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/customers/table.js')}}"></script>
@endsection
@endsection
