<?php

namespace Database\Seeders;

use App\Models\Task1Rekomen1;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Task1Rekomen1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['jawaban' => 'B'],
            ['jawaban' => 'A'],
            ['jawaban' => 'C'],
            ['jawaban' => 'B'],
            ['jawaban' => 'C'],
            ['jawaban' => 'B'],
            ['jawaban' => 'C'],
            ['jawaban' => 'B'],
            ['jawaban' => 'B'],
            ['jawaban' => 'C'],
        ];

        foreach ($data as $r) {
            Task1Rekomen1::create($r);
        }

    }
}
