
<?php
    // PHP Study

    // VSCode extensions + debugger
    // -------------------------------
    // Xdebug Configuration
    // Call phpinfo() method => copy output => paste in wizard found @ link below => follow instructions
    // https://xdebug.org/wizard

    // PHP Intelephense linter VScode extension installed + Xdebug extension

    // Define Constants
    // -----------------------
    define("PI", 3.14);
    define ("DAYSINNOVEMBER", 30);

    // Define Global Array
    // -----------------------
    $globalArrayCards = array("Ace", "King", "Queen", "Jack");
    $globalArraySorting = array("Z", "F", "G", "I", "M", "T", "A", "D");

    // Define Global Associative Array (Key/Value Pairs)
    // ----------------------------------------------------
    $globalAssocArray = array("Name" => "Jay", "Position" => "Student");
    $globalAssocArraySorting = array("Ford" => "Falcon", "Holden" => "Commodore", "Mazda" => "RX-7", "Tesla" => "Cybertruck");

    // Define Global Multi-Dimensional array
    // -----------------------------------------
    $globalMultiArray = array (
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );

    // Variable initialisation + concatenation
    // -----------------------------------------
    $x = "Variable x";
    $y = "Variable y";
    $numOne = 5;
    $numtwo = 10;

    echo "String Variable Testing: ";
    echo $x . " ". $y . " ";
    echo "| ";
    echo "Int Variable Testing: ";
    echo "5 + 10 = " .$numOne + $numtwo;
    echo '<br><br>';

    // Print/Echo function testing
    // ------------------------------
    echo "Print/Echo Testing <br>";
    echo "------------------------- <br>";
    echo "Hello World <br>";
    print("Hello World <br>");
    echo("Hello World");
    echo "<br>";
    echo "Days in November: " . DAYSINNOVEMBER;
    echo "<br>";
    echo "Pi: " . PI;
    echo "<br>";

    // Function Definition/Global Variable Access Testing
    // -----------------------------------------------------
    function sumOfVar($x, $y) {
        return $x + $y; 
    }

    function accessGlobalVar() {
        global $y;
        $globalReturn = "Global Variables: " . $GLOBALS['x'] . " " . $y;
        return $globalReturn;
    }

    function exponentialVar($varOne, $varTwo) {
        return $varOne ** $varTwo;
    }

    // Selection Statement/Logical Operator Testing
    // ------------------------------------------------
    function testingIfElseLogicalNested($z) {
        $x = 10;
        $y = 5;
        $txt = "Hi";

        if ($x === 10 || $y === 5) {
            if ($z === 15 && $txt == "Hi") {
                echo "Logical testing passed";
            }
            else {
                echo "Logical testing failed";
            }
        }
    }

    function testingSwitch($val) {
        switch($val) {
            case 1:
                echo "True";
                break;
            case 0:
                echo "False";
                break;
            default:
                echo "If it is not true and not false, then what is it?";
        }
    }

    // Loop/Array Testing
    // ----------------------
    function testingWhile() {
        $x = 5;
        while ($x > 0) {
            echo "$x";
            echo "<script>console.log($x);</script>";
            $x--;
        }   
    }

    function testingFor() {
        for ($i = 0; $i < 5; $i++) {
            echo "$i";
            echo "<script>console.log($i);</script>";
        }
    }

    function testingDoWhile() {
        $x = 5;
        do {
            echo "$x";
            $x--;
        } while ($x > 0);
    }

    function testingForEach() {
        $testArr = array("WoW", "Guild Wars 2", "Everquest", "Runescape");
        foreach($testArr as $val) {
            echo "$val " . "is a very good MMO<br>";
        }
    }

    function testingPassedArrayIteration($arr) {
        foreach($arr as $val) {
            echo "<script>console.log($val);</script>";
            echo "Card: " . "$val<br>";
        }
    }

    function testingAssocArray($arr) {
        foreach($arr as $val => $val_value) {
            echo "Key = " . $val . " | Value = " . $val_value . "<br>";
        }
    }

    function testingLocalAssocArray() {
        $carArr = array("Model" => "Ford", "Color" => "Red", "Type" => "Sedan");
        
        foreach($carArr as $i => $i_val) {
            echo $i . ": " . $i_val . "<br>";
        }
    }

    function testingMultiArray($arr) {
        for ($i = 0; $i < count($arr); $i++) {
            echo "Nested Array " . $i . ":<br>";
            foreach ($arr[$i] as $val) {
                echo $val . "<br>";
            }
        }
    }

    function testArrayAscendSort($arr) {
        $arrLocal = $arr;
        sort($arrLocal);
        
        foreach ($arrLocal as $i) {
            echo $i;
        }
    }

    function testArrayDescendSort($arr) {
        $arrLocal = $arr;
        rsort($arrLocal);

        foreach($arrLocal as $i) {
            echo $i;
        }
    }

    function testAssocArrayAscendValue($arr) {
        $arrLocal = $arr;
        asort($arrLocal);
        $count = 0;
        
        foreach($arrLocal as $i) {
            if ($count == count($arrLocal) - 1) {
                echo $i;
            }
            else {
                echo $i . ", ";
                $count++;
            }
        }
    }

    function testAssocArrayAscendKey($arr) {
        $arrLocal = $arr;
        ksort($arrLocal);
        $count = 0;
        
        foreach($arrLocal as $i) {
            if ($count == count($arrLocal) - 1) {
                echo $i;
            }
            else {
                echo $i . ", ";
                $count++;
            }
        }
    }

    function testAssocArrayDescendValue($arr) {
        $arrLocal = $arr;
        arsort($arrLocal);
        $count = 0;
        
        foreach($arrLocal as $i) {
            if ($count == count($arrLocal) - 1) {
                echo $i;
            }
            else {
                echo $i . ", ";
                $count++;
            }
        }
    }

    function testAssocArrayDescendKey($arr) {
        $arrLocal = $arr;
        krsort($arrLocal);
        $count = 0;
        
        foreach($arrLocal as $i) {
            if ($count == count($arrLocal) - 1) {
                echo $i;
            }
            else {
                echo $i . ", ";
                $count++;
            }
        }
    }

    // Regular Expression (RegEx) Testing
    // Modifiers: i = case-insensitive, m = multi-line search, u = UTF-8 encoded matching
    // -------------------------------------
    function testRegExPregMatch($pattern, $str, $caseSens = true) {
        if (!$caseSens) {
            $pattern .= "i";
        }
        
        echo "preg_match() " . $pattern . ": " . preg_match($pattern, $str);
    }

    function testRegExPregMatchAll($pattern, $str, $caseSens = true) {
        if (!$caseSens) {
            $pattern .= "i";
        }
        
        echo "preg_match_all() " . $pattern . ": " . preg_match_all($pattern, $str);
    }

    function testRegPregReplace($pattern, $replacement, $replace, $caseSens = true) {
        if (!$caseSens) {
            $pattern .= "i";
        }

        echo "preg_replace() " . $pattern. ": " . preg_replace($pattern, $replacement, $replace);
    }

    // Function testing
    // ---------------------
    $sumOfVar = sumOfVar(20, 30);
    echo "Sum Function Test: " . $sumOfVar;
    echo "<br>";

    $globalVarOutput = accessGlobalVar();
    echo $globalVarOutput;
    echo "<br>";

    $exponentialVar = exponentialVar(3, 2);
    echo "Exponent Function Test: " . $exponentialVar;
    echo "<br><br>";
    echo "Loop and Selection Statement Testing <br>";
    echo "-----------------------------------------------<br>";

    echo "Testing While Loop: ";
    testingWhile();
    echo "<br>";

    echo "Testing For Loop: ";
    testingFor();

    echo "<br>Testing Do While Loop: ";
    testingDoWhile();

    echo "<br>Testing Switch Statement: ";
    testingSwitch(1);

    echo "<br>Testing Switch Statement: ";
    testingSwitch(0);

    echo "<br>Testing Switch Statement: ";
    testingSwitch(2);
    echo "<br>";

    echo "<br>Testing Foreach loop: <br>";
    testingForEach();

    echo "<br>Testing Nested Logical If/Else: <br>";
    echo "Pass in any number other than 15 to fail the test <br>";
    testingIfElseLogicalNested(15);

    echo "<br><br>";
    echo "Array Testing<br>";
    echo "---------------------<br>";
    echo "Testing Array Iteration: <br>";
    testingPassedArrayIteration($globalArrayCards);
    echo "<br>";

    echo "Testing Associative Array Iteration: <br>";
    testingAssocArray($globalAssocArray);
    echo "<br>";

    echo "Testing Local Associative Array Iteration: <br>";
    testingLocalAssocArray();
    echo "<br>";

    echo "Testing Multi-Dimensional Array Iteration: <br>";
    testingMultiArray($globalMultiArray);
    echo "<br>";

    echo "Testing Array Sorting (Ascending): ";

    testArrayAscendSort($globalArraySorting);
    echo "<br>";


    echo "Testing Array Sorting (Descending): ";
    testArrayDescendSort($globalArraySorting);
    echo "<br>";

    echo "Testing Associative Array Sorting By Value (Ascending): ";
    testAssocArrayAscendValue($globalAssocArraySorting);
    echo "<br>";

    echo "Testing Associative Array Sorting By Value (Descending): ";
    testAssocArrayDescendValue($globalAssocArraySorting);
    echo "<br>";

    echo "Testing Associative Array Sorting By Key (Ascending): ";
    testAssocArrayAscendKey($globalAssocArraySorting);
    echo "<br>";

    echo "Testing Associative Array Sorting By Key (Descending): ";
    testAssocArrayDescendKey($globalAssocArraySorting);
    echo "<br><br>";

    echo "Testing Superglobals <br>";
    echo "-----------------------------<br>";
    echo '"$_SERVER" <br>';
    echo "HTTP METHOD: " . $_SERVER['REQUEST_METHOD'] . "<br>" . "WEB SERVER SOFTWARE: " . $_SERVER['SERVER_SOFTWARE'];
    echo "<br><br>";

    echo "Testing Regular Expressions (RegEX) Overloaded <br>";
    echo "-------------------------------------<br>";
    testRegExPregMatch("/hello/", "Hello World");
    echo "<br>";
    testRegExPregMatch("/hello/", "Hello World", false);
    echo "<br>";
    testRegExPregMatchAll("/hell/", "Hello World, it is a hellscape!");
    echo "<br>";
    echo "Overloaded Case-Insensitive: ";
    testRegExPregMatchAll("/hell/", "Hello World, it is a hellscape!", false);
    echo "<br>";
    testRegPregReplace("/hello/", "Goodbye", "Hello World", false);

    
    




?>
