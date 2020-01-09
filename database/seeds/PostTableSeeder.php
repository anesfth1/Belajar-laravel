<?php

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
        $post = [
            ['title'=>'Tips Cepat Nikah','content'=>'lorem ipsum'],
            ['title'=>'Haruskah Menunda Nikah?','content'=>'lorem ipsum'],
            ['title'=>'Membangun Visi Misi Keluarga','content'=>'lorem ipsum']
        ];
        //masukan data ke database
        DB::table('posts')->insert($post);
    }
}
