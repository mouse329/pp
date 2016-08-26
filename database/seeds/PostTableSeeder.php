<?php

use App\Post;
use Faker
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('zh_Tw')
        foreach (range(1,20) as $number){
            Post::create([
                'title'=>'title '.$number,
                'content'=>'content '.$number,
                'created_at'=>Carbon:
            ]);
    }
}
