<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  limingxin@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
namespace SwoftTest\Cases;

use SwoftTest\Testing\Controllers\TestController;
use SwoftTest\Testing\Validator\TestValidator;
use Swoftx\Validator\Bean\Annotation\Validator;
use Swoftx\Validator\Bean\Collector\ValidatorCollector;

class ValidatorTest extends AbstractTestCase
{
    public function testValidatorCollector()
    {
        $collector = ValidatorCollector::getCollector();
        $this->assertTrue(array_key_exists(TestController::class, $collector));

        /** @var Validator $annotation */
        $annotation = ValidatorCollector::getAnnotation(TestController::class, 'test');

        $this->assertEquals('post', $annotation->getFrom());
        $this->assertEquals('test', $annotation->getName());
        $this->assertEquals(TestValidator::class, $annotation->getValidator());
    }
}
