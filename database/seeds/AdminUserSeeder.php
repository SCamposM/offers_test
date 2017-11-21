<?php
use Illuminate\Database\Seeder;
/**
 * Class AdminUserSeeder
 */
class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            factory(App\User::class)->create([
                    "name" => "Sergi Campos Mata",
                    "email" => "scamposm96@gmail.com",
                    "password" => bcrypt(env('ADMIN_PWD', '123456'))]
            );
        } catch (\Illuminate\Database\QueryException $exception) {
        }
    }
}