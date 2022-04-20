<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $guru = User::create([
            'name' => 'Guru',
            'email' => 'guru@role.test',
            'password' => bcrypt('12345678')
        ]);

        $guru->assignRole('guru');

        $murid = User::create([
            'name' => 'Murid',
            'email' => 'murid@role.test',
            'password' => bcrypt('12345678')
        ]);

        $murid->assignRole('murid');


    }
}
