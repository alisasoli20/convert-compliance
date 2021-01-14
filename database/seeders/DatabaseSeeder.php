<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Name;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Psy\Util\Str;

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
        /*$user = new User([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now()
        ]);
        if($user->save()){
            $user->assignRole('Admin');
        }*/
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
        Department::insert([
            [
             'name' => 'Information Technology',
             'slug' => \Illuminate\Support\Str::slug('Information Technology'),
             'headline' => 'HEADLINE',
             'bullet_points' => 'UPDATE PENDING',
                'created_at' => Carbon::now()
            ],
            [
            'name' => 'Credit Risk',
            'slug' => \Illuminate\Support\Str::slug('Credit Risk'),
            'headline' => 'HEADLINE',
            'bullet_points' => 'UPDATE PENDING',
                   'created_at' => Carbon::now()
            ],
            [
                'name' => 'Board',
                'slug' => \Illuminate\Support\Str::slug('Board'),
                'headline' => 'HEADLINE',
                'bullet_points' => 'UPDATE PENDING',
                   'created_at' => Carbon::now()
            ],
            [
                'name' => 'Operations',
                'slug' => \Illuminate\Support\Str::slug('Operations'),
                'headline' => 'HEADLINE',
                'bullet_points' => 'UPDATE PENDING',
                'created_at' => Carbon::now()

            ],
                [
                    'name' => 'Financial Crime',
                    'slug' => \Illuminate\Support\Str::slug('Financial Crime'),
                    'headline' => 'HEADLINE',
                    'bullet_points' => 'UPDATE PENDING',
                    'created_at' => Carbon::now()
                ],
                [
                'name' => 'Fraud',
                'slug' => \Illuminate\Support\Str::slug('Fraud'),
                'headline' => 'HEADLINE',
                'bullet_points' => 'UPDATE PENDING',
                'created_at' => Carbon::now()
            ],  [
                'name' => 'Risk Acceptance',
                'slug' => \Illuminate\Support\Str::slug('Risk Acceptance'),
                'headline' => 'HEADLINE',
                'bullet_points' => 'UPDATE PENDING',
                    'created_at' => Carbon::now()
            ],
            [
                'name' => 'Decisions',
                'slug' => \Illuminate\Support\Str::slug('Decisions'),
                'headline' => 'HEADLINE',
                'bullet_points' => 'UPDATE PENDING',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'End of Month',
                'slug' => \Illuminate\Support\Str::slug('End of Month'),
                'headline' => 'HEADLINE',
                'bullet_points' => 'UPDATE PENDING',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'On Boarding',
                'slug' => \Illuminate\Support\Str::slug('On Boarding'),
                'headline' => 'HEADLINE',
                'bullet_points' => 'UPDATE PENDING',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Marketing',
                'slug' => \Illuminate\Support\Str::slug('Marketing'),
                'headline' => 'HEADLINE',
                'bullet_points' => 'UPDATE PENDING',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Finance',
                'slug' => \Illuminate\Support\Str::slug('Finance'),
                'headline' => 'HEADLINE',
                'bullet_points' => 'UPDATE PENDING',
                'created_at' => Carbon::now()
            ]
            ]
        );
    }
}
