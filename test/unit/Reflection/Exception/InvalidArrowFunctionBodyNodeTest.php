<?php

declare(strict_types=1);

namespace Roave\BetterReflectionTest\Reflection\Exception;

use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt\Echo_;
use PHPUnit\Framework\TestCase;
use Roave\BetterReflection\Reflection\Exception\InvalidArrowFunctionBodyNode;

/**
 * @covers \Roave\BetterReflection\Reflection\Exception\InvalidArrowFunctionBodyNode
 */
class InvalidArrowFunctionBodyNodeTest extends TestCase
{
    public function testCreate(): void
    {
        $exception = InvalidArrowFunctionBodyNode::create(new Echo_([
            new String_('Hello world!'),
        ]));

        self::assertInstanceOf(InvalidArrowFunctionBodyNode::class, $exception);
        self::assertStringStartsWith('Invalid arrow function body node', $exception->getMessage());
    }
}
