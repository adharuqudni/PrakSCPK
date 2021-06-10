@extends('dashboard.base')

@section('css')

@endsection

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Input Nilai Duta Pelajar</h4></div>
            <div class="card-body">
                @if(Session::has('message'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        </div>
                    </div>
                @endif            
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="{{ route('data.store') }}">
                            @csrf
                            <input name="marker" value="selectModel" type="hidden">
                            <div class="form-group">
                                <label >Nama Siswa</label>
                                <input 
                                    type="text"
                                    placeholder="Nama"
                                    name="nama"
                                    class="form-control"
                                >
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Nilai Wawasan Umum</label>
                                        <input 
                                            type="number"
                                            placeholder="0"
                                            name="wawasan_umum"
                                            class="form-control"
                                        >
                                    </div>
                                     <div class="form-group">
                                        <label>Nilai Prilaku</label>
                                        <input 
                                            type="number"
                                            placeholder="0"
                                            name="prilaku"
                                            class="form-control"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label>Nilai Kemampuan Bicara</label>
                                        <input 
                                            type="number"
                                            placeholder="0"
                                            name="kemampuan_bicara"
                                            class="form-control"
                                        >
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Nilai Karya Cipta</label>
                                        <input 
                                            type="number"
                                            placeholder="0"
                                            name="karya_cipta"
                                            class="form-control"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label>Nilai Kepemimpinan</label>
                                        <input 
                                            type="number"
                                            placeholder="0"
                                            name="Kepemimpinan"
                                            class="form-control"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label>Nilai Prestasi Lomba</label>
                                        <input 
                                            type="number"
                                            placeholder="0"
                                            name="prestasi"
                                            class="form-control"
                                        >
                                    </div>
                                </div>
                                <div class="col-4">
                                     <div class="form-group">
                                        <label>Nilai Usia</label>
                                        <input 
                                            type="number"
                                            placeholder="0"
                                            name="usia"
                                            class="form-control"
                                        >
                                    </div>
                                </div>
                            </div>
                           
                            <button
                                type="submit"
                                class="btn btn-info"
                            >
                                Select
                            </button>
                            <a 
                                href="{{ route('data') }}"
                                class="btn btn-info"
                            >
                                Return
                            </a>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('javascript')


@endsection
