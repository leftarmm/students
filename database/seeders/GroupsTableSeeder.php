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
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('groups')->insert([
            'name_th' => 'เพทาย',
            'name_eng' => 'zircon',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('groups')->insert([
            'name_th' => 'ไพลิน',
            'name_eng' => 'sapphire',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('groups')->insert([
            'name_th' => 'ไข่มุก',
            'name_eng' => 'pearl',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('groups')->insert([
            'name_th' => 'มรกต',
            'name_eng' => 'emerald',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('groups')->insert([
            'name_th' => 'บุษราคัม',
            'name_eng' => 'topaz',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
