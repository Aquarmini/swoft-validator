<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  limingxin@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace SwoftTest\Testing\Validator;

use Swoftx\Validator\ValidatorInterface;

class TestValidator implements ValidatorInterface
{
    public function valid($data): bool
    {
        return true;
    }
}
