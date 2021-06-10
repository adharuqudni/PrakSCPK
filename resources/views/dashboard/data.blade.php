@extends('dashboard.base')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <!-- /.row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <p class="float-left">Duta Pelajar Binamu</p>
                            </div>
                            <div>
                                <a class="btn btn-info float-right text-white" href="{{ route('form') }}">
                                    Tambah Siswa
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-hover table-outline mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">
                                            No
                                        </th>
                                        <th>User</th>
                                        <th>Usia</th>
                                        <th>Kemampuan Bicara</th>
                                        <th>Karya Cipta</th>
                                        <th>Kepimpinan</th>
                                        <th>Prestasi Perlombaan</th>
                                        <th>Prilaku</th>
                                        <th>Wawasan Utama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswas as $siswa)
                                    <tr>
                                        <td class="text-center">
                                            1
                                        </td>
                                        <td>
                                            <div>{{$siswa['nama']}}</div>
                                            <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                {{$siswa['usia']}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                {{$siswa['kemampuan_bicara']}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                {{$siswa['karya_cipta']}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                {{$siswa['kepimimpinan']}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                {{$siswa['prestasi']}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                               {{$siswa['perilaku']}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                {{$siswa['wawasan_umum']}}
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- /.row-->
        </div>
    </div>

@endsection

@section('javascript')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
@endsection
