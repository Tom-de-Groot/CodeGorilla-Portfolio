<?php 
    //  Loops \\
    //  Assignment 1: Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position.
    for ($x= 1; $x <= 10; $x++){
        if ($x < 10){
            echo "$x-";
        }
        else {
            echo "$x" . "\n";
        }
    }
    echo "<br><br>";

    // Assignment 2: Create a script using a for loop to add all the integers between 0 and 30 and display the total.
    $total = 0;
    for ($x = 1; $x <= 30; $x++){
        $total += $x;
    }
    echo "Total: " . $total;
    echo "<br><br>";

    // Assignment 3: Create a script to construct the following pattern, using nested for loop.
    for($row = 1; $row <= 5; $row++){
        for ($star = 1; $star <= $row; $star++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";

    // Assignment 4: Create a script to construct the following pattern, using a nested for loop.
    $n = 5;
    for ($x = 1; $x <= $n; $x++){
        for ($j = 1; $j <= $x; $j++){
            echo "*";
        }
        echo "<br>";
    }
    for ($x = $n; $x >= 1; $x--){
        for ($j = 1; $j <= $x; $j++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";

    // Assignment 5: Write a PHP script using nested for loop that creates a chess board as shown below. Use table width="270px" and take 30px as cell height and width.
?>
    <table width = "400px" cellspacing = "0px" cellpadding = "0px" border = "1px">
        
<?php
    for ($row = 1; $row <= 8; $row++){
        echo "<tr>";
        for ($column = 1; $column <=8; $column++){
            $total = $row+$column;
            if ($total % 2 == 0){
                echo "<td height= 35px widht= 30px bgcolor= #FFFFFF></td>";
            }
            else {
                echo "<td height= 35px width= 30px bgcolor= #000000></td>";
            }
        }
        echo "</tr>";
    }    
?>
    </table>


<?php
    // Functions \\
    // Assignment 1: Write a function to check whether a number is prime or not.
    echo "<br>";

    function primeCheck($num){
        if ($num == 1)
        return 0;

        for ($x = 2; $x <= sqrt($num); $x++){
            if ($num % $x == 0)
            return 0;
        }
        return 1;
    }

    echo "Prime Check: ";

    $check = primeCheck(76);

    if ($check == 1)
    echo "Prime";
    else 
    echo "Not a Prime";

    // Assignment 2: Write a function to reverse a string.
    echo "<br><br>";

    echo "Reversed string: ";
    $str = "This is a string";
    echo strrev($str);

    // Assignment 3: Write a PHP function that checks whether a string is all lowercase.
    echo "<br><br>";

    function lowercaseCheck($str){
        for ($check = 0; $check < strlen($str); $check++){
            if (ord($str[$check]) >= ord("A") && ord($str[$check]) <= ord("Z")){
                return false;
            }
        }
        return true;
    }

    $stringCheck = "testing if this is lowercase";
    
    echo "String is lowercase: "; 
    var_dump(lowercaseCheck($stringCheck));
    echo "<br><br>";

    // Assignment 4: Write a function to sort an array.
    $colors = array("Green", "Blue", "Red", "Yellow");
    sort($colors);
    print_r($colors);
    echo "<br><br>";
    // Assignment 5: Write a PHP function that checks whether a person is eligible to vote.












    // Arrays \\
    // Assignment 1: Write a script which will display the following string
    $color = array("white", "green", "red", "blue", "black");
    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the " . $color[2] . " carpet, <br>
    the " . $color[1] . " lawn, the " . $color[0] . " white house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
    echo "<br>";

    // Assignment 2: Write a PHP script which will display the colors in the following way
    $color = array("white", "green", "red");
    echo "<ul>" .
            "<li>" . $color[1] . "</li>" .
            "<li>" . $color[2] . "</li>" .
            "<li>" . $color[0] . "</li>" .
         "</ul>";

    //Assignment 3: Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the capital of the country.
    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
    echo "The capital of "
    
?>