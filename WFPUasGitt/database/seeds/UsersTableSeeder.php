<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        /*datausers = array(
    			['id'=>'1', 'name'=>'Andi', 'email'=>'andi@gmail.com', 'password'=>bcrypt('rahasia')],
        		['id'=>'2', 'name'=>'Tono', 'email'=>'tono@gmail.com', 'password'=>bcrypt('rahasia')],
        		['id'=>'3', 'name'=>'Daniel', 'email'=>'daniel@gmail.com', 'password'=>bcrypt('rahasia')],
    		);
        DB::table('users')->insert($datausers);
        */

        //manggil faker
        factory(App\User::class, 140)->create();
//         update users u inner join administrasis m on u.id = m.user_id
// set u.nomorinduk = m.npk
    }
}
