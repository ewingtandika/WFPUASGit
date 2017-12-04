<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matakuliah;
use App\KelasParalel;
use DB;
use App\Http\Requests\PerwalianSearchRequest;
use Illuminate\Support\Facades\Auth;


class MatakuliahController extends Controller
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
         $matakuliahs = Matakuliah::all();
        return view('content.informasimatakuliah', ['matakuliahs' => $matakuliahs]);
    }
  public function jadwal()
    {
        $matakuliahs = Matakuliah::all();
        
      $matakuliahs = Matakuliah::select('hari','waktu_mulai', 'waktu_selesai','kode_matkul','matakuliahs.nama AS namaMK','kp','users.name AS namaDosen','semester')
         ->join('kelasparalels','kelasparalels.matakuliah_id','=','matakuliahs.id')->join('dosens','kelasparalels.dosen_id','=','dosens.id')->join('jadwalmatakuliahs','jadwalmatakuliahs.kelasparalel_id','=','kelasparalels.id')->join('users','users.nomorinduk','=','dosens.npk')->get();
        return view('content.jadwalmatakuliah', ['matakuliahs' => $matakuliahs]);
    }

    public function jadwalsemester()
    {
        $matakuliahs = Matakuliah::all();
        
      $matakuliahs = Matakuliah::select('hari','waktu_mulai', 'waktu_selesai','kode_matkul','matakuliahs.nama AS namaMK','kp','users.name AS namaDosen','semester')
         ->join('kelasparalels','kelasparalels.matakuliah_id','=','matakuliahs.id')->join('dosens','kelasparalels.dosen_id','=','dosens.id')->join('jadwalmatakuliahs','jadwalmatakuliahs.kelasparalel_id','=','kelasparalels.id')->join('users','users.nomorinduk','=','dosens.npk')->where('matakuliahs.semester','=',Auth::user()->Mahasiswa->semester)->get();
        return view('content.jadwalmatakuliah', ['matakuliahs' => $matakuliahs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PerwalianSearchRequest $request
     * @return \Illuminate\Http\Response
     */
    public function find(PerwalianSearchRequest $request)
    {
        $car = $request->get('cari');
        //$car = 'ai';
        //$hasil = DB::raw("select * FROM `matakuliahs` WHERE kode_matkul LIKE '%".$car."%' or nama LIKE '%".$car."%'");
        //echo $hasil;
        $matakuliahs = Matakuliah::where("nama",'like','%'.$car.'%')->orWhere("kode_matkul",'like','%'.$car.'%')->get();

        //return redirect('Perwalian.index') ->with('matakuliahs', $hasil);
        return view('content.informasimatakuliah', ['matakuliahs' => $matakuliahs]);
        //print_r($matakuliahs);exit();

    }
/**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PerwalianSearchRequest $request
     * @return \Illuminate\Http\Response
     */
    public function findJadwal(PerwalianSearchRequest $request)
    {
        $car = $request->get('cari');
        $matakuliahs = Matakuliah::select('hari','waktu_mulai', 'waktu_selesai','kode_matkul','matakuliahs.nama AS namaMK','kp','users.name AS namaDosen')
         ->join('kelasparalels','kelasparalels.matakuliah_id','=','matakuliahs.id')->join('dosens','kelasparalels.dosen_id','=','dosens.id')->join('jadwalmatakuliahs','jadwalmatakuliahs.kelasparalel_id','=','kelasparalels.id')->join('users','users.nomorinduk','=','dosens.npk')->where("matakuliahs.nama",'like','%'.$car.'%')->orWhere("matakuliahs.kode_matkul",'like','%'.$car.'%')->get();
     

        //return redirect('Perwalian.index') ->with('matakuliahs', $hasil);
        return view('content.jadwalmatakuliah', ['matakuliahs' => $matakuliahs]);
        //print_r($matakuliahs);exit();

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PerwalianSearchRequest $request
     * @return \Illuminate\Http\Response
     */
    public function findJadwalSemesterIni(PerwalianSearchRequest $request)
    {
        $car = $request->get('cari');
        $matakuliahs = Matakuliah::select('hari','waktu_mulai', 'waktu_selesai','kode_matkul','matakuliahs.nama AS namaMK','kp','users.name AS namaDosen')
         ->join('kelasparalels','kelasparalels.matakuliah_id','=','matakuliahs.id')->join('dosens','kelasparalels.dosen_id','=','dosens.id')->join('jadwalmatakuliahs','jadwalmatakuliahs.kelasparalel_id','=','kelasparalels.id')->join('users','users.nomorinduk','=','dosens.npk')->where("matakuliahs.nama",'like','%'.$car.'%')->orWhere("matakuliahs.kode_matkul",'like','%'.$car.'%')->get();
     

        //return redirect('Perwalian.index') ->with('matakuliahs', $hasil);
        return view('content.jadwalkuliahsemester', ['matakuliahs' => $matakuliahs]);
        //print_r($matakuliahs);exit();

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
        
        $Matakuliah = Matakuliah::whereId($id)->firstOrFail();
        $temptable = DB::raw("(SELECT kelasparalel_id, count(*) AS num_pendaftar 
        FROM inputmatakuliahs GROUP BY kelasparalel_id) as pendaftar");
        $KelasParalel = Kelasparalel::select('kp','kapasitas', 'pendaftar.num_pendaftar')
        ->leftJoin($temptable,'kelasparalel_id','=','id')->where('matakuliah_id','=',$id)->get();

        return view ('Perwalian.show', ['Matakuliah' => $Matakuliah],['KelasParalel' =>$KelasParalel]);

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
