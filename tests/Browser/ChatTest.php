<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ChatLogin extends DuskTestCase
{
    /**
     * User can send a message.
     */
    public function a_user_can_send_a_message(): void
    {
        $user = factory(User::class)->create();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                ->visit(new ChatPage);
        });
    }
}
