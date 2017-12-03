<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InputPerwalianFormRequest;
use App\Inputperwalian;
use DB;

class InputPerwalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampil()
    {
        $perwalian = InputPerwalian::where('status','Belum')->orWhere('status','Proses')->firstOrFail();
        if($perwalian->status == 'Belum')
        {
            $wrd = 'Ubah Status Menjadi Proses';
        }
        else{
            $wrd="Ubah Status Menjadi Selesai";
        }
        $listperwalians = Inputperwalian::all();

        return view('Perwalian.masterperwalian',compact('perwalian','wrd','listperwalians'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ubah()
    {
        $perwalian = InputPerwalian::where('status','Belum')->orWhere('status','Proses')->firstOrFail();
        if($perwalian->status == 'Belum')
        {
            $perwalian->status = 'Proses';
            $wrd="Ubah Status Menjadi Selesai";
            $perwalian->save();
        }
        elseif ($perwalian->status == 'Proses') {
            $wrd ='';
           if($perwalian->id <=2){
            DB::select('call spSeleksiMatkul('.$perwalian->id.')');
           $wrd = 'Ubah Status Menjadi Proses';
           }
           
           $perwalian->status = "Selesai";
            $perwalian->save();
            $perwalian = InputPerwalian::where('status','Belum')->orWhere('status','Proses')->firstOrFail();
           
        }
        $listperwalians = Inputperwalian::all();
        return view('Perwalian.masterperwalian',compact('perwalian','wrd','listperwalians'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function beranda()
    {
        $listperwalians = Inputperwalian::all();

        return view('content.mainmahasiswa',compact('listperwalians'));
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
     * @param  \App\Http\Requests\InputPerwalianFormRequest;  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tambahperwalian = new Inputperwalian(array(
            'nama' => $request->get('nama'),
            'tanggal_mulai' => $request->get('tanggal_mulai'),
            'tanggal_selesai' =>$request->get('tanggal_selesai'),
            'status'=>'Belum',
            ));
        $tambahperwalian->save();
       return $request->all();
    }

    public function listMatkul()
    {
        $listperwalians = Inputperwalian::all();
        return view('pages.adminlistperwalian', ['listperwalians'=> $listperwalians]);
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
        Inputperwalian::where('id', $id)->delete();
        $listperwalians = Inputperwalian::all();
        return view('pages.adminlistperwalian', ['listperwalians'=> $listperwalians]);
    }
}
