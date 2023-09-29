<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Tests\Browser\Pages\ChatPage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class ChatRealtimeTest extends DuskTestCase
{
    use DatabaseMigrations;
     /**
     * A test user can send a messages.
     */
    public function a_user_message_is_highlighted_as_their_own()
    {
        $users = factory(User::class, 3)->create();

        $this->browse(function ($browserOne, $browserTwo, $browserThree) use ($users) {
            $browsers = [$browserOne, $browserTwo, $browserThree];

            foreach ($browsers as $index => $browser) {
                $browser->login($user->get($index))
                    ->visit(new ChatPage);   
            }

            $browserOne->typeMessage('Hellow!')
                ->sendMessage();

            foreach (array_slice($browsers, 1, 2) as $index => $browser) {
                $browser->waitFor('@firstChatMessage')
                    ->with('@chatMessages', function ($messages) use ($users) {
                        $messages->assertSee('Hellow')
                            ->assertSee($users->get(0)->name)
                            ->assertMissing('@ownMessage');
                    });
            }

            $browserThree->typeMessage('Heyyy')
            ->sendMessage();

            foreach (array_slice($browsers, 1, 2) as $index => $browser) {
            $browser->waitForText('Heyyy')
                ->with('@chatMessages', function ($messages) use ($users) {
                    $messages->assertSee('Heyyy')
                        ->assertSee($users->get(2)->name);
                });
        }
        });


        // $this->browse(function ($browserOne, $browserTwo, $browserThree) use ($users) {
        //     $browserOne->loginAs($users->get(0))
        //         ->visit(new ChatPage);
        //     $browserTwo->loginAs($users->get(1))
        //         ->visit(new ChatPage);
        //     $browserThree->loginAs($users->get(2))
        //         ->visit(new ChatPage);

        //     $browserOne->typeMessage('Hello there')
        //         ->sendMessage();
            
        //     $browserTwo->pause(1000)->with('@chatMessages', function($messages) use ($users) {
        //         $messages->assertSee('Hello there')
        //             ->assertSee($users->get(0)->name);
        //     });

        //     $browserThree->pause(1000)->with('@chatMessages', function($messages) use ($users) {
        //         $messages->assertSee('Hello there')
        //             ->assertSee($users->get(0)->name);
        //     });
        // });
    }

     /**
     * A test user can send a messages.
     */
    public function user_are_added_to_the_online_list_when_joining()
    {
        $users = factory(User::class, 2)->create();

        $this->browse(function ($browserOne, $browserTwo) use ($users) {
            $browsersOne->loginAs($users->get(0))
                ->visit(new ChatPage)
                ->with('@onlineList', function($online) use ($users) {
                    $online->waitForText($users->get(0)->name)
                        ->assertSee('@onlineList', $users->get(0)->name)
                        ->assertSee('@onlineList', '1 user online');
                });

            $browsersTwo->loginAs($users->get(1))
            ->visit(new ChatPage)
            ->with('@onlineList', function($online) use ($users) {
                $online->waitForText($users->get(1)->name)
                    ->assertSee('@onlineList', $users->get(1)->name)
                    ->assertSee('@onlineList', '2 users online');
            });
        });
    }


    /**
     * A test user are removed from online list when leaving.
     */
    public function user_are_removed_from_online_list_when_leaving()
    {
        $users = factory(User::class, 2)->create();

        $this->browse(function ($browserOne, $browserTwo) use ($users) {
            $browserOne->loginAs($users->get(0))
                ->visit(new ChatPage);
            $browserTwo->loginAs($users->get(1))
                ->visit(new ChatPage);
            
            $browserOne->with('@onlineList', function ($online) use ($users) {
                $online->waitForText($users->get(1)->name)
                    ->assertSee($users->get(1)->name)
                    ->assertSee('2 users online');
            });

            $browsersTwo->quit();

            $browserOne->with('@onlineList', function ($online) use ($users) {
                $online->pause(1000)
                    ->assertDontSeeIn($users->get(0)->name)
                    ->assertSee('1 users online');
            });
        });
    }
}
