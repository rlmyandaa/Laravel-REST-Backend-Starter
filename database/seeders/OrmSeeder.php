<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Orm;

class OrmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Orm::factory()->count(300)->create();
    }
}
