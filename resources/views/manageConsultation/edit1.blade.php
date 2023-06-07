@extends('layouts.staffNav')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
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

    <div class="col-lg-12 order-lg-1">

        <div class="card shadow mb-4">

            <div class="card-header py-3">

                {{-- <div class="card-body"> --}}

                <form method="POST" action="{{ route('staff.consultation.update', ['id' => $data['id']]) }}"
                    autocomplete="off">
                    <input type="hidden" name="_token" value="">

                    <input type="hidden" name="_method" value="PUT">
                    {{-- <div class="card-header py-2"> --}}
                    <label for="example-color-input" class="form-control-label mb-3">Consultation's Detail</label>
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#applicant"
                                    role="tab" aria-controls="profile" aria-selected="true">
                                    Applicant's Information
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#spouse" role="tab"
                                    aria-controls="dashboard" aria-selected="false">
                                    Spouse's Information
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#marriage" role="tab"
                                    aria-controls="dashboard" aria-selected="false">
                                    Marriage Information
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
                                                <label class="form-control-label" for="name">Name<span
                                                        class="small text-danger">*</span></label>
                                                <input type="text" id="name" class="form-control"
                                                    name="applicant_name" placeholder="Name"
                                                    value="{{ $data['applicant']['user']['name'] }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="birthdate">Date of Birth</label>
                                                <input type="date" id="birthdate" class="form-control"
                                                    name="applicant_birthdate" placeholder="date of birth"
                                                    value="{{ $data['applicant']['birthdate'] }}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="applicant_email">Email address<span
                                                        class="small text-danger">*</span></label>
                                                <input type="email" id="applicant_email" class="form-control"
                                                    name="applicant_email" placeholder="example@example.com"
                                                    value="{{ $data['applicant']['user']['email'] }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="applicant_IcNum">IC Number<span
                                                        class="small text-danger">*</span></label>
                                                <input type="text" id="applicant_IcNum" class="form-control"
                                                    name="applicant_IcNum" placeholder="IC Number"
                                                    value="{{ $data['applicant']['user']['ic'] }}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="applicant_gender">Gender</label>
                                                <input type="text" id="applicant_gender" class="form-control"
                                                    name="applicant_gender" placeholder="gender"
                                                    value="{{ $data['applicant']['user']['gender'] }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="applicant_phoneNo">Phone
                                                    Number</label>
                                                <input type="text" id="phoneNo" class="form-control"
                                                    name="applicant_phoneNo" placeholder="phone number"
                                                    value="{{ $data['applicant']['user']['contact'] }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label"
                                                    for="applicant_nationality">Nationality</label>
                                                <input type="text" id="applicant_nationality" class="form-control"
                                                    name="applicant_nationality" placeholder="Nationality"
                                                    value="{{ $data['applicant']['nationality'] }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="spouse" role="tabpanel" aria-labelledby="spouse_tab">
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="spouse_name">Name<span
                                                        class="small text-danger">*</span></label>
                                                <input type="text" id="spouse_name" class="form-control"
                                                    name="spouse_name" placeholder="Name"
                                                    value="{{ $data['spouse']['name'] }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="spouse_birthdate">Date of
                                                    Birth</label>
                                                <input type="date" id="spouse_birhtdate" class="form-control"
                                                    name="spouse_birthdate" placeholder="date of birth"
                                                    value="{{ $data['spouse']['birthdate'] }}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="spouse_email">Email address<span
                                                        class="small text-danger">*</span></label>
                                                <input type="email" id="spouse_email" class="form-control"
                                                    name="spouse_email" placeholder="example@example.com"
                                                    value="{{ $data['spouse']['email'] }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="spouse_IcNum">IC Number<span
                                                        class="small text-danger">*</span></label>
                                                <input type="text" id="spouse_IcNum" class="form-control"
                                                    name="spouse_IcNum" placeholder="IC Number"
                                                    value="{{ $data['spouse']['ic'] }}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="spouse_gender">Gender</label>
                                                <input type="text" id="spouse_gender" class="form-control"
                                                    name="spouse_gender" placeholder="gender"
                                                    value="{{ $data['spouse']['gender'] }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="spouse_phoneNo">Phone
                                                    Number</label>
                                                <input type="text" id="spouse_phoneNo" class="form-control"
                                                    name="spouse_phoneNo" placeholder="phone number"
                                                    value="{{ $data['spouse']['phonenumber'] }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label"
                                                    for="spouse_nationality">Nationality</label>
                                                <input type="text" id="spouse_nationality" class="form-control"
                                                    name="spouse_nationality" placeholder="Nationality"
                                                    value="{{ $data['spouse']['nationality'] }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="marriage" role="tabpanel" aria-labelledby="marriage_tab">
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="date">Consultation Date<span
                                                        class="small text-danger">*</span></label>
                                                <input type="date" id="date" class="form-control" name="date"
                                                    placeholder="date" value="{{ $data['date'] }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="slot">slot</label>
                                                <input type="text" id="slot" class="form-control" name="slot"
                                                    placeholder="slot" value="{{ $data['slot'] }}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="document">Document<span
                                                        class="small text-danger">*</span></label>
                                                <input type="text" id="document" class="form-control"
                                                    name="document" placeholder="document"
                                                    value="{{ $data['document'] }}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="location">Location<span
                                                        class="small text-danger">*</span></label>
                                                <input type="text" id="location" class="form-control"
                                                    name="location" placeholder="Location"
                                                    value="{{ $data['location'] }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label class="form-control-label" for="description">Description<span
                                                    class="small text-danger">*</span></label>
                                            <textarea id="description" class="form-control" name="description" placeholder="{{ $data['description'] }}"
                                                disabled>
                                                
                                            </textarea>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="cons_id">Location</label>
                                                <select class="form-control" name="cons_id" required>
                                                    <option value="" disabled selected>Select a consultant</option>
                                                    @foreach ($consultants as $consultant)
                                                        <option value="{{ $consultant->id }}">{{ $consultant->name; }}
                                                        </option>
                                                    @endforeach
                                                </select>
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
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                            <div class="col text-center">
                                <a href="{{ route('staff.consultation.manage') }}"
                                    class="btn btn-secondary btn-md ms-auto">Back</a>
                            </div>
                        </div>
                    </div>
                </form>

                {{-- </div> --}}

            </div>

        </div>

    </div>

@endsection
