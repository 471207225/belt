<?php namespace Belt;

use Closure;

class Utilities {

    /**
     * Generate a unique identifier.
     *
     * @param string $prefix
     * @return string
     */
    public function id($prefix = '')
    {
        return uniqid($prefix, true);
    }

    /**
     * Escape all HTML entities in a string.
     *
     * @param string $string
     * @return string
     */
    public function escape($string)
    {
        return htmlentities($string, ENT_QUOTES, 'UTF-8', false);
    }

    /**
     * Return the value passed as the first argument.
     *
     * @param mixed $value
     * @return mixed
     */
    public function with($value)
    {
        return $value;
    }

    /**
     * Invoke a $closure $number of times.
     *
     * @param integer $number
     * @param Closure $closure
     * @return void
     */
    public function times($number, Closure $closure)
    {
        foreach (range(1, $number) as $index)
        {
            $closure();
        }
    }


    public function getStringMapping()
    {
        $numList = str_split('0123456789');
        $strList = str_split('ZXCVBNMASD');

        return [$numList,$strList];
    }

    /**
     * 数字转字母
     * @param $number
     * @return string
     */
    public function number2letter($number)
    {
        $number = str_split($number);
        list($numList,$letterList) = $this->getStringMapping();

        return implode(str_replace($numList,$letterList,$number));
    }

    /**
     * 字母转数字
     * @param $letters
     * @return string
     */
    public function letter2number($letters)
    {
        $letters = str_split($letters);
        list($numList,$letterList) = $this->getStringMapping();

        return implode(str_replace($letterList,$numList,$letters));
    }
}

