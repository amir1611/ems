@extends('layouts.userNav')

@section('main-content')
    <div class="col-lg-12 order-lg-1">
        <div class="card shadow mb-4">
            {{-- <div class="card-header py-3">
                <div class="pl-lg-4">
                    <div class="row">
                        <h6 class="m-0 font-weight-bold text-primary">Manage Marriage Preparation Course</h6>
                        <div class="col text-right">
                            <button type="button" class="btn btn-primary" onclick="window.location.href='{{route('user.prepCourse.create')}}'">Add New</button>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Manage Marriage Preparation Course</h6>
            </div>
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Organizer
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Place
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Date
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Participant Capacity
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Vacancy
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Action
                        </th>
                    </tr>
                    <tr>
                        <td>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">1</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            PEJABAT AGAMA ISLAM BENTONG
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            MASJID SULTAN HAJI AHMAD SHAH BENTONG
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            24 - 25 JUN 2023
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            40
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            20
                        </th>
                        <th>
                            <button type="submit" class="btn btn-primary" onclick="window.location.href='{{route('user.prepCourse.create')}}'">Register</button>
                            <div class="btn-group" role="group">
                                <a href="#" class="btn btn-success"><i class="fa fa-pencil-square-o"></i></a>
                            </div>
                        </th>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">2</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            PEJABAT AGAMA ISLAM BERA
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            DEWAN SEMINAR MASJID DARUL FIKRI
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            22 - 23 JULAI 2023
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            100
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            95
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Action
                        </th>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">3</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            PEJABAT AGAMA ISLAM CAMERON HIGHLANDS
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            BILIK MESYUARAT PEJABAT AGAMA ISLAM DAERAH CAMERON HIGHLANDS
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            27 - 28 JULAI 2023
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            50
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            40
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Action
                        </th>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">4</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            PEJABAT AGAMA ISLAM CHENOR
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            DEWAN MASJID JAMEK CHENOR
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            21 - 22 JULAI 2023
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            70
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            50
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Action
                        </th>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">5</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            PEJABAT AGAMA ISLAM JENGKA
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            PEJABAT AGAMA ISLAM DAERAH JENGKA
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            15 - 16 JULAI 2023
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            120
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            97
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Action
                        </th>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">6</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            PEJABAT AGAMA ISLAM JERANTUT
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            PEJABAT AGAMA ISLAM DAERAH JERANTUT
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            17 - 18 JULAI 2023
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            100
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            80
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Action
                        </th>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">7</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            PEJABAT AGAMA ISLAM KUANTAN
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            BILIK LATIHAN ICT WISMA SRI PAHANG
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            08 - 09 JULAI 2023
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            120
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            30
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Action
                        </th>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">8</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            PEJABAT AGAMA ISLAM LIPIS
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            DEWAN PUSAT LATIHAN DAKWAH SUNGAI KERPAN
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            08 - 09 JULAI 2023
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            70
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            31
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Action
                        </th>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">9</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            PEJABAT AGAMA ISLAM MARAN
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            DEWAN AUDITORIUM AL-GHAZALI PAID MARAN
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            17 - 18 JUN 2023
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            100
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            46
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Action
                        </th>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">10</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            PEJABAT AGAMA ISLAM PEKAN
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            DEWAN MASJID SULTAN AHMAD SHAH AL-HAJ
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            29 - 30 JULAI 2023
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            100
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            55
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Action
                        </th>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">11</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            PEJABAT AGAMA ISLAM RAUB
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            DEWAN SEMINAR MASJID SULTAN ABU BAKAR
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            24 - 25 JUN 2023
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            100
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            72
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Action
                        </th>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">12</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            PEJABAT AGAMA ISLAM ROMPIN
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            DEWAN PUSAT PENDIDIKAN ISLAM MASJID TENGKU MAHKOTA ABDULLAH ROMPIN
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            08 - 09 JULAI 2023
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            100
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            53
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Action
                        </th>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">13</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            PEJABAT AGAMA ISLAM TEMERLOH
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            DEWAN KULIAH MASJID ABU BAKAR TEMERLOH
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            15 - 16 JULAI 2023
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            100
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            71
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Action
                        </th>
                        </td>
                    </tr>

                </thead>
                {{-- <tbody>
                    @if (!$datas->isEmpty())
                        @php $counter = 0; @endphp
                        @foreach ($datas as $data)
                            @php $counter++; @endphp
                            <tr>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0 ms-3">{{ $counter }}</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">
                                        {{ $data->applicant->user->name }} data</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">
                                        {{ $data->spouse_name }} Spouse</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">
                                        {{ $data->created_at->format('Y-m-d') }} date</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">
                                        Status</p>
                                </td>
                                <td class="align-middle text-end">
                                    <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                        <a class="text-info me-3"
                                            href="{{ route('staff.consultation.edit', ['id' => $data->id]) }}"><i
                                                class="fas fa-eye fa-lg" aria-hidden="true"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3" class="align-middle text-center">
                                <p class="text-sm font-weight-bold mb-0">There is no property
                                    available.
                                </p>
                            </td>
                        </tr>
                    @endif
                </tbody> --}}
            </table>
            <div class="px-3 pt-4">
                {{ $datas->links() }}
            </div>

        </div>

    </div>
@endsection
