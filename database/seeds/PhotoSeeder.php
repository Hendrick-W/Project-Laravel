<?php

use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i<= 10; $i++){
            DB::table('photos')->insert([
                'name' => Str::random(10),
                'title' => Str::random(10).'@gmail.com',
            ]);
        }
    }
}
