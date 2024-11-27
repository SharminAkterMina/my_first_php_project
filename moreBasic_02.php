<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP first project</title>

    <style>
        *{
            margin: 0;
            padding:0;

        }
        .container{
            max-width: 90%;
            background-color: blue;
            margin: auto ; 
        }
    </style>
</head>
<body>
    <div class="container">
        <p>This is my Web Page.</p>

    
    <?php
                // conditional statement
      echo "<h3>if else Condition </h3>";
      $age = 7;
      if($age>5){
        echo "age is greater than 5.";
      }
      elseif($age<5){
        echo "age is less than 5.";
      }
      else{
        echo "nothing.";
      }

      //    array
      echo "<h3>Array </h3>";
      $languages = ['C', 'Python', 'C++', 'JS', 'JAVA'];
      echo $languages[1];
      echo "<br>";
      echo "The number of elements of the Array";
      echo count($languages);


     //  while  loop 
     echo "<h3>while loop </h3>";
     $a=0;
    while ($a <= 10) {
        echo $a ;
        echo "<br>";
        $a++;
    } 
    
    $a = 0;
    while ($a < count($languages)) {
        echo $languages[$a] ;
        echo "<br>";
        $a++;
    } 
    
    // do while loop
    $a=0;
    do  {
        echo $a ;
        echo "<br>";
        $a++;
    } while ($a <= 5);

    for ($i=0; $i < 5; $i++) { 
       echo "<br> the values are: ";
       echo $i;
       echo "<br>";
    }

    // function
    function print_number($number){
        echo "the printed number in this function is:";
        echo $number;

    }
    print_number(45);

    ?>
    </div>
    
</body>
</html>