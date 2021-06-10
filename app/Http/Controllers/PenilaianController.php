<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Penilaian;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = [];
        $model = Penilaian::all();
        $siswas = $model->toArray();
        return view('dashboard.data')->with([
                'siswas' => $siswas,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function top_siswa()
    {
        $siswas = [];
        $wawasan_umum = [];
        $kemampuan_bicara = [];
        $karya_cipta = [];
        $kepimimpinan = [];
        $prestasi = [];
        $perilaku = [];
        $usia = [];

        $bobot = [
            'wawasan_umum' => 0.28,
            'kemampuan_bicara' => 0.2,
            'karya_cipta' => 0.15,
            'kepimimpinan' => 0.12,
            'prestasi' => 0.1,
            'perilaku' => 0.1,
            'usia' => 0.05,
        ];

        $model = Penilaian::all();
        $siswas = $model->toArray();

        foreach($siswas as $key => $value){
            array_push($wawasan_umum, $value['wawasan_umum']);
            array_push($kemampuan_bicara, $value['kemampuan_bicara']);
            array_push($karya_cipta, $value['karya_cipta']);
            array_push($kepimimpinan, $value['kepimimpinan']);
            array_push($prestasi, $value['prestasi']);
            array_push($perilaku, $value['perilaku']);
            array_push($usia, $value['usia']);
        }
        // dd($wawasan_umum,
        // $kemampuan_bicara,
        // $karya_cipta,
        // $kepimimpinan,
        // $prestasi,
        // $perilaku,
        // $usia);
        $max_wawasan_umum = max($wawasan_umum);
        $max_kemampuan_bicara = max($kemampuan_bicara);
        $max_karya_cipta = max($karya_cipta);
        $max_kepimimpinan = max($kepimimpinan);
        $max_prestasi = max($prestasi);
        $max_perilaku = max($perilaku);
        $max_usia = max($usia);
        // dd($max_karya_cipta,$max_kemampuan_bicara,$max_kepimimpinan,$max_perilaku,$max_prestasi,$max_usia,$max_wawasan_umum);
        $wawasan_umum = array_map( function($val,$divider,$multiplier) { return $val/$divider*$multiplier ; }, $wawasan_umum,array_fill(0, count($wawasan_umum), $max_wawasan_umum),array_fill(0, count($wawasan_umum), $bobot['wawasan_umum']));
        $kemampuan_bicara = array_map( function($val,$divider,$multiplier) { return $val/$divider*$multiplier ; }, $kemampuan_bicara,array_fill(0, count($kemampuan_bicara), $max_kemampuan_bicara),array_fill(0, count($kemampuan_bicara), $bobot['kemampuan_bicara']));
        $karya_cipta = array_map( function($val,$divider,$multiplier) { return $val/$divider*$multiplier ; }, $karya_cipta,array_fill(0, count($karya_cipta), $max_karya_cipta),array_fill(0, count($karya_cipta), $bobot['karya_cipta']));
        $kepimimpinan = array_map( function($val,$divider,$multiplier) { return $val/$divider*$multiplier ; }, $kepimimpinan,array_fill(0, count($kepimimpinan), $max_kepimimpinan),array_fill(0, count($kepimimpinan), $bobot['kepimimpinan']));
        $prestasi = array_map( function($val,$divider,$multiplier) { return $val/$divider*$multiplier ; }, $prestasi,array_fill(0, count($prestasi), $max_prestasi),array_fill(0, count($prestasi), $bobot['prestasi']));
        $perilaku = array_map( function($val,$divider,$multiplier) { return $val/$divider*$multiplier ; }, $perilaku,array_fill(0, count($perilaku), $max_perilaku),array_fill(0, count($perilaku), $bobot['perilaku']));
        $usia = array_map( function($val,$divider,$multiplier) { return $val/$divider*$multiplier ; }, $usia,array_fill(0, count($usia), $max_usia),array_fill(0, count($usia), $bobot['usia']));

        foreach ($siswas as $key => $value) {
           $siswas[$key]['totalSkor'] = $wawasan_umum[$key] + $kemampuan_bicara[$key] + $karya_cipta[$key] + $kepimimpinan[$key] + $prestasi[$key] + $perilaku[$key] + $usia[$key];
        }
        return view('dashboard.homepage')->with([
            'siswas' => $siswas,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = [];

        $model = new Penilaian();
        $model->nama =     $request->input('nama');
        $model->wawasan_umum =     $request->input('wawasan_umum');
        $model->kemampuan_bicara = $request->input('kemampuan_bicara');
        $model->karya_cipta =      $request->input('karya_cipta');
        $model->kepimimpinan =     $request->input('Kepemimpinan');
        $model->prestasi =         $request->input('prestasi');
        $model->perilaku =         $request->input('prilaku');
        $model->usia =             $request->input('usia');
        if ($model->save()) {
            $response = ['last_insert_id' => $model->id];
        }

        return redirect('form')->with($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
