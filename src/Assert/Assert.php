<?php

/*
 * This file is part of the webmozart/console package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webmozart\Console\Assert;

use BadMethodCallException;
use InvalidArgumentException;
use Traversable;

/**
 * Domain-specific assertions.
 *
 * @method static void nullOrString($value, $message = null)
 * @method static void nullOrInteger($value, $message = null)
 * @method static void nullOrFloat($value, $message = null)
 * @method static void nullOrBoolean($value, $message = null)
 * @method static void nullOrScalar($value, $message = null)
 * @method static void nullOrIsCallable($value, $message = null)
 * @method static void nullOrIsArray($value, $message = null)
 * @method static void nullOrIsTraversable($value, $message = null)
 * @method static void nullOrIsInstanceOf($value, $class, $message = null)
 * @method static void nullOrNotEmpty($value, $message = null)
 * @method static void nullOrTrue($value, $message = null)
 * @method static void nullOrEq($value, $value2, $message = null)
 * @method static void nullOrNotEq($value, $value2, $message = null)
 * @method static void nullOrSame($value, $value2, $message = null)
 * @method static void nullOrNotSame($value, $value2, $message = null)
 * @method static void nullOrGreaterThan($value, $value2, $message = null)
 * @method static void nullOrGreaterThanEq($value, $value2, $message = null)
 * @method static void nullOrLessThan($value, $value2, $message = null)
 * @method static void nullOrLessThanEq($value, $value2, $message = null)
 * @method static void nullOrOneOf($value, $choices, $message = null)
 * @method static void nullOrContains($value, $part, $message = null)
 * @method static void nullOrStartsWith($value, $prefix, $message = null)
 * @method static void nullOrStartsWithLetter($value, $message = null)
 * @method static void nullOrRegex($value, $pattern, $message = null)
 * @method static void nullOrAlnum($value, $message = null)
 * @method static void nullOrFileExists($value, $message = null)
 * @method static void nullOrFile($value, $message = null)
 * @method static void nullOrDirectory($value, $message = null)
 * @method static void nullOrArgumentName($value, $message = null)
 * @method static void nullOrLongOptionName($value, $message = null)
 * @method static void nullOrShortOptionName($value, $message = null)
 * @method static void allString($values, $message = null)
 * @method static void allInteger($values, $message = null)
 * @method static void allFloat($values, $message = null)
 * @method static void allBoolean($values, $message = null)
 * @method static void allScalar($values, $message = null)
 * @method static void allIsCallable($values, $message = null)
 * @method static void allIsArray($values, $message = null)
 * @method static void allIsTraversable($values, $message = null)
 * @method static void allIsInstanceOf($values, $class, $message = null)
 * @method static void allNotEmpty($values, $message = null)
 * @method static void allTrue($values, $message = null)
 * @method static void allEq($values, $value2, $message = null)
 * @method static void allNotEq($values, $value2, $message = null)
 * @method static void allSame($values, $value2, $message = null)
 * @method static void allNotSame($values, $value2, $message = null)
 * @method static void allGreaterThan($values, $value2, $message = null)
 * @method static void allGreaterThanEq($values, $value2, $message = null)
 * @method static void allLessThan($values, $value2, $message = null)
 * @method static void allLessThanEq($values, $value2, $message = null)
 * @method static void allOneOf($values, $choices, $message = null)
 * @method static void allContains($values, $part, $message = null)
 * @method static void allStartsWith($values, $prefix, $message = null)
 * @method static void allStartsWithLetter($values, $message = null)
 * @method static void allRegex($values, $pattern, $message = null)
 * @method static void allAlnum($values, $message = null)
 * @method static void allFileExists($values, $message = null)
 * @method static void allFile($values, $message = null)
 * @method static void allDirectory($values, $message = null)
 * @method static void allArgumentName($values, $message = null)
 * @method static void allLongOptionName($values, $message = null)
 * @method static void allShortOptionName($values, $message = null)
 *
 * @since  1.0
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Assert
{
    public static function string($value, $message = '')
    {
        if (!is_string($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected a string. Got: %s',
                is_object($value) ? get_class($value) : gettype($value)
            ));
        }
    }

    public static function integer($value, $message = '')
    {
        if (!is_int($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected an integer. Got: %s',
                is_object($value) ? get_class($value) : gettype($value)
            ));
        }
    }

    public static function float($value, $message = '')
    {
        if (!is_float($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected a float. Got: %s',
                is_object($value) ? get_class($value) : gettype($value)
            ));
        }
    }

    public static function boolean($value, $message = '')
    {
        if (!is_bool($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected a boolean. Got: %s',
                is_object($value) ? get_class($value) : gettype($value)
            ));
        }
    }

    public static function scalar($value, $message = '')
    {
        if (!is_scalar($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected a scalar. Got: %s',
                is_object($value) ? get_class($value) : gettype($value)
            ));
        }
    }

    public static function isCallable($value, $message = '')
    {
        if (!is_callable($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected a callable. Got: %s',
                is_object($value) ? get_class($value) : gettype($value)
            ));
        }
    }

    public static function isArray($value, $message = '')
    {
        if (!is_array($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected an array. Got: %s',
                is_object($value) ? get_class($value) : gettype($value)
            ));
        }
    }

    public static function isTraversable($value, $message = '')
    {
        if (!is_array($value) && !($value instanceof Traversable)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected a traversable. Got: %s',
                is_object($value) ? get_class($value) : gettype($value)
            ));
        }
    }

    public static function isInstanceOf($value, $class, $message = '')
    {
        if (!($value instanceof $class)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected an instance of %s. Got: %s',
                $class,
                is_object($value) ? get_class($value) : gettype($value)
            ));
        }
    }

    public static function notEmpty($value, $message = '')
    {
        if (empty($value)) {
            throw new InvalidArgumentException(
                $message ?: 'Expected a non-empty value.'
            );
        }
    }

    public static function true($value, $message = '')
    {
        if (true !== $value) {
            throw new InvalidArgumentException(
                $message ?: 'Expected a value to be true.'
            );
        }
    }

    public static function false($value, $message = '')
    {
        if (false !== $value) {
            throw new InvalidArgumentException(
                $message ?: 'Expected a value to be false.'
            );
        }
    }

    public static function eq($value, $value2, $message = '')
    {
        if ($value2 != $value) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected a value equal to %s.',
                self::toString($value2)
            ));
        }
    }

    public static function notEq($value, $value2, $message = '')
    {
        if ($value2 == $value) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected a different value than %s.',
                self::toString($value2)
            ));
        }
    }

    public static function same($value, $value2, $message = '')
    {
        if ($value2 !== $value) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected a value identical to %s.',
                self::toString($value2)
            ));
        }
    }

    public static function notSame($value, $value2, $message = '')
    {
        if ($value2 === $value) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected a value not identical to %s.',
                self::toString($value2)
            ));
        }
    }

    public static function greaterThan($value, $limit, $message = '')
    {
        if ($value <= $limit) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected a value greater than %s.',
                self::toString($limit)
            ));
        }
    }

    public static function greaterThanEq($value, $limit, $message = '')
    {
        if ($value < $limit) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected a value greater than or equal to %s.',
                self::toString($limit)
            ));
        }
    }

    public static function lessThan($value, $limit, $message = '')
    {
        if ($value >= $limit) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected a value less than %s.',
                self::toString($limit)
            ));
        }
    }

    public static function lessThanEq($value, $limit, $message = '')
    {
        if ($value > $limit) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected a value less than or equal to %s.',
                self::toString($limit)
            ));
        }
    }

    public static function oneOf($value, array $choices, $message = '')
    {
        if (!in_array($value, $choices, true)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected one of: %2$s. Got: %s',
                self::toString($value),
                implode(', ', array_map(array(__CLASS__, 'toString'), $choices))
            ));
        }
    }

    public static function contains($value, $part, $message = '')
    {
        if (false === strpos($value, $part)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected a value to contain %2$s. Got: %s',
                self::toString($value),
                self::toString($part)
            ));
        }
    }

    public static function startsWith($value, $prefix, $message = '')
    {
        if (0 !== strpos($value, $prefix)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected a value to start with %2$s. Got: %s',
                self::toString($value),
                self::toString($prefix)
            ));
        }
    }

    public static function startsWithLetter($value, $message = '')
    {
        $valid = isset($value[0]);

        if ($valid) {
            $locale = setlocale(LC_CTYPE, 0);
            setlocale(LC_CTYPE, 'C');
            $valid = ctype_alpha($value[0]);
            setlocale(LC_CTYPE, $locale);
        }

        if (!$valid) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected a value to start with a letter. Got: %s',
                self::toString($value)
            ));
        }
    }

    public static function regex($value, $pattern, $message = '')
    {
        if (!preg_match($pattern, $value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'The value %s does not match the expected pattern.',
                self::toString($value)
            ));
        }
    }

    public static function alnum($value, $message = '')
    {
        $locale = setlocale(LC_CTYPE, 0);
        setlocale(LC_CTYPE, 'C');
        $valid = !ctype_alnum($value);
        setlocale(LC_CTYPE, $locale);

        if ($valid) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'Expected a value to contain characters and digits only. Got: %s',
                self::toString($value)
            ));
        }
    }

    public static function fileExists($value, $message = '')
    {
        self::string($value);

        if (!file_exists($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'The file %s does not exist.',
                $value
            ));
        }
    }

    public static function file($value, $message = '')
    {
        self::fileExists($value, $message);

        if (!is_file($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'The path %s is not a file.',
                $value
            ));
        }
    }

    public static function directory($value, $message = '')
    {
        self::fileExists($value, $message);

        if (!is_dir($value)) {
            throw new InvalidArgumentException(sprintf(
                $message ?: 'The path %s is no directory.',
                $value
            ));
        }
    }

    public static function argumentName($value)
    {
        self::string($value, 'The argument name must be a string. Got: %s');
        self::notEmpty($value, 'The argument name must not be empty.');
    }

    public static function longOptionName($value)
    {
        self::string($value, 'The long option name must be a string. Got: %s');
        self::notEmpty($value, 'The long option name must not be empty.');
    }

    public static function shortOptionName($value)
    {
        self::string($value, 'The short option name must be a string. Got: %s');
        self::notEmpty($value, 'The short option name must not be empty.');
    }

    public static function toString($value)
    {
        if (null === $value) {
            return 'null';
        }

        if (true === $value) {
            return 'true';
        }

        if (false === $value) {
            return 'false';
        }

        if (is_object($value)) {
            return get_class($value).' object';
        }

        if (is_resource($value)) {
            return 'resource';
        }

        if (is_string($value)) {
            return '"'.$value.'"';
        }

        return (string) $value;
    }

    public static function __callStatic($name, $arguments)
    {
        if ('nullOr' === substr($name, 0, 6)) {
            if (null !== $arguments[0]) {
                $method = lcfirst(substr($name, 6));
                call_user_func_array(array('static', $method), $arguments);
            }

            return;
        }

        if ('all' === substr($name, 0, 3)) {
            self::isTraversable($arguments[0]);

            $method = lcfirst(substr($name, 3));
            $args = $arguments;

            foreach ($arguments[0] as $entry) {
                $args[0] = $entry;

                call_user_func_array(array('static', $method), $args);
            }

            return;
        }

        throw new BadMethodCallException('No such method: '.$name);
    }

    private function __construct()
    {
    }
}
