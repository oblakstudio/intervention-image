<?php

declare(strict_types=1);

namespace Intervention\Image\Tests\Drivers\Imagick\Modifiers;

use Intervention\Image\Modifiers\TrimModifier;
use Intervention\Image\Tests\TestCase;
use Intervention\Image\Tests\Traits\CanCreateImagickTestImage;

/**
 * @requires extension imagick
 * @covers \Intervention\Image\Modifiers\TrimModifier
 * @covers \Intervention\Image\Drivers\Imagick\Modifiers\TrimModifier
 */
class TrimModifierTest extends TestCase
{
    use CanCreateImagickTestImage;

    public function testTrimImage(): void
    {
        $image = $this->readTestImage('trim.png');
        $this->assertEquals(50, $image->width());
        $this->assertEquals(50, $image->height());
        $image->modify(new TrimModifier(10));

        $this->assertEquals(28, $image->width());
        $this->assertEquals(28, $image->height());
    }
}
