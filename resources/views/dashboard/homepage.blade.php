@extends('dashboard.base')
@section('content')

    <div class="container-fluid">
        <div class="fade-in">
            <!-- /.row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Hasil Pemeringkatan Siswa</div>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-hover table-outline mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">
                                        </th>
                                        <th>Nama siswa</th>
                                        <th>Persentase Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswas as $siswa)
                                        <tr>
                                            <td class="text-center">
                                                <div class="c-avatar">
                                                    <svg class="c-icon">
                                                        <use
                                                            xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-people">
                                                        </use>
                                                    </svg>
                                                </div>
                                            </td>
                                            <td>
                                                <div>{{ ucwords($siswa['nama']) }}</div>
                                            </td>
                                            <td>
                                                <div class="clearfix">
                                                    <div class="float-left">
                                                        <strong>{{ $siswa['totalSkor'] * 100 }}%</strong>
                                                    </div>
                                                    <div class="float-right">
                                                    </div>
                                                </div>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: {{ $siswa['totalSkor'] * 100 }}%" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
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

    @endsection @section('javascript')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
@endsection
