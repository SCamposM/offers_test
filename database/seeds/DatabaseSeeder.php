<?php
use Illuminate\Database\Seeder;
use Scamposm\Offers\Models\Offer;
/**
 * Class DatabaseSeeder
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Offer::class,50)->create();
    }
}