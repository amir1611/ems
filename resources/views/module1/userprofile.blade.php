@extends('layouts.userNav')


@section('content')



<div class="container2">
    <form action="{{ route('user.update', [auth()->user()->id]) }}" method="post">
        @method('PUT')
        @csrf
        <div class="row mt-4 profile-header">
            <h4 class="font-weight-bold mx-auto mt-2 profile-title">User Profile</h4>
        </div>
        <div class="table-responsive">
            <table class="table mt-3 profile-table">
                <tr>
                    <th class="col-md-4">IC Number</th>
                    <td>{{ Auth::guard('web')->user()->ic }}</td>
                </tr>
                <tr>
                    <th class="profile-label">Name</th>
                    <td>
                        <input class="form-control profile-input" type="text" name="name" id="name"
                            value="{{ strtoupper(Auth::guard('web')->user()->name) }}">
                    </td>
                </tr>
                <tr>
                    <th class="profile-label">Gender</th>
                    <td>
                        <select class="form-control profile-input" name="gender" id="gender">
                            <option value="male" {{ Auth::guard('web')->user()->gender === 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ Auth::guard('web')->user()->gender === 'female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th class="profile-label">Phone Number</th>
                    <td>
                        <input class="form-control profile-input" type="text" name="contact" id="contact"
                            value="{{ Auth::guard('web')->user()->contact }}">
                    </td>
                </tr>
                <tr>
                    <th class="profile-label">Email</th>
                    <td>
                        <input class="form-control profile-input" type="email" name="email" id="email"
                            value="{{ Auth::guard('web')->user()->email }}">
                    </td>
                </tr>
            </table>
        </div>
        <div class="text-center">
            <input class="btn profile-btn" type="submit" onclick="return confirm('Confirm to update profile?')"
                value="Edit Profile">
        </div>
    </form>
</div>



@endsection
