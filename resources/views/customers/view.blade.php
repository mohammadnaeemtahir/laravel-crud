@extends('layouts.app', ['title' => 'Customers View'])
@push('css')

{{-- DATATABLE CDNS --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

{{-- Fontawesome CDN --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('content')
<div class="container">
    <div class="card p-4 shadow">
        <h3 class="text-center text-wrap fw-bold">{{'Registered Customers'}}</h3>
        <div class="table-responsive">
            <table id="registered-customers-table" class="table table-striped mt-3" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-nowrap">Sr #</th>
                        <th class="text-nowrap">Full Name</th>
                        <th class="text-nowrap">Email</th>
                        <th class="text-nowrap">Phone Number</th>
                        <th class="text-nowrap">Age</th>
                        <th class="text-nowrap">Address</th>
                        <th class="text-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $key => $customer)
                    <tr>
                        <td class="text-nowrap">{{++$key}}</td>
                        <td class="text-nowrap">{{$customer->full_name}}</td>
                        <td class="text-nowrap">{{$customer->email}}</td>
                        <td class="text-nowrap">{{$customer->phone_number}}</td>
                        <td class="text-nowrap">{{$customer->age . ' years'}}</td>
                        <td class="text-wrap">{{$customer->address}}</td>
                        <td class="text-nowrap"><a href="{{route('customer.edit', ['id' => $customer->customer_id])}}" class="mx-1"> <i class="fa-solid fa-pen text-primary"></i> </a>
                            <a href="{{route('customer.delete', ['id' => $customer->customer_id])}}" class="mx-1"><i class="fa-solid fa-trash text-danger"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

{{-- DATATABLE Js bundles and custom js --}}
@push('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#registered-customers-table').DataTable();
    });

</script>
@endpush
@endsection
