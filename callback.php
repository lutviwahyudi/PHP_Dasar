<?php 
    function (srting $name, callable $filter)
    {
        $fileName = call_user_func($filter, $name);
    }
?>