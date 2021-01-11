<?php

namespace Database\Seeders;

use App\Models\Name;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
/*        User::insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now()
        ]);*/
//        Name::insert([
//            ['key' => "MR",
//            'value' => "Mykhailo Rogalskiy"],
//            ['key' => "CH",
//                'value' => "Colin Hollingsbee"],
//            ['key' => "RE",
//                'value' => "Rob Escott"],
//            ['key' => "SH",
//                'value' => "Simon Harris"],
//            ['key' => "AM",
//                'value' => "Anna Maxim"],
//            ['key' => "SW",
//                'value' => "Stephen Weeks"],
//            ['key' => "SA",
//                'value' => "Scott Andrews"],
//            ['key' => "AMM",
//                'value' => "Amanda Morgan"],
//            ['key' => "JS",
//                'value' => "Josh Stedman"],
//            ['key' => "SA",
//                'value' => "Kendra Orandi"],
//            ['key' => "MK",
//                'value' => "Maryna Koreshnykova"],
//            ['key' => "MZ",
//                'value' => "Margo Zhyvytsia"],
//            ['key' => "OG",
//                'value' => "Oleg Gorokhovskiy"],
//
//        ]);
    }
}
