<?php

use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('movies')->insert([
            [
                'genres_id' => '1',
                'title' => 'The World of the Married ',
                'photo' => 'img/The world of the married.png',
                'description' => 'Ji Sun-Woo, a family doctor. who seemingly lives a perfect life, starts to seek revenge on her husband Lee Tae-O, whom she suspects is having an affair.',
                'rating' => '5',
            ],
            [
                'genres_id' => '1',
                'title' => 'Boys Over Flowers',
                'photo' => 'img/Boys over flower.png',
                'description' => 'Set at a famous high school for the super-wealthy, this is a puppy love story centered on a poor girl and the F4 gang of rich kids headed by the rough and fearless Jun-pyo Koo.',
                'rating' => '5',
            ],
            [
                'genres_id' => '1',
                'title' => 'Descendants of the sun',
                'photo' => 'img/Desendants of the sun.png',
                'description' => 'Shi-Jin is the captain of the special forces, he catches a motorcycle thief with Sergeant Major Dae-Young, the thief is injured during his capture and is sent to the hospital.',
                'rating' => '5',
            ],

            [
                'genres_id' => '1',
                'title' => 'Descendants of the sun 2',
                'photo' => 'img/Desendants of the sun.png',
                'description' => 'Shi-Jin is the captain of the special forces, he catches a motorcycle thief with Sergeant Major Dae-Young, the thief is injured during his capture and is sent to the hospital.',
                'rating' => '5',
            ],

            [
                'genres_id' => '2',
                'title' => 'Boboiboy',
                'photo' => 'img/Boboiboy.png',
                'description' => 'BoBoiBoy and his friends must protect his elemental powers from an ancient villain seeking to regain control and wreak cosmic havoc.',
                'rating' => '4',
            ],
            [
                'genres_id' => '2',
                'title' => 'Boboiboy 2',
                'photo' => 'img/Boboiboy.png',
                'description' => 'BoBoiBoy and his friends must protect his elemental powers from an ancient villain seeking to regain control and wreak cosmic havoc.',
                'rating' => '5',
            ],
            [
                'genres_id' => '2',
                'title' => 'Thomas & Friends',
                'photo' => 'img/Thomasfriends.png',
                'description' => "This animated children's series follows the adventures of Thomas, a cheerful blue tank engine who lives on the island of Sodor.",
                'rating' => '5',
            ],
            [
                'genres_id' => '2',
                'title' => 'Thomas & Friends',
                'photo' => 'img/Thomasfriends.png',
                'description' => "This animated children's series follows the adventures of Thomas, a cheerful blue tank engine who lives on the island of Sodor.",
                'rating' => '5',
            ],

            [
                'genres_id' => '3',
                'title' => 'Running Man',
                'photo' => 'img/Running man.png',
                'description' => 'The members and sometimes guests must complete missions at famous landmarks to win the race. The missions almost always feature running, hence the title, and the name tag ripping game is filled with tension as each member struggles to survive.',
                'rating' => '5',
            ],

            [
                'genres_id' => '3',
                'title' => 'Ini Talk Show',
                'photo' => 'img/Ini talkshow.png',
                'description' => 'Ini Talk Show is a talk show program that is packaged in a relaxed atmosphere, discussing hot issues that exist in society in a simple way. This program will also have the nuances of the house and the characters in the house.',
                'rating' => '5',
            ],
            [
                'genres_id' => '3',
                'title' => 'The Tonight Show',
                'photo' => 'img/Tns.png',
                'description' => "The Tonight Show Starring Jimmy Fallon features hilarious highlights from the show including: comedy sketches, music parodies, celebrity interviews, ridiculous games.",
                'rating' => '5',
            ],
            [
                'genres_id' => '3',
                'title' => "America's Got Talent",
                'photo' => 'img/Agt.png',
                'description' => "America’s Got Talent, returns in May with fresh new faces and familiar favorites, along with the excitement, thrills and feel-good performances that viewers have come to love each season.",
                'rating' => '5',
            ],
        ]);
    }
}
