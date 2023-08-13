<?php 
    function sayHello()
    {
        echo "halo nama saya adalah";
    }

    sayHello();

    //function argument

    function helloName($name)
    {
        echo "halo nama saya adalah $name" . PHP_EOL;
    }

    helloName("lutvi");
    helloName("budi");

    //ini default argument
    function nameUser($nama = "gak tau")
    {
        echo "halo nama saya adalah $nama" . PHP_EOL;
    }

    nameUser();
    nameUser("jiang ni");

    //function return data

    function sum(int $first, int $second)
    {
        $total = $first + $second;
        return $total;
    }

    $result = sum(10, 10);
    var_dump($result);

    //function return data 2

    function getfinalvalue(int $value)
    {
        if ($value >= 85 ) {
            return "grade A";
        }elseif ($value >= 65) {
            return "grade B";
        }elseif ($value >= 60) {
            return "grade C";
        }else {
            return "bodoh sekali anda";
        }
    }

    $score = getfinalvalue(87);
    echo $score;
?>