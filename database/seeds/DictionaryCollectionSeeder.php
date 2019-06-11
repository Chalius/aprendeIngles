<?php

use Illuminate\Database\Seeder;

class DictionaryCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\Dictionary::class, 7)->create();
    }
}
