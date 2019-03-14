<?php
/**
 * Copyright(c) 2019. All rights reserved.
 * Last modified 3/1/19 7:34 PM
 */

namespace Api\AppBase\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class AppBaseDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
    }
}
