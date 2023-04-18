<?php

namespace Database\Seeders;

use App\Models\tema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class temaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tema::factory()
            ->count(3)
            ->create();
    }
}
