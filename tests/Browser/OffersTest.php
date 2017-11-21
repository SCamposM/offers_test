<?php

namespace Tests\Browser;

use Scamposm\Offers\Models\Offer;
use Faker\Factory;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class OffersTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @test
     */
    public function create_url_show_a_form()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/offers/create')
                ->assertSee('Create Offer')
                ->assertVisible('input#name')
                ->assertVisible('textarea#description')
                ->assertInputValue('input#name', '')
                ->assertInputValue('textarea#description', '');
        });
    }

    /**
     * @group caca
     * @test
     */
    public function edit_url_show_a_form_with_correct_values()
    {
        $offer = factory(Offer::class)->create();

        $this->browse(function (Browser $browser) use ($offer) {
//            $offer = factory(Offer::class)->create();

            $browser->visit('/offers/edit/' . $offer->id)
                ->pause(5000)
                ->assertSee('Edit Offer')
                ->assertVisible('input#name')
                ->assertVisible('textarea#description')
                ->assertInputValue('input#name', $offer->name)
                ->assertInputValue('textarea#description', $offer->description);
        });
    }

    /**
     * @test
     */
    public function an_user_can_create_an_offer()
    {
        $faker = Factory::create();
        $this->browse(function (Browser $browser) use ($faker) {
            $browser->visit('/offers/create')
                ->type('name', $faker->sentence)
                ->type('description', $faker->paragraph)
                ->press('Create')
                ->assertSee('Created ok');
        });
    }

    /**
     * @group caca
     * @test
     */
    public function an_user_can_edit_an_offer()
    {
        $offer = factory(Offer::class)->create();
        $faker = Factory::create();
        $this->browse(function (Browser $browser) use ($faker, $offer) {
            $browser->visit('/offers/edit/' . $offer->id)
                ->type('name', $faker->sentence)
                ->type('description', $faker->paragraph)
                ->press('Update')
                ->assertSee('Edited ok');
        });
    }
}
