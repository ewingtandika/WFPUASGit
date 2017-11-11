<?php

use Illuminate\Database\Seeder;

class InputPerwaliansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datainputperwalian = array(
    			['id'=>1, 'nama'=>'FPP1', 'tanggal_mulai'=>('2017-12-12'), 'tanggal_selesai'=>('2017-12-13')],
        		['id'=>2, 'nama'=>'FPP2', 'tanggal_mulai'=>('2017-12-15'), 'tanggal_selesai'=>('2017-12-16')],
        		['id'=>3, 'nama'=>'Kasus Khusus', 'tanggal_mulai'=>('2017-12-18'), 'tanggal_selesai'=>('2017-12-19')]
    		);
        DB::table('inputperwalians')->insert($datainputperwalian);
    }
}
