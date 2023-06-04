@extends('layouts.staffNav')

@section('main-content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Manage Consultation</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-end">
                        <div class="d-flex align-items-center me-4">
                            <a href="{{ route('staff.consultant.create') }}" class="btn btn-primary">Add New</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Location</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if (!$datas->isEmpty())
                    @php $counter = 0; @endphp
                    @foreach ($datas as $data)
                        @php $counter++; @endphp
                        <tr>
                            <td>{{ $counter }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data['department']['value'] }}</td>
                            <td>{{ $data['location']['value'] }}</td>
                            <td>{{ $data->phoneNo }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-success"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7" class="text-center">There is no property available.</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <div class="card-footer">
            <div class="d-flex justify-content-center">
                {{ $datas->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
