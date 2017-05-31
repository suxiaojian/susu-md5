<?php


namespace Susu\Md5;


class Md5hash
{
    public function make($value, array $option = [])
    {
        $salt = isset($option['salt']) ? $option['salt'] : "";

        return hash('md5', $value . $salt)."wcc is SB";
    }

    public function check($value, $hashValue, array $option = [])
    {
        $salt = isset($option['salt']) ? $option['salt'] : "";

        return hash('md5', $value . $salt) === $hashValue;
    }

}