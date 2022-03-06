<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Programmer;
use Database\Factories\DepartmentFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('clients')->insert([
                'name' => Str::random(10),
                'country' => Str::random(10)
            ]);
            Programmer::factory()->create();
        }

        Department::factory()->create();

//        DB::table('projects')->insert([
//            'name' => Str::random(10),
//        ]);
//        DB::table('programmer')->insert([
//            'first_name' => Str::random(10),
//            'last_name' => Str::random(10),
//            'email' => Str::random(10) . '@gmail.com',
//            'phone' => intval("373" . rand(1, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9))
//        ]);
//        DB::table('department')->insert([
//            'language' => Str::random(10)
//        ]);
    }


}
