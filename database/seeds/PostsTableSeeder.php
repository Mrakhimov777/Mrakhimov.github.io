<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('posts')->insert(
        array(
            [
                'title' => "First Post",
                'alias' =>"Our first post about...",
                'intro' => "Well this is a your ...",
                'body' => "Lets talk about it more"
            ],
            [
                'title' => "VIRUS",
                'alias' =>"WORLD IS UNDER VIRUS",
                'intro' => "CORONAVirus is scaring people",
                'body' => "But we will win against virus"
            ],
            [
                'title' => "MY daily life",
                'alias' =>"WORK WORK WORK",
                'intro' => "LETS WORK TOGETHER",
                'body' => "I WILL WAIT UR ANSWER"
            ]
        )
    );

  }
}
