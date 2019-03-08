<?php

namespace PHPKonf;

use PHPUnit\Framework\TestCase;
use PHPKonf\MessageProvider;

class MessageProviderTest extends TestCase
{
    public function testBasicTest()
    {
        $messageProvider = new MessageProvider();

        $message = ' eser';
        $messageValidated = $messageProvider->validate($message);

        $this->assertSame('eser', $messageValidated);
    }
}
