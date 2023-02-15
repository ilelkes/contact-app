<?php

namespace Database\Seeders;

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
        Company::factory(10)->hasContacts(10)->create();
    }
}
