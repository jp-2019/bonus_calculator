<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
<?php
    $name = $_POST {"name"};
    $age = $_POST{"age"};
    $hourlyRate = $_POST{"hourlyRate"};
    $hoursWorked = $_POST{"hoursWorked"};
    $bonus = 0;
    $weeklyPay = $hoursWorked * $hourlyRate;

    if ($hoursWorked >= 40){
        $bonus = 40;
    }
    else if ($hoursWorked <= 20 && $hoursWorked > 10) {
        $bonus = 20;
    }
    else if ($hoursWorked <= 10) {
         $bonus = 0;
    }

    $salary = $weeklyPay + $bonus;

    echo "Weekly Pay $" . $weeklyPay . "\n";
    echo "Bonus Pay $" . $bonus . "\n";
    echo "------------";
    echo "Total including bonus $" . $salary . "\n";
?>
    </body>
</html>