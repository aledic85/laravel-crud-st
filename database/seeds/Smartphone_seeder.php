<?php

use Illuminate\Database\Seeder;

class Smartphone_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Smartphone::class, 10)->create();
    }
}
