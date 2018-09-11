<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  limingxin@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
namespace Swoftx\Validator\Bean\Annotation;

use Swoft\Bean\Annotation\ValidatorFrom;

/**
 * 验证器注解
 * @Annotation
 * @Target("METHOD")
 */
class Validator
{
    /**
     * @var string
     */
    private $from = ValidatorFrom::POST;

    /**
     * 字段名称
     *
     * @var string
     */
    private $name;

    /**
     * 验证器
     *
     * @var string
     */
    private $validator;

    /**
     * Cacheable constructor.
     *
     * @param array $values
     */
    public function __construct(array $values)
    {
        if (isset($values['value'])) {
            $this->name = $values['value'];
        }
        if (isset($values['name'])) {
            $this->name = $values['name'];
        }
        if (isset($values['from'])) {
            $this->from = $values['from'];
        }
        if (isset($values['validator'])) {
            $this->validator = $values['validator'];
        }
    }
}
