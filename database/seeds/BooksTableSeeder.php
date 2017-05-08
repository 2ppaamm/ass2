<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	$faker = Faker\Factory::create();
    	for ($i=0; $i<50; $i++){
		    DB::table('books')->insert([
		    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
		    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
		    'title' => $faker->sentence(5),
		    'user_id' => $faker->numberBetween(1,22),
		    'published' => true,
		    'cover' => $faker->imageUrl(400, 300),
		    'chapters' => 12,
		    'synopsis'=>$faker->paragraph(3)
		    ]);
		}
    	for ($i=0; $i<50; $i++){
		    DB::table('books')->insert([
		    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
		    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
		    'title' => $faker->sentence(5),
		    'user_id' => $faker->numberBetween(1,22),
		    'published' => true,
		    'cover' => $faker->imageUrl(400, 300,'fashion'),
		    'chapters' => 12,
		    'private' => false,
		    'synopsis'=>$faker->paragraph(3)
		    ]);
		}
	}
}
