<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('iziretajs')->insert([
            'first_name' => 'Ansis',
            'city' => 'Rīga',
            'phone' => '28163814',
            'email' => 'ansis@ansis.lv',
        ]);
        DB::table('iretajs')->insert([
            'first_name' => 'Arturs',
            'phone' => '28163814',
            'email' => 'arturs@arturs.lv',
        ]);
        DB::table('dzivoklis')->insert([
            'iziretajs_id' => 1,
            'city' => 'Rīga',
            'street' => 'Lāčplēša 23',
            'floor' => 2,
            'apartment_no' => 34,
            'rooms' => 2,
            'description' => 'Saulains dzīvoklis pašā dzīves centrā.',
        ]);
        DB::table('dzivoklis')->insert([
            'iziretajs_id' => 1,
            'city' => 'Rīga',
            'street' => 'Brīvības 46',
            'floor' => 3,
            'apartment_no' => 17,
            'rooms' => 2,
            'description' => 'Basically šķūnis.',
        ]);
        DB::table('dzivoklis')->insert([
            'iziretajs_id' => 1,
            'city' => 'Rīga',
            'street' => 'Kurzemes prospekts',
            'floor' => 1,
            'apartment_no' => 12,
            'rooms' => 1,
            'description' => 'Nu reāla čuhņa.',
        ]);
        DB::table('users')->insert([
            'name' => 'Ansis',
            'email' => 'ansis@ansis.lv',
            'type' => 'iziretajs',
            'password' => bcrypt('Passw0rd!'),
        ]);
        DB::table('users')->insert([
            'name' => 'Artūrs',
            'email' => 'arturs@arturs.lv',
            'type' => 'iretajs',
            'password' => bcrypt('Passw0rd!'),
        ]);
        DB::table('atsauksme')->insert([
            'dzivoklis_id' => 1,
            'iretajs_id' => 1,
            'review' => 'Ahhhhhhhhhhhhhhhhhh es gandrīz nomiru.',
            'rating' => 1,
        ]);
        DB::table('atsauksme')->insert([
            'iretajs_id' => 1,
            'dzivoklis_id' => 2,
            'review' => 'Bija ok',
            'rating' => 3,
        ]);
    }
}
