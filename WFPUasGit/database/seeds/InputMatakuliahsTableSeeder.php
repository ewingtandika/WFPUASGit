<?php

use Illuminate\Database\Seeder;

class InputMatakuliahsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datainputmatkul = array(
    			['mahasiswa_id'=>1, 'kelasparalel_id'=>1, 'status'=>'Pending', 'inputperwalian_id'=>1],
        		['mahasiswa_id'=>2, 'kelasparalel_id'=>2, 'status'=>'Pending', 'inputperwalian_id'=>2],
        		['mahasiswa_id'=>3, 'kelasparalel_id'=>3, 'status'=>'Pending', 'inputperwalian_id'=>3],
        		['mahasiswa_id'=>4, 'kelasparalel_id'=>4, 'status'=>'Pending', 'inputperwalian_id'=>1],
        		['mahasiswa_id'=>5, 'kelasparalel_id'=>5, 'status'=>'Pending', 'inputperwalian_id'=>2],
        		['mahasiswa_id'=>6, 'kelasparalel_id'=>6, 'status'=>'Pending', 'inputperwalian_id'=>3],
        		['mahasiswa_id'=>7, 'kelasparalel_id'=>7, 'status'=>'Pending', 'inputperwalian_id'=>1],
        		['mahasiswa_id'=>8, 'kelasparalel_id'=>8, 'status'=>'Pending', 'inputperwalian_id'=>2],
        		['mahasiswa_id'=>9, 'kelasparalel_id'=>9, 'status'=>'Pending', 'inputperwalian_id'=>3],
        		['mahasiswa_id'=>10, 'kelasparalel_id'=>10, 'status'=>'Pending', 'inputperwalian_id'=>1],

    		);
        DB::table('inputmatakuliahs')->insert($datainputmatkul);

    }

    public function down()
    {
        Schema::dropIfExists('inputmatakuliahs');
    }
}
