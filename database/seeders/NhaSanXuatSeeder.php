<?php

namespace Database\Seeders;

use App\Models\Nhasanxuat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NhaSanXuatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Nhasanxuat::create(['ten' => 'Apple', 'logo' => 'apple.png', 'status' => 1]);
        Nhasanxuat::create(['ten' => 'Samsung', 'logo' => 'samsung.png', 'status' => 1]);
        Nhasanxuat::create(['ten' => 'Xiaomi', 'logo' => 'xiaomi.png', 'status' => 0]);
    }
}
