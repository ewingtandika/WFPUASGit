<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matakuliah;
use App\KelasParalel;
use App\Mahasiswa;
use App\InputMatakuliah;
use DB;
use Illuminate\Support\Facades\Auth;

class fppcontroller extends Controller
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
         //{{ Auth::user()->name }} 
             $Mahasiswa = Mahasiswa::where('user_id',Auth::user()->id)->firstOrFail();
        // $Matakuliah = Matakuliah::select('kode_matkul','nama', 'kp','jumlah_sks','kelasparalels_id as kp_id')
        // ->join('kelasparalels','kelasparalels.matakuliah_id','=','matakuliahs.id')->join('inputmatakuliahs','inputmatakuliahs.kelasparalel_id','=','kelasparalels.id')->where('inputmatakuliahs.mahasiswa_id','=','1')
        // ->where('inputmatakuliahs.inputperwalian_id','=','1')->get();
            // $Matakuliah = InputMatakuliah::where('mahasiswa_id','1')->where('inputperwalian_id','1')->get();
        return view ('content.prosesfpp1', ['Mahasiswa' =>$Mahasiswa]);
        

    }

     /**
     * Dapat pengirman dari ajax
     *
     * @param  \App\Http\Requests\Request $request
     * @return \Illuminate\Http\Response
     */
    public function AddMk(Request $request)
    {
        // $mk = Matakuliah::where('kode_matkul',$request->mk)->firstOrFail();
            $mk = KelasParalel::join('matakuliahs','kelasparalels.matakuliah_id','=','matakuliahs.id')->where('matakuliahs.kode_matkul',$request->mk)->where('kp',$request->kp)->firstOrFail();
         //print_r($mk);exit();
          return response()->json(['kode_matkul' => $mk->Matakuliah->kode_matkul,'nama' => $mk->Matakuliah->nama, 'kp'=>$mk->kp,'sks'=>$mk->Matakuliah->jumlah_sks,'kp_id'=>$mk->id]);
         //return response()->json(['kp'=>$mk->kode_matkul]);
    }

    /**
     * Simpan matkul pengirman dari ajax
     *
     * @param  \App\Http\Requests\Request $request
     * @return \Illuminate\Http\Response
     */
    public function SaveMk(Request $request)
    {       
        $data = $request->daftar;
        $per = $request->perwalian;
        $id = Auth::user()->Mahasiswa->id;

        foreach ($data as $key => $value) {
            $kp = $value[1];
            if($value[0]=="Add")
            {

                DB::table("inputmatakuliahs")->insert(
                    ['mahasiswa_id'=>$id,'kelasparalel_id'=>$kp,'status'=>'Pending','inputperwalian_id'=> $per]);
            }
            elseif ($value[0] == "Del") {
                 DB::table("inputmatakuliahs")->where('mahasiswa_id',$id)->where('kelasparalel_id',$value[1])->where('inputperwalian_id',$request->perwalian)->delete();
            }
        }
        return response()->json(['response'=>"data telah dimasukkan"]);

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
