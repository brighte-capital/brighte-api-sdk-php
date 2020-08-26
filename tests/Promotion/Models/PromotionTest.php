<?php

namespace BrighteCapital\Api\Tests\Promotion\Models;

use BrighteCapital\Api\Promotion\Models\Promotion;
use PHPUnit\Framework\TestCase;

class PromotionTest extends TestCase
{
    /**
     * @covers \BrighteCapital\Api\Promotion\Models\Promotion::toArray
     * @covers \BrighteCapital\Api\Promotion\Models\Promotion::__construct
     */
    public function testToArray()
    {
        $promotion = new Promotion();
        $promotion->id = 1;
        $promotion->code = 'code123';
        $promotion->products[] = 'Brighte_pay';
        $promotion->products[] = 'BGL';
        $promotion->start_date = '2016-10-05 23:00:03';
        $promotion->end_date = '2016-10-05 23:00:03';

        $expected = [
            'id' => 1,
            'code' => 'code123',

            'products' => [
                0 => 'Brighte_pay',
                1 => 'BGL'
            ],

            'type_id' => null,
            'description' => null,
            'contents' => null,
            'display_title' => null,
            'display_text' => null,
            'start_date' => '2016-10-05 23:00:03',
            'end_date' => '2016-10-05 23:00:03',
        ];

        $this->assertEquals($expected, $promotion->toArray());
    }
}
