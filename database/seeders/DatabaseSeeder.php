<?php

use App\Models\Login;
use App\Models\Tenant;
use App\Models\User;
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
        // $this->call(DemoSeeder::class);

        Tenant::factory()->count(3)->create();

        foreach(Tenant::all() as $tenant) {
            User::factory()->count(20)->create([
                'tenant_id' => $tenant->id,
            ]);
        }

        foreach(User::all() as $user) {
            Login::factory()->count(5)->create([
                'user_id' => $user->id,
                'tenant_id' => $user->tenant_id,
            ]);
        }
        User::factory()->count(1)->create([
            'tenant_id' => null,
            'email' => 'admin@admin.com',
       ]);
    }
}
