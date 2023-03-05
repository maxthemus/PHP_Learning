<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>
<body>
    <?php
        //Testing a variable
        $_name = "Max";
        $func = function($number) {
            switch($number) {
                case 0:
                    return "One";
                case 1:
                    return "Two";
                case 2: 
                    return "Three";
                default:
                    return "Nan";
            }
        };
        echo "Hello world! ",  $func(1);
    ?>
    <br />
        <!-- Form handling -->
        <form action="welcome.php" method="POST">
            Name: <input type="text" name="name"><br/>
            E-mail: <input type="text" name="email"><br/>
            <input type="submit">
        </form>

        <form action="get.php" method="GET">
            Name: <input type="text" name="name"><br/>
            <input type="submit">
        </form>

        <?php
            echo "Hello World 2.0";
        ?>
</body>
</html>