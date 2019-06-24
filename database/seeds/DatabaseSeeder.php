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
    }
}
