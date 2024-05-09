<?php

// This documentation provides a brief overview of the sweetView_Cls class, its properties, methods, and an example usage.

// Class: sweetView_Cls

// Description:
// This is an example of a PHP class named `sweetView_Cls` that provides a sweet display of input arrays. 
// In this class, we have a method called `sweetView` which accepts array values, a delimiter, and a separator as input and then displays the array in a sweet format to the user.

// Properties:
// - private array $sweetVal: Holds the array values.
// - private string $sweetDelimiter: Holds the delimiter used in the display.
// - private string $sweetSeparator: Holds the separator used in the display.

// Methods:
// - public function sweetView(array $sweetVal = [], string $sweetDelimiter = "", string $sweetSeparator = ""): 
//   This method sets the values of the array, delimiter, and separator using the method's arguments and then displays the array in a sweet format to the user.

// Example Usage:

// require_once ('sweetView.php');
// sweetViewHelper ($_SERVER, '▌', 'hr');

class sweetView_Cls
{
    private array $sweetVal;
    private string $sweetDelimiter;
    private string $sweetSeparator;

    public function sweetView (array $sweetVal = [] , string $sweetDelimiter = "" , string $sweetSeparator = "")
    {
        $this -> sweetVal = $sweetVal;
        $this -> sweetDelimiter = $sweetDelimiter;
        $this -> sweetSeparator = $sweetSeparator;

        try
        {
            if (!empty ($this -> sweetVal) && !empty ($this -> sweetDelimiter) && !empty ($this -> sweetSeparator))
            {
                $sweetVal = $this -> sweetVal;
                $sweetDelimiter = $this -> sweetDelimiter;
                $sweetSeparator = $this -> sweetSeparator;

                foreach ($sweetVal as $index => $key)
                {
                    print_r ("<b>$index</b>" . $sweetDelimiter . $key . PHP_EOL . "<$sweetSeparator>");
                }
            }
            else  
            {
                throw new Exception ("Array missed. Check the values again.");
            }
        }
        catch (Exception $ex)
        {
            echo $ex -> getMessage ();
        }
    }
}

$sweetObject = new sweetView_Cls ();

function sweetViewHelper (array $sweetVal = [], string $sweetDelimiter = "", string $sweetSeparator = "")
{
    global $sweetObject;
    $sweetObject -> sweetView ($sweetVal, $sweetDelimiter, $sweetSeparator);
}