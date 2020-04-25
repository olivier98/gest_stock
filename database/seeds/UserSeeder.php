<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $admin = User::create([
            'name' => 'admin',
            'email' =>'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        $gestionnaire = User::create([
            'name' => 'gestionnaire',
            'email' =>'gestionnaire@gestionnaire.com',
            'password' => Hash::make('password')
        ]);

        $caissier = User::create([
            'name' => 'caissier',
            'email' =>'caissier@caissier.com',
            'password' => Hash::make('password')
        ]);

        $adminRole = Role::where('name', 'admin')->first();
        $gestionnaireRole = Role::where('name', 'gestionnaire')->first();
        $caissierRole = Role::where('name', 'caissier')->first();

        $admin->roles()->attach($adminRole);
        $gestionnaire->roles()->attach($gestionnaireRole);
        $caissier->roles()->attach($caissierRole);
    }
}
