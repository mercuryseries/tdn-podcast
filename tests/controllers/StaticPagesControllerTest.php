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
        $this->visit(route('root_path'))
            ->assertResponseOk()
            ->seeInElement('title', 'Le Podcast des TEACHERS DU NET')
            ->see('Le Podcast des TEACHERS DU NET');
    }
}
