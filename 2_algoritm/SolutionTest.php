<?php

declare(strict_types=1);

use TaskTwo\Solution;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    /**
     * @dataProvider data
     */
    public function testAnswer(array $dataset, int $expected): void
    {
        self::assertSame($expected, (new Solution())->countOppositeNumbersPairs($dataset));
    }

    public function data(): array
    {
        return [
            'empty' => ['dataset' => [], 'expected' => 0],
            'single digit' => ['dataset' => [3], 'expected' => 0],
            'short' => ['dataset' => [-3, -3, 3], 'expected' => 1],
            'complex' => ['dataset' => [3, 6, -3, 5, -10, 3, 10, 1, 7, -1, -9, -8, 7, 7, -7, -2, -7], 'expected' => 5],
        ];
    }
}
