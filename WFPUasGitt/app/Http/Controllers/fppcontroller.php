<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matakuliah;
use App\KelasParalel;
use App\Mahasiswa;
use App\InputMatakuliah;
use App\Inputperwalian;
use DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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
            date_default_timezone_set("Asia/Jakarta");
            $perwalian = InputPerwalian::where('tanggal_mulai','<=',Carbon::now())->where('status','Belum')->first();
            if($perwalian === null){
                $id_perwalian = [-1,''];
            }
            else{
                $id_perwalian = [$perwalian->id,$perwalian->nama];
            }
            $Matakuliah = Matakuliah::all();

        // $Matakuliah = Matakuliah::select('kode_matkul','nama', 'kp','jumlah_sks','kelasparalels_id as kp_id')
        // ->join('kelasparalels','kelasparalels.matakuliah_id','=','matakuliahs.id')->join('inputmatakuliahs','inputmatakuliahs.kelasparalel_id','=','kelasparalels.id')->where('inputmatakuliahs.mahasiswa_id','=','1')
        // ->where('inputmatakuliahs.inputperwalian_id','=','1')->get();
            // $Matakuliah = InputMatakuliah::where('mahasiswa_id','1')->where('inputperwalian_id','1')->get();
        return view ('content.prosesfpp1', compact("Mahasiswa","id_perwalian","Matakuliah"));
        

    }

    /**
     * Display a listing of the resource.
     * @param  \App\Http\Requests\Request $request
     * @return \Illuminate\Http\Response
     */
    public function cariKpajax(Request $request)
    {
        $kp = KelasParalel::where('matakuliah_id',$request->id_mk)->get();
        return response()->json([
            'kp'=>$kp,
        ]);
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
            $mk = KelasParalel::join('matakuliahs','kelasparalels.matakuliah_id','=','matakuliahs.id')->where('matakuliahs.id',$request->mk)->where('kelasparalels.id',$request->kp)->firstOrFail();
         //print_r($mk);exit();
            if($request->ttlsks + $mk->Matakuliah->jumlah_sks <= Auth::user()->Mahasiswa->sks)
            {
                $matakuliah = Inputmatakuliah::join('kelasparalels','inputmatakuliahs.kelasparalel_id','=','kelasparalels.id')->where('inputmatakuliahs.status', '!=',"Ditolak")->where('inputmatakuliahs.mahasiswa_id',Auth::user()->Mahasiswa->id)->where('kelasparalels.matakuliah_id',$request->mk)->first();
                if($matakuliah === null)
                {
                    return response()->json(['hasil'=> 1, 'kode_matkul' => $mk->Matakuliah->kode_matkul,'nama' => $mk->Matakuliah->nama, 'kp'=>$mk->kp,'sks'=>$mk->Matakuliah->jumlah_sks,'kp_id'=>$mk->id]);
                }
               
                else{ return response()->json(['hasil' => 0,'message'=>'kamu sudah memasukkan mata kuliah ini atau di kp lain']);}
            }
            else{
                return response()->json(['hasil' => 0,'message'=>'sks yang kamu peroleh sudah melebihi kapastias maksimum sks kamu semester ini']);
            }
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
        $response = "data telah dimasukkan: ";

        foreach ($data as $key => $value) {
            $kp = $value[1];
            if($per <=2)
            {
                if($value[0]=="Add")
                {

                    DB::table("inputmatakuliahs")->insert(
                        ['mahasiswa_id'=>$id,'kelasparalel_id'=>$kp,'status'=>'Pending','inputperwalian_id'=> $per]);
                }
                elseif ($value[0] == "Del") {
                     DB::table("inputmatakuliahs")->where('mahasiswa_id',$id)->where('kelasparalel_id',$value[1])->where('inputperwalian_id',$request->perwalian)->delete();
                }
            }
            else{
                 if($value[0]=="Add")
                {
                    $kelaspararel = KelasParalel::where('id',$kp)->first();
                    $Diterima =Inputmatakuliah::where('status','Diterima')->where('kelasparalel_id',$kp)->get()->count();
                    if($kelaspararel->kapasitas > $Diterima)
                    {
                        DB::table("inputmatakuliahs")->insert(
                            ['mahasiswa_id'=>$id,'kelasparalel_id'=>$kp,'status'=>'Diterima','inputperwalian_id'=> $per]);
                        $response .= $kelaspararel->Matakuliah->nama ." diterima, ";

                    }
                    else{
                        $response .= $kelaspararel->Matakuliah->nama ." ditolak, ";
                    }
                }
                elseif ($value[0] == "Del") {
                     DB::table("inputmatakuliahs")->where('mahasiswa_id',$id)->where('kelasparalel_id',$value[1])->where('inputperwalian_id',$request->perwalian)->delete();
                }
            }
        }
        return response()->json(['response'=>$response]);

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
