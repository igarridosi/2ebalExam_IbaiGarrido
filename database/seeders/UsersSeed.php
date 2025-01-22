<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([ 'name'=> 'Ibai', 'email'=>'ibai@ibai.com', 'password'=>'ibai1234', 'DNI'=>'27384930P', 'date_of_birth'=>'2005-03-10', 'role'=>'admin', 'event_id'=>null]);
        User::create([ 'name'=> 'Ander', 'email'=>'ander@ander.com', 'password'=>'ander1234', 'DNI'=>'36542192L', 'date_of_birth'=>'2001-01-19', 'role'=>'dentist', 'event_id'=>null]);
        User::create([ 'name'=> 'Peio', 'email'=>'peio@peio.com', 'password'=>'peio1234', 'DNI'=>'88783128B', 'date_of_birth'=>'2001-09-18', 'role'=>'dentist', 'event_id'=>null]);
    }
}
