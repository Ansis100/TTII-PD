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
        DB::table('iziretajs')->insert([
            'first_name' => 'Jānis',
            'city' => 'Rīga',
            'phone' => '28166719',
            'email' => 'janis@janis.lv',
        ]);
        DB::table('iretajs')->insert([
            'first_name' => 'Arturs',
            'phone' => '28163814',
            'email' => 'arturs@arturs.lv',
        ]);
        DB::table('iretajs')->insert([
            'first_name' => 'Anna',
            'phone' => '26423425',
            'email' => 'anna@anna.lv',
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
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend mi quis metus ornare imperdiet. Praesent a lacinia velit. Pellentesque nec malesuada sapien. Quisque tincidunt non dolor ut luctus. Vestibulum at malesuada mi. Mauris venenatis tortor a vulputate bibendum. Etiam dapibus ut purus et dignissim. Nunc id commodo nunc. Ut a sem eu dui pulvinar semper et sed magna. Etiam sodales auctor hendrerit. Nam molestie nec tortor quis interdum. Suspendisse a feugiat ante. ',
        ]);
        DB::table('dzivoklis')->insert([
            'iziretajs_id' => 1,
            'city' => 'Rīga',
            'street' => 'Kurzemes prospekts',
            'floor' => 1,
            'apartment_no' => 12,
            'rooms' => 1,
            'description' => 'Sed auctor pulvinar massa, sit amet consequat ipsum mattis eget. Curabitur ullamcorper, risus maximus volutpat finibus, orci nulla porttitor urna, sit amet luctus arcu neque eget sapien. Nunc dapibus tempus lacus, in scelerisque elit vulputate non. In eu euismod tortor, ut eleifend neque. Cras consectetur dui quis nisi dictum viverra. Quisque porta semper augue, at tristique urna. Sed iaculis accumsan metus, at fringilla turpis porta ac. Nulla viverra consequat risus sed placerat. Phasellus mattis eros nec lectus aliquam faucibus. Vivamus quis nisi orci. ',
        ]);
        DB::table('dzivoklis')->insert([
            'iziretajs_id' => 2,
            'city' => 'Rīga',
            'street' => 'Krišjāņa Barona 57',
            'floor' => 2,
            'apartment_no' => 17,
            'rooms' => 2,
            'description' => 'Praesent nulla neque, pretium fringilla consectetur nec, viverra tristique odio. Vestibulum sem ex, pretium ac fringilla quis, aliquam vel justo. Suspendisse eu arcu nulla. Cras ultricies venenatis elit, vitae ultrices odio faucibus ut. Praesent congue sagittis sapien, id accumsan turpis tristique vitae. Praesent faucibus rutrum odio, a ornare ipsum auctor ac. Suspendisse quis lectus pharetra, condimentum nisi ac, sollicitudin justo. Sed ultricies risus eros, ac dapibus lectus efficitur consectetur. Integer volutpat, enim iaculis euismod vestibulum, arcu magna accumsan purus, sed porttitor purus justo sed metus. Nulla facilisi. Quisque tincidunt dolor in porttitor rhoncus. ',
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
        DB::table('users')->insert([
            'name' => 'Anna',
            'email' => 'anna@anna.lv',
            'type' => 'iretajs',
            'password' => bcrypt('Passw0rd!'),
        ]);
        DB::table('users')->insert([
            'name' => 'Jānis',
            'email' => 'janis@janis.lv',
            'type' => 'iziretajs',
            'password' => bcrypt('Passw0rd!'),
        ]);
        DB::table('atsauksme')->insert([
            'dzivoklis_id' => 1,
            'iretajs_id' => 1,
            'review' => 'Ahhhhhhhhhhhhhhhhhh es gandrīz nomiru.',
            'rating' => 1,
        ]);
        DB::table('atsauksme')->insert([
            'iretajs_id' => 2,
            'dzivoklis_id' => 2,
            'review' => 'Bija ok',
            'rating' => 3,
        ]);
        DB::table('atsauksme')->insert([
            'iretajs_id' => 1,
            'dzivoklis_id' => 4,
            'review' => 'Baaaaaaaaigi nice.',
            'rating' => 5,
        ]);
    }
}
