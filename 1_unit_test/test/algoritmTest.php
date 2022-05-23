<?php
use PHPUnit\Framework\TestCase;
use App\algoritm;


class algoritmTest extends TestCase {

    public function test()
    {
        $test = new algoritm();
        $result = $test->sum(5, 0);

        $this->assertEquals(5, $result);
    }
}


?>