<?php

namespace Swoftx\Validator;

use Swoft\Bean\Annotation\Bean;
use Swoftx\Validator\Bean\Collector\ValidatorCollector;
use Swoftx\Validator\Bean\Annotation\Validator as ValidatorAnnotation;

/**
 * Class Validator
 * @Bean
 */
class Validator
{
    /**
     * 验证参数是否有效
     * @author limx
     * @param $data
     * @param $className
     * @param $method
     * @return bool
     */
    public function valid($data, $className, $method)
    {
        /** @var ValidatorAnnotation $annotation */
        $annotation = ValidatorCollector::getAnnotation($className, $method);
        /** @var ValidatorInterface $validator */
        $validator = $annotation->getValidator();

        return $validator->valid($data);
    }
}