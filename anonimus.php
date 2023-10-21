<?php 

    $sayHello = function (string $name)
    {
        echo "hello, $name" . PHP_EOL;
    };

    $sayHello("budi");
    $sayHello("lutvi");

    function sayGoodbye(string $name, $filter)
    {
        $finalName = $filter($name);
        echo "goodbye $finalName" . PHP_EOL;
    }

    sayGoodbye("lutvi", function (string $name):string
    {
      return strtoupper($name);  
    });

    //mengakses variable diluar anonimus function
    $firstName = "Lutvi";
    $lastName = "Wahyudi";

    $sayHelloName = function () use($firstName, $lastName)
    {
        echo "hello, $firstName $lastName" . PHP_EOL;
    };

    $sayHelloName();
?>