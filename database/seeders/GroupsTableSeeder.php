<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'name_th' => 'ทับทิม',
            'name_eng' => 'pomegranate',
            'color' => '#660c21',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('groups')->insert([
            'name_th' => 'เพทาย',
            'name_eng' => 'zircon',
            'color' => '#EDF0F1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('groups')->insert([
            'name_th' => 'ไพลิน',
            'name_eng' => 'sapphire',
            'color' => '#0F52BA',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('groups')->insert([
            'name_th' => 'ไข่มุก',
            'name_eng' => 'pearl',
            'color' => '#E2DFD2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('groups')->insert([
            'name_th' => 'มรกต',
            'name_eng' => 'emerald',
            'color' => '#50C878',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('groups')->insert([
            'name_th' => 'บุษราคัม',
            'name_eng' => 'topaz',
            'color' => '#ffc87c',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
