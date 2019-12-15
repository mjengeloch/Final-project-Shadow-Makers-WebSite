<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\roles::create(
            [
                'role' => 'Shadow Makers'
            ]
        );
        App\roles::create(
            [
                'role' => 'Administrateur'
            ]
        );
        App\roles::create(
            [
                'role' => 'Régie'
            ]
        );
        App\roles::create(
            [
                'role' => 'Correcteur'
            ]
        );
        App\roles::create(
            [
                'role' => 'Recruteur'
            ]
        );
        App\roles::create(
            [
                'role' => 'MST'
            ]
        );
    }
}
