<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['id' => 1],[
           'name' => 'Admin',
           'email' => 'admin@admin.com',
           'password' =>  '$2y$10$0DZzh1Y2lhuPNf3x9QZ9q.U90UkXQfdrxoSX9r8n40LZ2ESSbKqIq' //password
        ]);
    }
}
