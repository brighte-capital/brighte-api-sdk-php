<?php

namespace BrighteCapital\Api\Tests\Promotion\Exceptions;

use BrighteCapital\Api\Promotion\Exceptions\BadRequestException;

/**@coversDefaultClass \BrighteCapital\Api\Promotion\Exceptions\BadRequestException*/
class BadRequestExceptionTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @covers \BrighteCapital\Api\Promotion\Exceptions\BadRequestException::__construct
     * @covers \BrighteCapital\Api\Promotion\Exceptions\BadRequestException::getErrors
     */
    public function testGetErrors()
    {
        $errors = [
            'applicationId' => 'this field is required',
            'vendorId' => 'this field is required',
        ];
        $ex = new BadRequestException($errors);
        $this->assertEquals($errors, $ex->getErrors());
    }
}