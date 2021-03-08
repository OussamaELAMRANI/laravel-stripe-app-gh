<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Charge;

class ChargesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Charge::factory()->count(50)->hasOutcomes(1)->create();
    }
}