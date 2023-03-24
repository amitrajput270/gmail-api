<?php

if (!function_exists('snakeToCamel')) {
    /**
     * Convert snake case to camel case
     *
     * @param string $string
     * @param bool $capitalizeFirstCharacter
     * @return string
     */
    function deepCamelize($data, $capitalizeFirstCharacter = false)
    {
        if (is_array($data)) {
            $newArray = [];
            foreach ($data as $key => $value) {
                $newArray[snakeToCamel($key)] = deepCamelize($value);
            }
            return $newArray;
        } else {
            return snakeToCamel($data);
        }
    }
}

if (!function_exists('snakeToCamel')) {
    /**
     * Convert snake case to camel case
     *
     * @param string $string
     * @param bool $capitalizeFirstCharacter
     * @return string
     */
    function snakeToCamel($string, $capitalizeFirstCharacter = false)
    {
        $str = str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));
        if (!$capitalizeFirstCharacter) {
            $str = lcfirst($str);
        }
        return $str;
    }
}
