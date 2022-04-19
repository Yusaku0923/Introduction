<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        # リセット
        DB::table('students')->delete();

        # 日本語設定
        $faker = Factory::create('ja_JP');

        # サンプルデータの挿入
        for ($i = 0; $i < 10; $i++) {
            Student::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'tel' => $faker->phoneNumber(),
                'message' => $faker->text()
            ]);
        }
    }
}
