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
            'color' => '#c5246c',
            'font_color' => '#fff',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('groups')->insert([
            'name_th' => 'เพทาย',
            'name_eng' => 'zircon',
            'color' => '#f09671',
            'font_color' => '#fff',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('groups')->insert([
            'name_th' => 'ไพลิน',
            'name_eng' => 'sapphire',
            'color' => '#3c47b7',
            'font_color' => '#fff',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('groups')->insert([
            'name_th' => 'ไข่มุก',
            'name_eng' => 'pearl',
            'color' => '#EFE8D8',
            'font_color' => '#000',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('groups')->insert([
            'name_th' => 'มรกต',
            'name_eng' => 'emerald',
            'color' => '#34AC90',
            'font_color' => '#fff',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('groups')->insert([
            'name_th' => 'บุษราคัม',
            'name_eng' => 'topaz',
            'color' => '#e3ca4b',
            'font_color' => '#000',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
