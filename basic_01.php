<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP first project</title>
</head>
<body>
    <div class="container">
        This is my First PHP using Project

        <?php
        echo  "jndluwnednbjwbed";
        echo "<br>";
           
        //   Constant 
        echo "<h3>Constant</h3>";
        define("PI", 3.1416);
        echo PI;

                       // arithmetic operator

                       echo "<h3>Arithmetic  operator</h3>";
        $var1 = 24;
        $var2 =1; 
        echo "The addition value of var1 and var2:";
        echo $var1+ $var2;

        echo "<br>";
        $var1 = 24;
        $var2 =1; 
        echo "The difference value of var1 and var2:";
        echo $var1 - $var2;
        echo "<br>";


                     // assignment operator
                     echo "<h3>Assignment operator</h3>";
        $newVariable = $var1;
        $newVariable +=2;
        echo "The new value after adding 2: " , $newVariable;
        echo "<br>";

        $newVariable = $var1;
        $newVariable *=2;
        echo "The new value after multipling 2: " , $newVariable;
        echo "<br>";

               // comparison operator
               echo "<h3>comparison operator</h3>";
        echo "the comparison value of (1==4): ";
        echo var_dump(1==4);
        echo "<br>";

        echo "the comparison value of (1!=4): ";
        echo var_dump(1!=4);
        echo "<br>";

        echo "the comparison value of (1<=4): ";
        echo var_dump(1<=4);
        echo "<br>";

        echo "the comparison value of (1>=4): ";
        echo var_dump(1>=4);
        echo "<br>";

                         // Increment / decrement operator
                         echo "<h3>Increment / decrement operator</h3>";
        // echo "The value before increment:" ,$var1++;
        // echo "The value after increment:" ,$var1++;
        echo "<br>";

        echo "The value before increment:" ,++$var1;
        echo "<br>";


             // logical operator
             echo "<h3>Logical Operator </h3>";

        $myVar = (true and true);
        echo var_dump($myVar);
        echo "<br>";
        
        $myVar = (true and false);
        echo var_dump($myVar);
        echo "<br>";

        $myVar = (false and false);
        echo var_dump($myVar);
        echo "<br>";

        $myVar = (true or false);
        echo var_dump("using OR:"  ,$myVar);
        echo "<br>";

        $myVar = (true xor false);
        echo var_dump("using OR:"  ,$myVar);
        echo "<br>";


             //data types

        echo "<h3>Data Types </h3> <br>";
        $name = "Sharmin Akter";
        echo var_dump($name);
        
        $age= 24;
        echo var_dump($age);

        echo var_dump(67.1);



        














        







      


        ?>




    </div>
</body>
</html>