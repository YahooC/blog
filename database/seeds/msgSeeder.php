<?php

use Illuminate\Database\Seeder;
use App\Models\msgModel;

class msgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        msgModel::truncate();

        $faker = \Faker\Factory::create('zh_TW');
        
        foreach(range(0,99) as $value){
        	msgModel::create([
        		'username' => $faker->name,
        		'message' => $faker->sentence,
        	]);
        }
    }
}
