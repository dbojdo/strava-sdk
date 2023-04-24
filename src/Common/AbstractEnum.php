<?php

namespace Goosfraba\StravaSDK\Common;

abstract class AbstractEnum implements \Stringable
{
    private static array $instances = [];

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function __callStatic($name, $arguments): AbstractEnum
    {
        return self::instance(strtolower($name));
    }

    /**
     * Gives / creates an instance of given enum
     *
     * @param string $value the string representation of enum
     * @return static the enum instance
     */
    protected static function instance(string $value): AbstractEnum
    {
        self::init($class = get_called_class());

        $key = strtolower($value);
        if (!self::$instances[$class][$key]) {
            throw new \OutOfBoundsException(sprintf("Unsupported enum of value \"%s\"", $value));
        }

        return self::$instances[$class][$key];
    }

    /**
     * Creates the enum instance from given string representation
     *
     * @param string $value the string representation of the enum
     * @return AbstractEnum the enum instance
     * @throws \OutOfBoundsException if the string representation does not match any supported mode
     */
    public static function parse(string $value): AbstractEnum
    {
        return self::instance(strtolower($value));
    }

    /**
     * Creates the enum instance from given string representation
     *
     * @param string $value the string representation of the enum
     * @return ?AbstractEnum the enum instance or null if the value cannot be parsed
     */
    public static function tryParse(string $value): ?AbstractEnum
    {
        try {
            return static::parse($value);
        } catch (\OutOfBoundsException $e) {
            return null;
        }
    }

    private static function init(string $class): void
    {
        if (isset(self::$instances[$class])) {
            return;
        }

        $reflection = new \ReflectionClass($class);
        foreach ($reflection->getConstants() as $constant) {
            static::$instances[$class][strtolower($constant)] = new static($constant);
        }
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return $this->value;
    }
}
