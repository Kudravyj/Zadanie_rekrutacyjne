<?php

declare(strict_types=1);

namespace TaskTwo;

final class Solution
{
    /**
     * @param int[] $data
     */
    public $result = 0;

    public function countOppositeNumbersPairs(array $data): int
    {
        $count = count($data);
        for ($i = 0; $i < count($data); $i++)
            for ($j = $i + 1; $j < count($data); $j++)
                if ($data[$i] + $data[$j] == 0)
                    $this->result++;

        $this->result /= 2;
        return $this->result;
    }
}
