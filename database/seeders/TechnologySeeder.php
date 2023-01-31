<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Technology::truncate();

        Schema::enableForeignKeyConstraints();

        $technologies = ['Html', 'CSS', 'JS', 'Vuejs', 'C#'];
        foreach ($technologies as $tech) {
            $new_tech = new Technology();
            $new_tech->name = $tech;
            $new_tech->save();
        }
    }
}
