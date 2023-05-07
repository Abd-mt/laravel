<?php

namespace Database\Seeders;

use App\Models\nota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class notaSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        nota::factory()
            ->count(5)
            ->create();
    }
}
