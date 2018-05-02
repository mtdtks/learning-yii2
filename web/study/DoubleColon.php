<?php
/**
 * Created by IntelliJ IDEA.
 * User: t-matsuda
 * Date: 2018/05/02
 * Time: 13:44
 */

class DoubleColon {
    const CONST_VALUE = 'A Constant Value.';
}

$classname = 'DoubleColon';
echo $classname::CONST_VALUE;  // PHP5.3.0以降

echo DoubleColon::CONST_VALUE;

?>