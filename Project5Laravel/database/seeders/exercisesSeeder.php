<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class exercisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercises')->insert([
            'titleEN' => 'Push-ups',
            'titleNL' => 'Push-ups',
            'instructionEN' => 'Yes just do it!',
            'instructionNL' =>'Ja gewoon doen!',
            'media' =>'https://c.tenor.com/gI-8qCUEko8AAAAC/pushup.gif',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
