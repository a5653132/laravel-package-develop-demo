<?php
/**
 * Created by PhpStorm.
 * User: macbookair
 * Date: 31/05/2019
 * Time: 11:17 AM
 */

namespace Laravist\Hasher;


class MD5Hasher
{
    public function make($value, array $options = []) {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value. $salt);
    }

    public function check($value, $hashValue, array $options = []) {
        $salt = isset($options['salt']) ? $options['salt'] : '';

        return hash('md5', $value. $salt) === $hashValue;
    }

}


