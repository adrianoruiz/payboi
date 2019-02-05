<?php

use Illuminate\Database\Seeder;
use App\Models\Countrys;

class CountryTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country')->delete();

        Countrys::create(['id' => 1, 'name' => 'Brasil', 'sigla' => 'BR']);
        
    }

}