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
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriasTableSeeder::class);
        $this->call(OrdenesTableSeeder::class);
        $this->call(FamiliasTableSeeder::class);
        $this->call(GenerosTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
    }
}
