<?php
declare(strict_types=1);

namespace SamLitowitz\PHPStan\Rules\Operations;

use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;
use SamLitowitz\PHPStan\Rules\Operators\NoTernaryOperationRule;

class NoTernaryOperationRuleTest extends RuleTestCase
{
    protected function getRule(): Rule
    {
        return new NoTernaryOperationRule();
    }

    public function testRule(): void
    {
        $this->analyse(
            [
                __DIR__ . '/data/ternary-operators.php',
            ],
            [
                [
                    'Use of ternary operator',
                    3,
                ],
            ]
        );
    }
}
