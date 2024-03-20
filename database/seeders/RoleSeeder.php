<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Role_user;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public $role = ["Admin", "Direktur","Operator", "SuperAdmin"];
    public function run(): void
    {
        for ($i=0; $i < count($this->role) ; $i++) { 
            
            Role_user::create([
               'id'=> $i+1,
               'role' => $this->role[$i],
            ]);
        }
    }
}
