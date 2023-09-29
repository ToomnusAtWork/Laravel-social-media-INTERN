<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\ChatPage;
use Tests\DuskTestCase;

class ChatLogin extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * User can send a message.
     */
    public function a_user_can_send_a_message(): void
    {
        // Pull down factory data.
        $user = factory(User::class)->create();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                ->visit(new ChatPage)
                ->typeMessage('Hi there')
                ->sendMessage() 
                ->assertInputValue('@body', '')
                ->with('@chat__messages', function ($message) use ($user) {
                    $message->assertSee('Hi! there')
                        ->assertSee($user->name);
                })
                ->logout();
        });
    }

    /**
     * User can send multiple message.
     */
    public function a_user_can_send_a_multiple_message()
    {
        // Pull down factory data.
        $user = factory(User::class)->create();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                ->visit(new ChatPage)
                ->typeMessage('Testing message here!')
                ->keys('@body', '{shift}', '{enter}')
                ->append('@body', 'New line') // setting composer update composer dusk 'dev-master'
                ->sendMessage()
                ->pause(2000)
                ->assertSeeIn('@chatMessages', "Test message\nNew line")
                ->logout();
        });
    }

    /**
     * @test A user can't send an empty message.
     */
    public function a_user_cant_send_an_empty_message()
    {
        // Pull down factory data and watch ep.16 again.
        $user = factory(User::class)->create();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                ->visit(new ChatPage);
                foreach (['       ', ''] as $empty) {
                    $browser->typeMessage($empty)
                        ->sendMessage()
                        ->assertDontSeeIn('@chatMessages', $user->name);
                }
                $browser->keys('@body', '{shift}', '{enter}')
                    ->keys('@body', '{shift}', '{enter}')
                    ->sendMessage()
                    ->assertDontseeIn('@chatMessages', $user->name);
                $browser->logout();
        });
    }

    /**
     * Messages are ordered by latest first.
     */
    public function message_are_ordered_by_lastest_first()
    {
        // Pull down factory data.
        $user = factory(User::class)->create();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                ->visit(new ChatPage);
                foreach (['One', 'Two', 'Three'] as $message) {
                    $browser->typeMessage($message)
                        ->sendMessage()
                        ->waitFor('@firstChatMessage') // 5 secs
                        ->assertSeeIn('@firstChatMessage', $message);
                }

                $browser->logout();
        });
    }


    /**
     * A user messages's is highlighted as their own.
     */
    public function a_user_message_is_highlighted_as_their_own()
    {
        // Pull down factory data.
        $user = factory(User::class)->create();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                ->visit(new ChatPage)
                ->typeMessage('My message')
                ->sendMessage()
                ->waitFor('@ownMessage')
                ->with('@ownMessage', function ($message) use ($user) {
                    $message->assertSee('My message')
                        ->assertSee($user->name); // filter first on ep.18
                });

                $browser->logout();
        });
    }

}
