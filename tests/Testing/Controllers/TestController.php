<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  limingxin@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
namespace SwoftTest\Testing\Controllers;

use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoftx\Validator\Bean\Annotation\Validator;
use SwoftTest\Testing\Validator\TestValidator;

/**
 * Class TestController
 * @Controller(prefix="/test")
 */
class TestController
{
    /**
     * @Validator(name="test", validator=TestValidator::class)
     * @author limx
     */
    public function test()
    {
    }
}
