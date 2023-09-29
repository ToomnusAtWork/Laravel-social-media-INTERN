<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;

class ChatPage extends Page
{
    /**
     * Get the URL for the page.
     */
    public function url(): string
    {
        return '/chat';
    }

    /**
     * Assert that the browser is on the page.
     */
    public function assert(Browser $browser): void
    {
        $browser->assertPathIs($this->url());
    }

    public function typeMessage(Browser $browser, $body = nulls)
    {
        $browser->type('@body', $body)
            ->pause(500);
    }

    public function sendMessage(Browser $browser)
    {
        $browser->keys('@body', ['{enter}']);
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array<string, string>
     */
    public function elements(): array
    {
        return [
            '@body' => 'textarea[id="body"]',
        ];
    }
}
