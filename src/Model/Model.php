<?php
/**
 * Slince SmartQQ Library
 * @author Tao <taosikai@yeah.net>
 */
namespace Slince\SmartQQ\Model;

class Model implements ModelInterface
{
    /**
     * 属性
     * @var array
     */
    protected $attributes = [];

    function __construct(array $attributes = [])
    {
        if (!empty($attributes)) {
            $this->attributes = $attributes;
        }
    }

    function __get($name)
    {
        return $this->get($name);
    }

    function __set($name, $value)
    {
        $this->set($name, $value);
    }

    /**
     * @param array $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * 输出数组形式
     * @return array
     */
    function toArray()
    {
        return $this->attributes;
    }

    /**
     * 设置单个属性值
     * @param $attribute
     * @param $value
     */
    function set($attribute, $value)
    {
        $this->attributes[$attribute] = $value;
    }

    /**
     * 获取属性值
     * @param $attribute
     * @return null
     */
    function get($attribute)
    {
        return $this->attributes[$attribute] ?: null;
    }

    /**
     * 继承方法
     * @return array
     */
    function jsonSerialize()
    {
        return $this->attributes;
    }
}