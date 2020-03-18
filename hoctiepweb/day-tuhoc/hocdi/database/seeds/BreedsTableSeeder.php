<?php

use Illuminate\Database\Seeder;

class BreedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breeds')->insert([
           ['id'=>1,'name'=>'Husky'],
           ['id'=>2,'name'=>'Alaska'],
           ['id'=>3,'name'=>'Pitbull'],
           ['id'=>4,'name'=>'Becgie'],
        ]);
    }
}
