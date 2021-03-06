<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matakuliah;
use App\KelasParalel;
use DB;
class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $matakuliahs = Matakuliah::all();
        return view('Perwalian.index', ['matakuliahs' => $matakuliahs]);
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
