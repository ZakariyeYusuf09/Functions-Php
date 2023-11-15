<?php

echo "<h2 style='text-align: center;'>Name :Zakarie Yusuf Mohamud Class: BIT27B </h2>";
echo "<br><b>Question 1 </b>Lowest Common Multiplier(LCM).<br>";
function calculateLCM($a, $b)
{
    $max = min($a, $b);
    while (true) {
        if ($max % $a == 0 && $max % $b == 0) {
            return $max;
        }
        
        $max++  ;
    }
}

// Example usage
$a = 18;
$b = 12;
$lcm = calculateLCM($a, $b);
echo "LCM of $a and $b is: $lcm";
echo "<br><b>Question 2 </b>Highest Common Factor(HCF).<br>";

function calculateHCF($num1 = 12, $num2 = 18) {
    $min = min($num1, $num2);
    $hcf = 1;

    for ($i = 1; $i <= $min; $i++) {
        if ($num1 % $i == 0 && $num2 % $i == 0) {
            $hcf = $i; 
         }
    }

    return $hcf;
}

$hcfResult = calculateHCF();
echo "HCF of 12 and 18 is: " . $hcfResult;
echo "<br><b>Question 3 </b>Non-Prime Numbers.<br>";
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function printNonPrimes($start = 2, $end = 100) {
    for ($i = $start; $i <= $end; $i++) {
        if (!isPrime($i)) {
            echo $i . " ";
        }
    }
}

printNonPrimes();
echo "<br><b>Question 4 </b>function that takes two arguments, the decimal 
number and the radix (base), then converts it into any radix.<br>";
function convertToRadix($decimalNumber, $radix) {
    if ($radix < 2 || $radix > 36) {
        echo "Invalid radix. Please use a radix between 2 and 36.";
        return;
    }

    $result = base_convert($decimalNumber, 10, $radix);

    echo "Decimal {$decimalNumber} in base {$radix}: {$result}";
}

convertToRadix(128, 2);
echo "<br><b>Question 5 </b> PHP code that declares a function that takes one dimensional numerically
indexed array as an argument.<br>";
function arrayOperations($arr) {
    echo "All array elements: ";
    foreach ($arr as $element) {
        echo $element . " ";
    }


    $oddTotal = 0;
    foreach ($arr as $element) {
        if ($element % 2 !== 0) {
            $oddTotal += $element;
        }
    }
    echo "<br>Total of odd elements: {$oddTotal}<br>";

    $evenTotal = 0;
    foreach ($arr as $element) {
        if ($element % 2 === 0) {
            $evenTotal += $element;
        }
    }
    echo "Total of even elements: {$evenTotal}<br>";

    $total = array_sum($arr);
    echo "Total of all elements: {$total}<br>";
}

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
arrayOperations($array);
?>