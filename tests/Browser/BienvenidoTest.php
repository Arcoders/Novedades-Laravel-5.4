<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BienvenidoTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_bienvenido_a_user()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/welcome')
                    ->type('name', 'Ismael Haytam')
                    ->assertSee('Bienvenido Ismael Haytam');
        });
    }
}
