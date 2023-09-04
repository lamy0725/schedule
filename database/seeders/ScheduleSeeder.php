<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                    DB::table('schedules')->insert([
                'schedule_name' => 'バンドの日程調整',
                'candidate' => new DateTime(),
                'start_time' => new DateTime(),
                'end_time' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
    }
}
