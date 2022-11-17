<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class studentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            "namalengkap"=> "muthia zahra",
            "nis"=> 12222210,
            "jk"=> "p",
            "created_at"=> date ("Y-m-d-H:i:s"),
            
        ]);
        DB::table('students')->insert([
            "namalengkap"=> "yufa",
            "nis"=> 12134778,
            "jk"=> "p",
            "created_at"=> date ("Y-m-d-H:i:s"),
            
        ]);
        DB::table('students')->insert([
            "namalengkap"=> "syawali",
            "nis"=> 12345678,
            "jk"=> "L",
            "created_at"=> date ("Y-m-d-H:i:s"),
            
        ]);
    }
}
