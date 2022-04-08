<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return User::create([
            'username'  => 'admin_nf',
            'role'      => 'admin',
            'pass'      => 'bismillah123',
            'password'  =>  Hash::make('bismillah123'),
            'email'     => 'pes_nf@yahoo.co.id',
        ]);
    }
}
