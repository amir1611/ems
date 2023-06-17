@extends('layouts.userNav')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Marriage Application') }}</h1>

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

    <div class="col-lg-12 order-lg-1">

        <div class="card shadow mb-4">

            <div class="card-header py-3">

                {{-- <div class="card-body"> --}}

                <form method="POST" action="{{ route('user.application.store') }}" autocomplete="off"
                    enctype="multipart/form-data">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">


                    {{-- <div class="card-header py-2"> --}}
                    <label for="example-color-input" class="form-control-label mb-3">Marriage Request Information</label>
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#spouse" role="tab"
                                    aria-controls="profile" aria-selected="true">
                                    Applicant's Information
                                </a>
                            </li>
                        </ul>
                        <br>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="applicant" role="tabpanel"
                                aria-labelledby="applicant_tab">
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="id">Applicant ID<span
                                                        class="small text-danger">*</span></label>
                                                <input type="text" id="id" class="form-control"
                                                    name="applicant_id" placeholder="ID" value="{{ $applicant->id }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="spouse_id">Spouse ID<span
                                                        class="small text-danger">*</span></label>
                                                <input type="text" id="spouse_id" class="form-control" name="spouse_id"
                                                    placeholder="ID">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="location">Location<span
                                                        class="small text-danger">*</span></label>
                                                <input type="location" id="location" class="form-control" name="location"
                                                    placeholder="location">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="wed_date">Wedding Date</label>
                                                <input type="text" id="wed_date" class="form-control" name="wed_date"
                                                    placeholder="wed_date">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="witness_id">Witness ID<span
                                                        class="small text-danger">*</span></label>
                                                <input type="text" id="witness_id" class="form-control" name="witness_id"
                                                    placeholder="witness_id">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="wali_id">Wali ID<span
                                                        class="small text-danger">*</span></label>
                                                <input type="text" id="wali_id" class="form-control" name="wali_id"
                                                    placeholder="wali_id">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">                               
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="document">Support Document<span
                                                        class="small text-danger">*</span></label>
                                                <input type="file" id="docs" class="form-control" name="docs"
                                                    placeholder="docs"required>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Button -->
                    <br><br>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary">Apply</button>
                            </div>
                        </div>
                    </div>


                {{-- </div> --}}

            </div>

        </div>

    </div>

@endsection
