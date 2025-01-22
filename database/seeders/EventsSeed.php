<?php

namespace Database\Seeders;

use App\Models\Events;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Events::create([ 'name'=> 'Metting', 'date'=>'2025-03-10', 'description'=>'Metting important']);
        Events::create([ 'name'=> 'Operation', 'date'=>'2025-01-19', 'description'=>'Operation with boos']);
        Events::create([ 'name'=> 'Clean', 'date'=>'2025-09-18', 'description'=>'Clean the floor']);
    }
}
