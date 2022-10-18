<?php

namespace RickSelby\Tests;

use RickSelby\Laravel\ExceptionHtml\ExceptionHandler;
use PHPUnit\Framework\TestCase;

class ExceptionHandlerTest extends TestCase
{
    public function testHtmlContainsExceptionMessage()
    {
        $handler = new ExceptionHandler(true);
        $html = $handler->getHtml(new \Exception('Something Happened'));

        $this->assertStringContainsString('Something Happened', $html);
    }
}
