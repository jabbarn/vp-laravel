<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1  , 'firstname' => 'Admin', 'suffix' => '', 'lastname' => 'Admin','phone_number' => '', 'street_name' => '', 'street_number' => '', 'postalcode' => '', 'city'=> 'Amsterdam', 'email' => 'admin@admin.com', 'password' => '$2y$10$u5EBywjXyKqzJ1BlHxiO1uAfQl30K5jq1amO9TCfheqZXm5hMFe62', 'role_id' => 1, 'remember_token' => '',],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
