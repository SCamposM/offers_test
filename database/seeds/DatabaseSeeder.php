<?php
<<<<<<< HEAD

use Illuminate\Database\Seeder;

=======
use Illuminate\Database\Seeder;
use Scamposm\Offers\Models\Offer;
/**
 * Class DatabaseSeeder
 */
>>>>>>> 5037781d7605f7a814319b0c6cc05c4eb65eb32b
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
    }
}
=======
        factory(Offer::class,50)->create();
    }
}
>>>>>>> 5037781d7605f7a814319b0c6cc05c4eb65eb32b
