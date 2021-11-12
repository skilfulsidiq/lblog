<?php

if(!function_exists('limitString'))
{
    function limitString($value, $limit = 200, $end = '...')
    {
        if (mb_strwidth($value, 'UTF-8') <= $limit)
        {
            return $value;
        }
        return rtrim(mb_strimwidth($value, 0, $limit, '', 'UTF-8')).$end;
    }
}
