<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP Form</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
    <!-- Step 1: Create form with HTML -->
        <form action="bonus-calculator.php" method = "post">
            Name:<input type="text" name="name" id="">
            Age:<input type="number" name="age" id="">
            Rate:<input type="number" step="any" name="hourlyRate" id="">
            Hours:<input type="number" step="0.01" name="hoursWorked" id="">
            <input type="submit">
        </form>
    </body>
</html>