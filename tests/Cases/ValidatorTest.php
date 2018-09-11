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

use Swoftx\Validator\Bean\Collector\ValidatorCollector;

class ValidatorTest extends AbstractTestCase
{
    public function testValidatorCollector()
    {
        $collector = ValidatorCollector::getCollector();
        print_r($collector);
    }
}
