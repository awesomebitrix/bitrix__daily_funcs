<?php

namespace bitrix__daily_funcs\helpers;
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'].'/manual-errors.log');
/**
 * Model for simple code debug.
 */
class Debug
{
    /**
     * Shorten for '<pre>'.print_r($var, true).'</pre>'
     *
     * @param $var
     * @return string
     */
    public static function viewVar($var){
        return '<pre>'.print_r($var, true).'</pre>';
    }

    /**
     * Shorten for error_log(print_r($var,true))
     *
     * @param $var
     * @return string
     */
    public static function logVar($var){
        error_log(print_r($var,true));
        return true;
    }
}