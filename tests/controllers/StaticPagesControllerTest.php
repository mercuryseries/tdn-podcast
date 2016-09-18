<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StaticPagesControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit(route('home'))
            ->assertResponseOk()
            ->seeInElement('title', 'Ambiance à la TDN !')
            ->see('Ambiance à la TDN !');
    }
}
