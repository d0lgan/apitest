<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $data [] = [
            'name'=>'Админ',
            'email'=>'admin@testmailg.ru',
            'password'=>bcrypt('qwerty1234'),
        ];

        for($i = 2; $i<=11; $i++){
            $data [] = [
                'name'=>'Пользователь '.$i,
                'email'=>'ueser'.$i.'@testmailg.ru',
                'password'=>bcrypt(Str::random(16)),
            ];
        }


        DB::table('users')->insert($data);
    }
}
