<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
class LoginControllerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            'email' => 'thangkuku4@gmail.com',
            'password' => bcrypt('123123'),
            'level' => 1,
            'created_at' => new DateTime(),
        ];
        DB::table('user')->insert($data);
    }
}
