<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(ClasesTableSeeder::class);        
        $this->call(GruposTableSeeder::class);
    }
}
