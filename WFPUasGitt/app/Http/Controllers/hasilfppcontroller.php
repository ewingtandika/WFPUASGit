<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matakuliah;
use App\KelasParalel;
use App\Mahasiswa;
use App\InputMatakuliah;
use DB;
class hasilfppcontroller extends Controller
{

  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
          $Mahasiswa = Mahasiswa::whereId('1')->firstOrFail();
        $fpp1 = Matakuliah::select('kode_matkul','nama', 'kp','jumlah_sks','status')
        ->join('kelasparalels','kelasparalels.matakuliah_id','=','matakuliahs.id')->join('inputmatakuliahs','inputmatakuliahs.kelasparalel_id','=','kelasparalels.id')->where('inputmatakuliahs.mahasiswa_id','=','1')
        ->where('inputmatakuliahs.inputperwalian_id','=','1')->get();
         $fpp2 = Matakuliah::select('kode_matkul','nama', 'kp','jumlah_sks','status')
        ->join('kelasparalels','kelasparalels.matakuliah_id','=','matakuliahs.id')->join('inputmatakuliahs','inputmatakuliahs.kelasparalel_id','=','kelasparalels.id')->where('inputmatakuliahs.mahasiswa_id','=','1')
        ->where('inputmatakuliahs.inputperwalian_id','=','2')->get();
         $kk = Matakuliah::select('kode_matkul','nama', 'kp','jumlah_sks','status')
        ->join('kelasparalels','kelasparalels.matakuliah_id','=','matakuliahs.id')->join('inputmatakuliahs','inputmatakuliahs.kelasparalel_id','=','kelasparalels.id')->where('inputmatakuliahs.mahasiswa_id','=','1')
        ->where('inputmatakuliahs.inputperwalian_id','=','3')->get();
        return view ('Perwalian.hasilfpp', ['fpp1' => $fpp1],['Mahasiswa' =>$Mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
