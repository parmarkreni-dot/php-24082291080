<?php
echo "<h2>PHP Exception Handling Demo</h2>";


function checkNumber($num) {
    if ($num <= 0) {
        
        throw new Exception("Number must be greater than zero.");
    }
    return $num;
}

try {
    echo "<h3>1. Try Block</h3>";
    
    $number = -5;
    echo "Checking number: $number <br>"; 
    
    $result = checkNumber($number);
    echo "Valid Number: $result <br>";

} catch (Exception $e) {
    
    echo "<h3>2. Catch Block</h3>";
    echo "Error: " . $e->getMessage() . "<br>";

} finally {
    
    echo "<h3>3. Finally Block</h3>";
    echo "This block always runs whether exception occurs or not.<br>";
}


echo "<h3>4. Multiple Exception Example</h3>";

try {
    $a = 10;
    $b = 0;

    if ($b == 0) {
        throw new Exception("Division by zero error.");
    }

    $c = $a / $b;
    echo "Result: $c <br>";

} catch (Exception $e) {
    echo "Caught Exception: " . $e->getMessage() . "<br>";

} finally {
    echo "Execution completed.<br>";
}

?>