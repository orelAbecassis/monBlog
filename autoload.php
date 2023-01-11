<?php
function autoloader($class)
{
    include('Class/'.$class.'.php');
}
spl_autoload_register('autoloader');
