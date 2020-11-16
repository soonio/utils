<?php

declare(strict_types=1);

namespace soonio\utils;

/**
 * Trait Configure
 * 类工具
 * 用于配置类属性
 * @package soonio\utils
 */
trait Configure
{
    public static function configure(object $object, array $properties)
    {
        foreach ($properties as $name => $value) {
            $object->$name = $value;
        }
        return $object;
    }
}