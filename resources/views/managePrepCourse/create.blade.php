@extends('layouts.userNav')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Profile') }}</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">

        <div class="col-lg-8 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Applicant's Details</h6>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('staff.consultant.store') }}" autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" name="_method" value="PUT">
                        <h6 class="m-0 font-weight-bold text-muted mb-4">Applicant's Information</h6>

                        <div class="pl-lg-4">
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Name<span
                                                class="small text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control" name="name"
                                            placeholder="Name">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="department">IC Number</label>
                                            <input type="text" id="IcNum" class="form-control" name="IcNum"
                                                placeholder="IcNum">
                                        </div>
                                
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="department">Birthdate</label>
                                            <input type="text" id="birthdate" class="form-control" name="birthdate"
                                                placeholder="birthdate">
                                        </div>
                                
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="phoneNo">Phone Number</label>
                                        <input type="text" id="phoneNo" class="form-control" name="phoneNo"
                                            placeholder="phoneNo">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">Email address<span
                                                class="small text-danger">*</span></label>
                                        <input type="email" id="email" class="form-control" name="email"
                                            placeholder="example@example.com"
                                            value="{{ old('email', Auth::user()->email) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="department">IC Number</label>
                                        <input type="text" id="IcNum" class="form-control" name="IcNum"
                                            placeholder="IcNum">
                                    </div>
                            
                                </div>
                            </div>

                        </div>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection

