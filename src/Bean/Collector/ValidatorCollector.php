<?php
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://doc.swoft.org
 * @contact  limingxin@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */
namespace Swoftx\Validator\Bean\Collector;

use Swoft\Bean\CollectorInterface;

class ValidatorCollector implements CollectorInterface
{
    protected static $annotations = [];

    public static function collect(
        string $className,
        $objectAnnotation = null,
        string $propertyName = '',
        string $methodName = '',
        $propertyValue = null
    ) {
        static::$annotations[$className][$methodName] = $objectAnnotation;
    }

    public static function getCollector()
    {
        return static::$annotations;
    }

    /**
     * 获取对应注解
     * @author limx
     * @param $className
     * @param $methodName
     * @return null
     */
    public static function getAnnotation($className, $methodName)
    {
        $annotations = static::getCollector();
        if (isset($annotations[$className][$methodName])) {
            return $annotations[$className][$methodName];
        }
        return null;
    }
}
