<?php

namespace Database\Seeders;


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
        /*Role::create([
            'name' => 'Admin'
        ]);*/
        User::insert([
                [
                    'name' => 'admin',
                    'email' => 'admin@admin.com',
                    'password' => Hash::make('password'),
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Mykhailo Rogalskiy',
                    'email' => 'mykailo@gmail.com',
                    'password' => Hash::make('password'),
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Colin Hollingsbee',
                    'email' => 'coling@gmail.com',
                    'password' => Hash::make('password'),
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Rob Escott',
                    'email' => 'robescott@gmail.com',
                    'password' => Hash::make('password'),
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Simon Harris',
                    'email' => 'simonharris@gmail.com',
                    'password' => Hash::make('password'),
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Anna Maxim',
                    'email' => 'annamaxim@gmail.com',
                    'password' => Hash::make('password'),
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Stephen Weeks',
                    'email' => 'stephenweeks@gmail.com',
                    'password' => Hash::make('password'),
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Scott Andrews',
                    'email' => 'scottandrews@gmail.com',
                    'password' => Hash::make('password'),
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Amanda Morgan',
                    'email' => 'amandamorgan@gmail.com',
                    'password' => Hash::make('password'),
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Josh Stedman',
                    'email' => 'joshstedman@gmail.com',
                    'password' => Hash::make('password'),
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Kendra Orandi',
                    'email' => 'kendarorandi@gmail.com',
                    'password' => Hash::make('password'),
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Maryna Koreshnykova',
                    'email' => 'maryna@gmail.com',
                    'password' => Hash::make('password'),
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Margo Zhyvytsia',
                    'email' => 'margo@gmail.com',
                    'password' => Hash::make('password'),
                    'created_at' => Carbon::now()
                ],
                [
                    'name' => 'Oleg Gorokhovskiy',
                    'email' => 'oleg@gmail.com',
                    'password' => Hash::make('password'),
                    'created_at' => Carbon::now()
                ],
            ]
        );
        $user = User::where('email','admin@admin.com')->first();
        $user->assignRole('Admin');
        /*Name::insert([
            ['key' => "MR",
            'value' => "Mykhailo Rogalskiy"],
            ['key' => "CH",
                'value' => "Colin Hollingsbee"],
            ['key' => "RE",
                'value' => "Rob Escott"],
            ['key' => "SH",
                'value' => "Simon Harris"],
            ['key' => "AM",
                'value' => "Anna Maxim"],
            ['key' => "SW",
                'value' => "Stephen Weeks"],
            ['key' => "SA",
                'value' => "Scott Andrews"],
            ['key' => "AMM",
                'value' => "Amanda Morgan"],
            ['key' => "JS",
                'value' => "Josh Stedman"],
            ['key' => "SA",
                'value' => "Kendra Orandi"],
            ['key' => "MK",
                'value' => "Maryna Koreshnykova"],
            ['key' => "MZ",
                'value' => "Margo Zhyvytsia"],
            ['key' => "OG",
                'value' => "Oleg Gorokhovskiy"],

        ]);*/
        /*Department::insert([
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
        );*/
        /*news::insert(
            [
                [
                    'title' => 'a',
                    'link' => 'a',
                    'date' => 'a'
                ],
                [
                    'title' => 'a',
                    'link' => 'a',
                    'date' => 'a'
                ],
                [
                    'title' => 'a',
                    'link' => 'a',
                    'date' => 'a'
                ],
                [
                    'title' => 'a',
                    'link' => 'a',
                    'date' => 'a'
                ],
                [
                    'title' => 'a',
                    'link' => 'a',
                    'date' => 'a'
                ],
                [
                    'title' => 'a',
                    'link' => 'a',
                    'date' => 'a'
                ],
                [
                    'title' => 'a',
                    'link' => 'a',
                    'date' => 'a'
                ],
                [
                    'title' => 'a',
                    'link' => 'a',
                    'date' => 'a'
                ],
                [
                    'title' => 'a',
                    'link' => 'a',
                    'date' => 'a'
                ],
                [
                    'title' => 'a',
                    'link' => 'a',
                    'date' => 'a'
                ],
            ]
        );*/
    }
}
