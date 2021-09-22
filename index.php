<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home Page</h1>
    <?php $hour=date('h') ?>
    <p>
        <?php
            if($hour>6 || $hour<18){
                echo "<b>Day Time </b>";
            }else
            {
                echo "<b>Night Time";
            }
        ?>
    </p>
    <?php 
        echo isset($name);
        $name="Ball";
        echo isset($name);
        echo "/$$name";
        $str="I need a girlfriend.Please Find for me,Thanks";
        echo strlen($str);
        echo substr($str,1,9);
        echo str_replace("Find","Borrow",$str
        );
        $user = ["Alice", 22];
        [ $name, $age ] = $user;
        echo $age;
        $users =["tom", "bob", "alice","marty"];
        $result = array_splice($users, 1, 2);
        print_r($users); // Array ( [0] => tom [1] => alice )
        print_r($result);
        $str=implode(" ",$users);
        print_r($str);
        echo 3>4 xor 4<5;
    ?>

</body>
</html>