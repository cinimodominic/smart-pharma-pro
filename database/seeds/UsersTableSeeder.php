<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert(
        //     [
        //         'first_name' => 'Janszen Kiel',
        //         'last_name' => 'Jose',
        //         'company_name' => 'Transcosmos Asia Philippines, Inc.',
        //         'email' => 'kiel.legaspi.jose@gmail.com',
        //         'password' => Hash::make('123456789'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'first_name' => 'Dominic',
        //         'last_name' => 'Cazeñas',
        //         'company_name' => 'Transcosmos Asia Philippines, Inc.',
        //         'email' => 'sanezaccinimod@gmail.com',
        //         'password' => Hash::make('123456789'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]
        // );

        User::create([
            'first_name' => 'Janszen Kiel',
            'last_name' => 'Jose',
            'company_name' => 'Transcosmos Asia Philippines, Inc.',
            'email' => 'kiel.legaspi.jose@gmail.com',
            'password' => Hash::make('123456789'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'first_name' => 'Dominic',
            'last_name' => 'Cazeñas',
            'company_name' => 'Transcosmos Asia Philippines, Inc.',
            'email' => 'sanezaccinimod@gmail.com',
            'password' => Hash::make('123456789'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
