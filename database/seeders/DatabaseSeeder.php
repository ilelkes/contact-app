<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
use App\Models\Contact;
use Illuminate\Database\Seeder;
use Database\Seeders\CompanySeeder;
use Database\Seeders\ContactSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->has(
            Company::factory(10)->has(
                Contact::factory(10)->state(function ($attributes, Company $company) {
                    return [
                        'user_id' => $company->user_id
                    ];
                })
            )
        )->create();
    }
}
