<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
// use App\Author;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Author::class, 50)->create();
        Author::factory()->count(50)->create();

        // for ($i=0; $i<50; $i++) {

        //     $name = "Vardenis".($i+1);
        //     $surname = "Pavardenis".($i+1);
        //     $username = "Slapyvardis".($i+1);

        //     DB::table("authors")->insert([
        //         'name'=> $name ,
        //         'surname'=> $surname  ,
        //         'username'=> $username ,
        //     ]);
        // }

        // DB::table("authors")->insert([

        //     'name'=> 'Vardenis' ,
        //     'surname'=> 'Pavardenis',
        //     'username'=> 'Slapyvardis',
        // ]);
    }
}
